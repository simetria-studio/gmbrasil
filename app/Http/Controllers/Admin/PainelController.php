<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.index', get_defined_vars());
    }

    public function users()
    {
        $users = User::get();
        return view('admin.usuarios', get_defined_vars());
    }
}
