<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function show() {
        return 'Homepage';
    }
}
