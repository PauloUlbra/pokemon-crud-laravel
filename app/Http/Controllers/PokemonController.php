<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }
    
    public function create()
    {
        return view('pokemons.create');
    }

    public function store(Request $request)
    {
        Pokemon::create($request->all());
        return redirect('pokemons')->with('success', 'Pokemon adicionado com sucesso!');
    }

    public function edit($id)
    {
        $pokemons = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemons'));
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all());
        return redirect('pokemons')->with('success', 'Pokemon atualizado corretamente.');
    }

    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemons')->with('success', 'Pokemon deletado.');
    }
}
