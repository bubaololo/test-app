<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiService;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = ApiService::getPosts();

        return view('dashboard', ['posts' => $posts]);
    }
}
