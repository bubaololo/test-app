<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('isadmin');
    }

    /**
     * Show the users list page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users', ['data' => User::all()]);
    }



    public function userDelete($id)
    {
        $user = new User;
        $username = $user->name;
//        $user->find($id)->delete();

        return redirect()->route('users')->with('status', "Пользователь $username был удалён");
    }
}
