<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $posts = ApiService::getPosts();
        info($posts);
        return view('dashboard',  ['posts' => $posts]);
    }
}
