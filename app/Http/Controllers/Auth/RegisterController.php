<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register (RegisterRequest $request)
    {
        if($request->tryRegister()){
            return redirect()->route('dashboard');
        }
        return back()->with(['message' => 'Erro ao registrar']);
    }
}
