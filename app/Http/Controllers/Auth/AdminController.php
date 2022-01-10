<?php

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('auth.painel.login');
    }

    public function register()
    {
        return view('auth.painel.register');
    }

    public function login(Request $request)
    {
        $authValid = Auth::guard('admin')->validate(['email' => $request->email, 'password' => $request->password]);

        if($authValid){
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

                return response()->json('home', 200);
            }
        }else{
            return response()->json(['invalid' => 'Email ou senha invalidos'], 422);
        }
    }
    public function store(Request $request)
    {

        $save = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/home');
        }
    }
}
