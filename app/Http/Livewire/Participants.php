<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Participant;
use   PDF;
use Illuminate\Support\Facades\App;

class Participants extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $apellido, $cedula, $correo, $telefono, $id_equipo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.participants.view', [
            'participants' => Participant::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('apellido', 'LIKE', $keyWord)
						->orWhere('cedula', 'LIKE', $keyWord)
						->orWhere('correo', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->orWhere('id_equipo', 'LIKE', $keyWord)
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
		$this->apellido = null;
		$this->cedula = null;
		$this->correo = null;
		$this->telefono = null;
		$this->id_equipo = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'cedula' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
		'id_equipo' => 'required',
        ]);

        Participant::create([ 
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'cedula' => $this-> cedula,
			'correo' => $this-> correo,
			'telefono' => $this-> telefono,
			'id_equipo' => $this-> id_equipo
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Participant Successfully created.');
    }

    public function edit($id)
    {
        $record = Participant::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->apellido = $record-> apellido;
		$this->cedula = $record-> cedula;
		$this->correo = $record-> correo;
		$this->telefono = $record-> telefono;
		$this->id_equipo = $record-> id_equipo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'cedula' => 'required',
		'correo' => 'required',
		'telefono' => 'required',
		'id_equipo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Participant::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'cedula' => $this-> cedula,
			'correo' => $this-> correo,
			'telefono' => $this-> telefono,
			'id_equipo' => $this-> id_equipo
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Participant Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Participant::where('id', $id);
            $record->delete();
        }
    }
    public function generatePdf(){
        $participants = Participant::all();
        $pdf = PDF::loadView('pdf.participants',[
            'participants'=>$participants
        ]);
        return $pdf->stream();
        //return $pdf->download('participants.pdf');
    }

    public function generatePdfs(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->download();
    }
}
