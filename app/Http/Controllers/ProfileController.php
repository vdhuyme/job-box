<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('admin.profiles.index');
    }
}
