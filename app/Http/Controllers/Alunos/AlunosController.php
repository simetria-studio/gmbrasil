<?php

namespace App\Http\Controllers\Alunos;

use App\Models\Mails;
use App\Mail\Captacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AlunosController extends Controller
{

    public function index()
    {
        return view('cad-aluno.register');
    }

    public function store(Request $request)
    {
        $mails = new Mails();
        $mails['regional'] = $request->regional;
        $mails['diretor'] = $request->diretor;
        $mails['plano'] = $request->plano;
        $mails['curso'] = $request->curso;
        $mails['name'] = $request->name;
        $mails['email'] = $request->email;
        $mails['sexo'] = $request->sexo;
        $mails['birth_date'] = $request->birth_date;
        $mails['civil'] = $request->civil;
        $mails['escolaridade'] = $request->escolaridade;
        $mails['rg'] = $request->rg;
        $mails['orgao'] = $request->orgao;
        $mails['cpf'] = $request->cpf;
        $mails['name_responsavel'] = $request->name_responsavel;
        $mails['cpf_responsavel'] = $request->cpf_responsavel;
        $mails['birth_date_responsavel'] = $request->birth_date_responsavel;
        $mails['telefone'] = $request->telefone;
        $mails['whatsapp'] = $request->whatsapp;
        $mails['cep'] = $request->cep;
        $mails['rua'] = $request->rua;
        $mails['bairro'] = $request->bairro;
        $mails['cidade'] = $request->cidade;
        $mails['estado'] = $request->estado;
        $mails['numero'] = $request->numero;
        $mails['complemento'] = $request->complemento;
        $mails['responsavel_franquia'] = $request->responsavel_franquia;
        $mails['observacao'] = $request->observacao;

        Mail::to('suportegmbrasilvd@gmail.com')->send(new Captacao($mails));

        return redirect()->route('alunos.thanks');
    }
    public function thanks()
    {
        return view('cad-aluno.thanks');
    }
}
