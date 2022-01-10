<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Email</title>
</head>

<body>
      <div class="container">
            <div>
                  <img  src="{{ url('assets/img/logo-mail.png') }}" alt="">
            </div>

            <div>
                  <h3>Regional: {{ $regional }}</h3>
                  <h3>Diretor da Regional: {{ $diretor }}</h3>
                  <h3>Nome: {{ $name }}</h3>
                  <h3>Plano: {{ $plano }}</h3>
                  <h3>Curso: {{ $curso }}</h3>
                  <h3>Email: {{ $email }}</h3>
                  <h3>Sexo: {{ $sexo }}</h3>
                  <h3>Data de Nascimento: {{ $birth_date }}</h3>
                  <h3>Estado Civil: {{ $civil }}</h3>
                  <h3>Escolaridade: {{ $escolaridade }}</h3>
                  <h3>RG: {{ $rg }}</h3>
                  <h3>CPF: {{ $cpf }}</h3>
                  <h3>Nome do Responsavel: {{ $name_responsavel }}</h3>
                  <h3>CPF do Responsavel: {{ $cpf_responsavel }}</h3>
                  <h3>Data de Nascimento do Responsavel: {{ $birth_date_responsavel }}</h3>
                  <h3>Telefone: {{ $telefone }}</h3>
                  <h3>Whatsapp: {{ $whatsapp }}</h3>
                  <h1>Endereço:</h1>
                  <h3>CEP: {{ $cep }}</h3>
                  <h3>Rua: {{ $rua }}</h3>
                  <h3>Bairro: {{ $bairro }}</h3>
                  <h3>Cidade: {{ $cidade }}</h3>
                  <h3>Estado: {{ $estado }}</h3>
                  <h3>Numero: {{ $numero }}</h3>
                  <h3>Complemento: {{ $complemento }}</h3>
                  <h3>Responsavel/Franquia: {{ $responsavel_franquia }}</h3>
                  <h3>Observação: {{ $observacao }}</h3>
            </div>
      </div>
      <style>
            .container {
                  width: 100%;
                  margin-right: auto;
                  margin-left: auto;
                  text-align: center;
            }
            html{
                background: #fff;
            }
      </style>
</body>

</html>
