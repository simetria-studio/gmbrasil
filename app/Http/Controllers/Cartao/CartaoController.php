<?php

namespace App\Http\Controllers\Cartao;

use App\Models\Mails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Cartao;
use Illuminate\Support\Facades\Mail;

class CartaoController extends Controller
{

    public function index()
    {
        return view('cad-cartao.register');
    }

    public function store(Request $request)
    {
        $mails = new Mails();
        $mails['regional'] = $request->regional;
        $mails['diretor'] = $request->diretor;
        $mails['titular'] = $request->titular;
        $mails['birth_date_titular'] = $request->birth_date_titular;
        $mails['cep'] = $request->cep;
        $mails['rua'] = $request->rua;
        $mails['bairro'] = $request->bairro;
        $mails['cidade'] = $request->cidade;
        $mails['estado'] = $request->estado;
        $mails['numero'] = $request->numero;
        $mails['complemento'] = $request->complemento;
        $mails['civil'] = $request->civil;
        $mails['rg'] = $request->rg;
        $mails['cpf'] = $request->cpf;
        $mails['naturalidade'] = $request->naturalidade;
        $mails['uf'] = $request->uf;
        $mails['nacionalidade'] = $request->nacionalidade;
        $mails['pai'] = $request->pai;
        $mails['mae'] = $request->mae;
        $mails['telefone'] = $request->telefone;
        $mails['whatsapp'] = $request->whatsapp;
        $mails['email'] = $request->email;
        $mails['deficiencia'] = $request->deficiencia;
        $mails['tipo_def'] = $request->tipo_def;
        $mails['plano'] = $request->plano;
        $mails['tipo_plano'] = $request->tipo_plano;

        $mails['dependente1'] = $request->dependente1;
        $mails['birth_date_titular1'] = $request->birth_date_titular1;
        $mails['cep1'] = $request->cep1;
        $mails['rua1'] = $request->rua1;
        $mails['bairro1'] = $request->bairro1;
        $mails['cidade1'] = $request->cidade1;
        $mails['estado1'] = $request->estado1;
        $mails['numero1'] = $request->numero1;
        $mails['complemento1'] = $request->complemento1;
        $mails['civil1'] = $request->civil1;
        $mails['rg1'] = $request->rg1;
        $mails['cpf1'] = $request->cpf1;
        $mails['naturalidade1'] = $request->naturalidade1;
        $mails['uf1'] = $request->uf1;
        $mails['nacionalidade1'] = $request->nacionalidade1;
        $mails['pai1'] = $request->pai1;
        $mails['mae1'] = $request->mae1;
        $mails['telefone1'] = $request->telefone1;
        $mails['whatsapp1'] = $request->whatsapp1;
        $mails['email1'] = $request->email1;
        $mails['deficiencia1'] = $request->deficiencia1;
        $mails['tipo_def1'] = $request->tipo_def1;
        $mails['plano1'] = $request->plano1;
        $mails['tipo_plano1'] = $request->tipo_plano1;

        $mails['dependente2'] = $request->dependente2;
        $mails['birth_date_titular2'] = $request->birth_date_titular2;
        $mails['cep2'] = $request->cep2;
        $mails['rua2'] = $request->rua2;
        $mails['bairro2'] = $request->bairro2;
        $mails['cidade2'] = $request->cidade2;
        $mails['estado2'] = $request->estado2;
        $mails['numero2'] = $request->numero2;
        $mails['complemento2'] = $request->complemento2;
        $mails['civil2'] = $request->civil2;
        $mails['rg2'] = $request->rg2;
        $mails['cpf2'] = $request->cpf2;
        $mails['naturalidade2'] = $request->naturalidade2;
        $mails['uf2'] = $request->uf2;
        $mails['nacionalidade2'] = $request->nacionalidade2;
        $mails['pai2'] = $request->pai2;
        $mails['mae2'] = $request->mae2;
        $mails['telefone2'] = $request->telefone2;
        $mails['whatsapp2'] = $request->whatsapp2;
        $mails['email2'] = $request->email2;
        $mails['deficiencia2'] = $request->deficiencia2;
        $mails['tipo_def2'] = $request->tipo_def2;
        $mails['plano2'] = $request->plano2;
        $mails['tipo_plano2'] = $request->tipo_plano2;

        $mails['dependente3'] = $request->dependente3;
        $mails['birth_date_titular3'] = $request->birth_date_titular3;
        $mails['cep3'] = $request->cep3;
        $mails['rua3'] = $request->rua3;
        $mails['bairro3'] = $request->bairro3;
        $mails['cidade3'] = $request->cidade3;
        $mails['estado3'] = $request->estado3;
        $mails['numero3'] = $request->numero3;
        $mails['complemento3'] = $request->complemento3;
        $mails['civil3'] = $request->civil3;
        $mails['rg3'] = $request->rg3;
        $mails['cpf3'] = $request->cpf3;
        $mails['naturalidade3'] = $request->naturalidade3;
        $mails['uf3'] = $request->uf3;
        $mails['nacionalidade3'] = $request->nacionalidade3;
        $mails['pai3'] = $request->pai3;
        $mails['mae3'] = $request->mae3;
        $mails['telefone3'] = $request->telefone3;
        $mails['whatsapp3'] = $request->whatsapp3;
        $mails['email3'] = $request->email3;
        $mails['deficiencia3'] = $request->deficiencia3;
        $mails['tipo_def3'] = $request->tipo_def3;
        $mails['plano3'] = $request->plano3;
        $mails['tipo_plano3'] = $request->tipo_plano3;


        $mails['pagamento'] = $request->responsavel_franquia;
        $mails['boletoInp'] = $request->responsavel_franquia;


        Mail::to('gmbrasiloportunidades@gmail.com')->send(new Cartao($mails));

        return redirect()->route('alunos.thanks');
    }
    public function thanks()
    {
        return view('cad-aluno.thanks');
    }
}
