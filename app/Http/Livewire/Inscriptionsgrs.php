<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Inscriptionsgr;

class Inscriptionsgrs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $fecha, $tipo_pag, $doc_pago, $total, $id_juego, $id_equipo;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.inscriptionsgrs.view', [
            'inscriptionsgrs' => Inscriptionsgr::latest()
						->orWhere('fecha', 'LIKE', $keyWord)
						->orWhere('tipo_pag', 'LIKE', $keyWord)
						->orWhere('doc_pago', 'LIKE', $keyWord)
						->orWhere('total', 'LIKE', $keyWord)
						->orWhere('id_juego', 'LIKE', $keyWord)
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
		$this->fecha = null;
		$this->tipo_pag = null;
		$this->doc_pago = null;
		$this->total = null;
		$this->id_juego = null;
		$this->id_equipo = null;
    }

    public function store()
    {
        $this->validate([
		'fecha' => 'required',
		'tipo_pag' => 'required',
		'doc_pago' => 'required',
		'total' => 'required',
		'id_juego' => 'required',
		'id_equipo' => 'required',
        ]);

        Inscriptionsgr::create([ 
			'fecha' => $this-> fecha,
			'tipo_pag' => $this-> tipo_pag,
			'doc_pago' => $this-> doc_pago,
			'total' => $this-> total,
			'id_juego' => $this-> id_juego,
			'id_equipo' => $this-> id_equipo
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Inscriptionsgr Successfully created.');
    }

    public function edit($id)
    {
        $record = Inscriptionsgr::findOrFail($id);

        $this->selected_id = $id; 
		$this->fecha = $record-> fecha;
		$this->tipo_pag = $record-> tipo_pag;
		$this->doc_pago = $record-> doc_pago;
		$this->total = $record-> total;
		$this->id_juego = $record-> id_juego;
		$this->id_equipo = $record-> id_equipo;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'fecha' => 'required',
		'tipo_pag' => 'required',
		'doc_pago' => 'required',
		'total' => 'required',
		'id_juego' => 'required',
		'id_equipo' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Inscriptionsgr::find($this->selected_id);
            $record->update([ 
			'fecha' => $this-> fecha,
			'tipo_pag' => $this-> tipo_pag,
			'doc_pago' => $this-> doc_pago,
			'total' => $this-> total,
			'id_juego' => $this-> id_juego,
			'id_equipo' => $this-> id_equipo
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Inscriptionsgr Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Inscriptionsgr::where('id', $id);
            $record->delete();
        }
    }
}
