<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Classroom;
use PDF;

class Classrooms extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $numeroAula, $bloque;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.classrooms.view', [
            'classrooms' => Classroom::latest()
						->orWhere('numeroAula', 'LIKE', $keyWord)
						->orWhere('bloque', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->numeroAula = null;
		$this->bloque = null;
    }

    public function store()
    {
        $this->validate([
		'numeroAula' => 'required',
		'bloque' => 'required',
        ]);

        Classroom::create([ 
			'numeroAula' => $this-> numeroAula,
			'bloque' => $this-> bloque
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Classroom Successfully created.');
    }

    public function edit($id)
    {
        $record = Classroom::findOrFail($id);

        $this->selected_id = $id; 
		$this->numeroAula = $record-> numeroAula;
		$this->bloque = $record-> bloque;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'numeroAula' => 'required',
		'bloque' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Classroom::find($this->selected_id);
            $record->update([ 
			'numeroAula' => $this-> numeroAula,
			'bloque' => $this-> bloque
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Classroom Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Classroom::where('id', $id);
            $record->delete();
        }
    }

    public function generatePdf(){
        $classrooms = Classroom::all();
        $pdf = PDF::loadView('pdf.classrooms',[
            'classrooms'=>$classrooms
        ]);
        return $pdf->stream();
        //return $pdf->download('participants.pdf');
    }
}
