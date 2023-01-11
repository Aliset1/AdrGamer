<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Game;
use   PDF;
use Illuminate\Support\Facades\App;


class Games extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $reglas, $valor, $id_categoria, $id_aula;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.games.view', [
            'games' => Game::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('reglas', 'LIKE', $keyWord)
						->orWhere('valor', 'LIKE', $keyWord)
						->orWhere('id_categoria', 'LIKE', $keyWord)
						->orWhere('id_aula', 'LIKE', $keyWord)
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
		$this->reglas = null;
		$this->valor = null;
		$this->id_categoria = null;
		$this->id_aula = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'reglas' => 'required',
		'valor' => 'required',
		'id_categoria' => 'required',
		'id_aula' => 'required',
        ]);

        Game::create([ 
			'nombre' => $this-> nombre,
			'reglas' => $this-> reglas,
			'valor' => $this-> valor,
			'id_categoria' => $this-> id_categoria,
			'id_aula' => $this-> id_aula
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Game Successfully created.');
    }

    public function edit($id)
    {
        $record = Game::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->reglas = $record-> reglas;
		$this->valor = $record-> valor;
		$this->id_categoria = $record-> id_categoria;
		$this->id_aula = $record-> id_aula;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'reglas' => 'required',
		'valor' => 'required',
		'id_categoria' => 'required',
		'id_aula' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Game::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'reglas' => $this-> reglas,
			'valor' => $this-> valor,
			'id_categoria' => $this-> id_categoria,
			'id_aula' => $this-> id_aula
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Game Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Game::where('id', $id);
            $record->delete();
        }

    }
    
    public function generatePdf(){
        $games = Game::all();
        $pdf = PDF::loadView('pdf.games',[
            'games'=>$games
        ]);
        return $pdf->stream();
    }





}
