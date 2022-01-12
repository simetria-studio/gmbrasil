<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Adress;
use App\Models\Codigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'cpf' => 'required|string|unique:users',
            'rg' => 'required|string|unique:users',
            'password' => 'required|string|min:6',

        ];

        $customMessages = [
            'name.required' => 'O campo Nome é obrigatório!',
            'email.required' => 'O campo Email é obrigatório!',
            'cpf.required' => 'O campo CPF é obrigatório!',
            'cpf.unique' => 'Já existe um CPF desse registrado!',
            'rg.required' => 'O campo RG é obrigatório!',
            'rg.unique' => 'Já existe um RG desse registrado!',
            'password.required' => 'O campo Senha é Obrigatório!',

        ];

        $this->validate($request, $rules, $customMessages);
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'uniqid' => "GM".substr(hexdec(uniqid()),8),
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'codigo' => $request->codigo,
            'birth_date' => $request->birth_date,
            'password' => Hash::make($request->password),
        ]);


        $adress = Adress::create([
            'user_id' => $users->id,
            'cep' => $request->cep,
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'numero' => $request->numero,
            'complemento' => $request->complemento,

        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('home');
        }
    }


    public function login(Request $request)
    {
        $authValid = Auth::guard('web')->validate(['email' => $request->email, 'password' => $request->password]);

        if($authValid){
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {

                return response()->json('/', 200);
            }
        }else{
            return response()->json(['invalid' => 'Email ou senha invalidos'], 422);
        }
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

}
