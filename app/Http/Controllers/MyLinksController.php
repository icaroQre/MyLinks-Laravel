<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;

class MyLinksController extends Controller
{
    public function __invoke(User $user)
    {
        $links = Link::where('user_id', $user->id)
                     ->orderBy('position')
                     ->get();

        return view('myLinks', compact('user', 'links'));
    }
} 
