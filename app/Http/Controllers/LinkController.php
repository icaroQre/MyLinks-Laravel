<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function create()
    {
        return view('links.create');
    }
    
    public function store(StoreLinkRequest $request)
{
    /** @var User $user */
    $user = auth()->user();

    // Obtém a maior posição atual para o usuário e incrementa
    $maxPosition = $user->links()->max('position');
    $position = $maxPosition !== null ? $maxPosition + 1 : 0;

    // Cria o link com a nova posição
    $user->links()->create(array_merge(
        $request->validated(),
        ['position' => $position]
    ));

    return redirect()->route('dashboard');
}

    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    public function update (Link $link, UpdateLinkRequest $request)
    {
        $link->update($request->validated());
        return redirect()->route('dashboard')->with('message', 'Atualizado com sucesso!');

    }
    
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('dashboard')->with('message', 'Deletado com sucesso!');
    }

    public function reorderUp(Link $link){
        
        $link->moveUp();
        return redirect()->route('dashboard');
    }

    public function reorderDown(Link $link)
    {
        $link->moveDown();
        return redirect()->route('dashboard');
    }
}
