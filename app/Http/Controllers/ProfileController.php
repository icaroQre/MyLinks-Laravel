<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {

        /** @var User $user */
        $user = auth()->user();

        $data = $request->validated();

        $file = $request->photo;

        if ($file) {
            $data['photo'] = $file->store('photos', 'public');
        }
        

        $user->update($data);
        return back()->with('message', 'Perfil atualizado com sucesso!');
    }
}
