<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Team;
use   PDF;
use Illuminate\Support\Facades\App;

class Teams extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.teams.view', [
            'teams' => Team::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
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
		$this->nombre = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
        ]);

        Team::create([
			'nombre' => $this-> nombre
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Team Successfully created.');
    }

    public function edit($id)
    {
        $record = Team::findOrFail($id);

        $this->selected_id = $id;
		$this->nombre = $record-> nombre;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Team::find($this->selected_id);
            $record->update([
			'nombre' => $this-> nombre
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Team Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Team::where('id', $id);
            $record->delete();
        }
    }
    public function generatePdf(){
        $teams = Team::all();
        $pdf = PDF::loadView('pdf.teams',[
            'teams'=>$teams
        ]);
        return $pdf->stream();
        //return $pdf->download('teams.pdf');
    }

    public function generatePdfs(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->download();
    }
}
