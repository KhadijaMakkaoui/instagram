<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class ProfilesController extends Controller
{
    /**
     * Show the user profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        $users = User::all();
 
        $userFound = $users->find($user->id);
        // $user=User::findOrFail($user);
        // var_dump($userFound);
        // exit;
        return view('profiles.index',[
            'user' => $userFound 
        ]);
    }
}
