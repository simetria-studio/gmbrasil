<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FlyingLuscas\Correios\Client;

class CepController extends Controller
{
    public function buscaCep(Request $request)
    {
        $correios = new Client;

        $cep = $correios->zipcode()->find($request->search);

        return $cep;
    }
}
