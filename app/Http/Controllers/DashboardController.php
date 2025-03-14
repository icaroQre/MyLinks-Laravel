<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Link;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();
        $links = Link::where('user_id', $user->id)
                     ->orderBy('position')
                     ->get();

        return view('dashboard', compact('links')); // Passa a variável para a view
    }
}
