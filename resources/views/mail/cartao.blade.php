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
                  <h3>Titular: {{ $titular }}</h3>
                  <h3>Data de Nascimento: {{ $birth_date_titular }}</h3>
                  <h3>CEP: {{ $cep }}</h3>
                  <h3>Rua: {{ $rua }}</h3>
                  <h3>Bairro: {{ $bairro }}</h3>
                  <h3>Cidade: {{ $cidade }}</h3>
                  <h3>Estado: {{ $estado }}</h3>
                  <h3>Numero: {{ $numero }}</h3>
                  <h3>Complemento: {{ $complemento }}</h3>
                  <h3>Estado Civil: {{ $civil }}</h3>
                  <h3>RG: {{ $rg }}</h3>
                  <h3>CPF: {{ $cpf }}</h3>
                  <h3>Naturalidade: {{ $naturalidade }}</h3>
                  <h3>UF: {{ $uf }}</h3>
                  <h3>Nacionalidade: {{ $nacionalidade }}</h3>
                  <h3>Nome do pai: {{ $pai }}</h3>
                  <h3>Nome da mãe: {{ $mae }}</h3>
                  <h3>Telefone: {{ $telefone }}</h3>
                  <h3>WhatsApp: {{ $whatsapp }}</h3>
                  <h3>E-mail: {{ $email }}</h3>
                  <h3>Possuí deficiência: {{ $deficiencia }}</h3>
                  <h3>Tipo de deficiência: {{ $tipo_def }}</h3>
                  <h3>Possuí plano?: {{ $plano }}</h3>
                  <h3>Tipo de plano: {{ $tipo_plano }}</h3>
                  <h1>Dependente 1</h1><br><br>
                  <h3>Dependente 1: {{ $dependente1 }}</h3>
                  <h3>Data de Nascimento: {{ $birth_date_titular1 }}</h3>
                  <h3>CEP: {{ $cep1 }}</h3>
                  <h3>Rua: {{ $rua1 }}</h3>
                  <h3>Bairro: {{ $bairro1 }}</h3>
                  <h3>Cidade: {{ $cidade1 }}</h3>
                  <h3>Estado: {{ $estado1 }}</h3>
                  <h3>Numero: {{ $numero1 }}</h3>
                  <h3>Complemento: {{ $complemento1 }}</h3>
                  <h3>Estado Civil: {{ $civil1 }}</h3>
                  <h3>RG: {{ $rg1 }}</h3>
                  <h3>CPF: {{ $cpf1 }}</h3>
                  <h3>Naturalidade: {{ $naturalidade1 }}</h3>
                  <h3>UF: {{ $uf1 }}</h3>
                  <h3>Nacionalidade: {{ $nacionalidade1 }}</h3>
                  <h3>Nome do pai: {{ $pai1 }}</h3>
                  <h3>Nome da mãe: {{ $mae1 }}</h3>
                  <h3>Telefone: {{ $telefone1 }}</h3>
                  <h3>WhatsApp: {{ $whatsapp1 }}</h3>
                  <h3>E-mail: {{ $email1 }}</h3>
                  <h3>Possuí deficiência: {{ $deficiencia1 }}</h3>
                  <h3>Tipo de deficiência: {{ $tipo_def1 }}</h3>
                  <h3>Possuí plano?: {{ $plano1 }}</h3>
                  <h3>Tipo de plano: {{ $tipo_plano1 }}</h3>
                  <h1>Dependente 2</h1><br><br>
                  <h3>Dependente 2: {{ $dependente2 }}</h3>
                  <h3>Data de Nascimento: {{ $birth_date_titular2 }}</h3>
                  <h3>CEP: {{ $cep2 }}</h3>
                  <h3>Rua: {{ $rua2 }}</h3>
                  <h3>Bairro: {{ $bairro2 }}</h3>
                  <h3>Cidade: {{ $cidade2 }}</h3>
                  <h3>Estado: {{ $estado2 }}</h3>
                  <h3>Numero: {{ $numero2 }}</h3>
                  <h3>Complemento: {{ $complemento2 }}</h3>
                  <h3>Estado Civil: {{ $civil2 }}</h3>
                  <h3>RG: {{ $rg2 }}</h3>
                  <h3>CPF: {{ $cpf2 }}</h3>
                  <h3>Naturalidade: {{ $naturalidade2 }}</h3>
                  <h3>UF: {{ $uf2 }}</h3>
                  <h3>Nacionalidade: {{ $nacionalidade2 }}</h3>
                  <h3>Nome do pai: {{ $pai2 }}</h3>
                  <h3>Nome da mãe: {{ $mae2 }}</h3>
                  <h3>Telefone: {{ $telefone2 }}</h3>
                  <h3>WhatsApp: {{ $whatsapp2 }}</h3>
                  <h3>E-mail: {{ $email2 }}</h3>
                  <h3>Possuí deficiência: {{ $deficiencia2 }}</h3>
                  <h3>Tipo de deficiência: {{ $tipo_def2 }}</h3>
                  <h3>Possuí plano?: {{ $plano2 }}</h3>
                  <h3>Tipo de plano: {{ $tipo_plano2 }}</h3>
                    <h1>Dependente 3</h1><br><br>
                  <h3>Dependente 2: {{ $dependente3 }}</h3>
                  <h3>Data de Nascimento: {{ $birth_date_titular3 }}</h3>
                  <h3>CEP: {{ $cep3 }}</h3>
                  <h3>Rua: {{ $rua3 }}</h3>
                  <h3>Bairro: {{ $bairro3 }}</h3>
                  <h3>Cidade: {{ $cidade3 }}</h3>
                  <h3>Estado: {{ $estado3 }}</h3>
                  <h3>Numero: {{ $numero3 }}</h3>
                  <h3>Complemento: {{ $complemento3 }}</h3>
                  <h3>Estado Civil: {{ $civil3 }}</h3>
                  <h3>RG: {{ $rg3 }}</h3>
                  <h3>CPF: {{ $cpf3 }}</h3>
                  <h3>Naturalidade: {{ $naturalidade3 }}</h3>
                  <h3>UF: {{ $uf3 }}</h3>
                  <h3>Nacionalidade: {{ $nacionalidade3 }}</h3>
                  <h3>Nome do pai: {{ $pai3 }}</h3>
                  <h3>Nome da mãe: {{ $mae3 }}</h3>
                  <h3>Telefone: {{ $telefone3 }}</h3>
                  <h3>WhatsApp: {{ $whatsapp3 }}</h3>
                  <h3>E-mail: {{ $email3 }}</h3>
                  <h3>Possuí deficiência: {{ $deficiencia3 }}</h3>
                  <h3>Tipo de deficiência: {{ $tipo_def3 }}</h3>
                  <h3>Possuí plano?: {{ $plano3 }}</h3>
                  <h3>Tipo de plano: {{ $tipo_plano3 }}</h3>
                  <h3>Forma de Pagamento: {{ $pagamento }}</h3>
                  <h3>Vencimento do boleto: {{ $boletoInp }}</h3>
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
