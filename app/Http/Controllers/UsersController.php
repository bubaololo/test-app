<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the users list page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Gate::authorize('see-users');
        return view('users', ['data' => User::all()]);
    }

    public function userDelete($id)
    {
        Gate::authorize('del-users');
        $user = new User;
        $username = $user->find($id)->name;
        $user->find($id)->delete();

        return redirect()->route('users')->with('status', "Пользователь $username был удалён");
    }
}
