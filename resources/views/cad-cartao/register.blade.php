@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="pre-logo">
            <div class="logo">
                <img src="{{ url('assets/img/logo.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form id="regForm" action="{{ route('cartao.store') }}" method="POST">
            @csrf
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>COMEÇAR O CADASTRO</b></h2>
                <div class="text-label">REGIONAL</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Regional"
                        name="regional" oninput="this.className = ''">
                </div>
                <div class="text-label">DIRETOR</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Diretor da regional" name="diretor" oninput="this.className = ''">
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CADASTRO DO TITULAR</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">NOME DO TITULAR</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Titular"
                            name="titular" oninput="this.className = ''">
                    </div>
                    <div class="text-label">DATA DE NASCIMENTO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="date" placeholder="" name="birth_date_titular" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ENDEREÇO</b></h2>
                <div class="text-label2">CEP</div>
                <div class="form-group mt-3 mb-5 d-flex input-material input-especial">
                    <input type="text" id="ceping" name="cep">

                    <button type="button" id="buscaring" class="btn ml-2">Buscar</button>
                </div>

                <div class="text-label2">RUA</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="endereco" name="rua" oninput="this.className = ''">
                </div>

                <div class="text-label2">BAIRRO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="bairro" name="bairro" oninput="this.className = ''">
                </div>

                <div class="text-label2">CIDADE</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="cidade" name="cidade" oninput="this.className = ''">
                </div>

                <div class="text-label2">ESTADO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="estado" name="estado" oninput="this.className = ''">
                </div>

                <div class="text-label2">NUMERO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="numero" name="numero" oninput="this.className = ''">
                </div>

                <div class="text-label2">COMPLEMENTO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="complemento" name="complemento">
                </div>

            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>MAIS SOBRE VOCÊ</b></h2>
                <div class="text-label">ESCOLHA SEU ESTADO CIVIL</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="civil" oninput="this.className = ''">
                        <option value="Solteiro">SOLTEIRO</option>
                        <option value="Casado">CASADO</option>
                        <option value="Divorciado">DIVORCIADO</option>
                        <option value="Outro">OUTRO</option>
                    </select>
                </div>
                <div class="text-label">RG</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu RG" name="rg" oninput="this.className = ''">
                </div>
                <div class="text-label">CPF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu CPF" name="cpf" oninput="this.className = ''">
                </div>
                <div class="text-label">NATURALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Naturalidade"
                        name="naturalidade" oninput="this.className = ''">
                </div>
                <div class="text-label">UF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="UF" name="uf"
                        oninput="this.className = ''">
                </div>
                <div class="text-label">NACIONALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nacionalidade"
                        name="nacionalidade" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DO PAI</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome do Pai"
                        name="pai" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DA MÃE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome da Mãe"
                        name="mae" oninput="this.className = ''">
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTATOS</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">TELEFONE FIXO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui o telefone fixo" name="telefone" oninput="this.className = ''">
                    </div>
                    <div class="text-label">WHATSAPP</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloquei aqui seu whatsapp" name="whatsapp" oninput="this.className = ''">
                    </div>
                    <div class="text-label">E-MAIL</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="email" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque o email" name="email" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">POSSUI ALGUMA DEFICIENCIA?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="deficiencia" id="def" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>

                    </select>
                </div>
                <div class="d-none" id="defDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_def" oninput="this.className = ''">
                    </div>
                </div>
                <div class="text-label">POSSUI ALGUM PLANO E SAÚDE?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="plano" id="plan" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                </div>
                <div class="d-none" id="planDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_plano" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>DEPENDENTE 1</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">NOME DO DEPENDENTE</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome do dependente"
                            name="dependente1" oninput="this.className = ''">
                    </div>
                    <div class="text-label">DATA DE NASCIMENTO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="date" placeholder="" name="birth_date_dependente1" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ENDEREÇO</b></h2>
                <div class="text-label2">CEP</div>
                <div class="form-group mt-3 mb-5 d-flex input-material input-especial">
                    <input type="text" id="ceping1" name="cep1">

                    <button type="button" id="buscaring1" class="btn ml-2">Buscar</button>
                </div>

                <div class="text-label2">RUA</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="endereco1" name="rua1" oninput="this.className = ''">
                </div>

                <div class="text-label2">BAIRRO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="bairro1" name="bairro1" oninput="this.className = ''">
                </div>

                <div class="text-label2">CIDADE</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="cidade1" name="cidade1" oninput="this.className = ''">
                </div>

                <div class="text-label2">ESTADO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="estado1" name="estado1" oninput="this.className = ''">
                </div>

                <div class="text-label2">NUMERO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="numero1" name="numero1" oninput="this.className = ''">
                </div>

                <div class="text-label2">COMPLEMENTO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="complemento1" name="complemento1">
                </div>

            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>MAIS SOBRE VOCÊ</b></h2>
                <div class="text-label">ESCOLHA SEU ESTADO CIVIL</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="civil1" oninput="this.className = ''">
                        <option value="Solteiro">SOLTEIRO</option>
                        <option value="Casado">CASADO</option>
                        <option value="Divorciado">DIVORCIADO</option>
                        <option value="Outro">OUTRO</option>
                    </select>
                </div>
                <div class="text-label">RG</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu RG" name="rg1" oninput="this.className = ''">
                </div>
                <div class="text-label">CPF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu CPF" name="cpf1" oninput="this.className = ''">
                </div>
                <div class="text-label">NATURALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Naturalidade"
                        name="naturalidade1" oninput="this.className = ''">
                </div>
                <div class="text-label">UF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="UF"
                        name="uf1" oninput="this.className = ''">
                </div>
                <div class="text-label">NACIONALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Nacionalidade" name="nacionalidade1" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DO PAI</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome do Pai"
                        name="pai1" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DA MÃE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome da Mãe"
                        name="mãe1" oninput="this.className = ''">
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTATOS</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">TELEFONE FIXO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui o telefone fixo" name="telefone1" oninput="this.className = ''">
                    </div>
                    <div class="text-label">WHATSAPP</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloquei aqui seu whatsapp" name="whatsapp1" oninput="this.className = ''">
                    </div>
                    <div class="text-label">E-MAIL</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="email" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque o email" name="email1" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">POSSUI ALGUMA DEFICIENCIA?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="deficiencia1" id="def" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>

                    </select>
                </div>
                <div class="d-none" id="defDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_def1" oninput="this.className = ''">
                    </div>
                </div>
                <div class="text-label">POSSUI ALGUM PLANO E SAÚDE?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="plano1" id="plan" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                </div>
                <div class="d-none" id="planDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_plano1" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CADASTRO DO DEPENDENTE 2</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">NOME DO DEPENDENTE 2</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome do dependente"
                            name="dependente2" oninput="this.className = ''">
                    </div>
                    <div class="text-label">DATA DE NASCIMENTO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="date" placeholder="" name="birth_date_dependente2" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ENDEREÇO</b></h2>
                <div class="text-label2">CEP</div>
                <div class="form-group mt-3 mb-5 d-flex input-material input-especial">
                    <input type="text" id="ceping2" name="cep2">

                    <button type="button" id="buscaring2" class="btn ml-2">Buscar</button>
                </div>

                <div class="text-label2">RUA</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="endereco2" name="rua2" oninput="this.className = ''">
                </div>

                <div class="text-label2">BAIRRO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="bairro2" name="bairro2" oninput="this.className = ''">
                </div>

                <div class="text-label2">CIDADE</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="cidade2" name="cidade2" oninput="this.className = ''">
                </div>

                <div class="text-label2">ESTADO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="estado2" name="estado2" oninput="this.className = ''">
                </div>

                <div class="text-label2">NUMERO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="numero2" name="numero2" oninput="this.className = ''">
                </div>

                <div class="text-label2">COMPLEMENTO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="complemento2" name="complemento2">
                </div>

            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>MAIS SOBRE VOCÊ</b></h2>
                <div class="text-label">ESCOLHA SEU ESTADO CIVIL</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="civil2" oninput="this.className = ''">
                        <option value="Solteiro">SOLTEIRO</option>
                        <option value="Casado">CASADO</option>
                        <option value="Divorciado">DIVORCIADO</option>
                        <option value="Outro">OUTRO</option>
                    </select>
                </div>
                <div class="text-label">RG</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu RG" name="rg2" oninput="this.className = ''">
                </div>
                <div class="text-label">CPF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu CPF" name="cpf2" oninput="this.className = ''">
                </div>
                <div class="text-label">NATURALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Naturalidade"
                        name="naturalidade2" oninput="this.className = ''">
                </div>
                <div class="text-label">UF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="UF"
                        name="uf2" oninput="this.className = ''">
                </div>
                <div class="text-label">NACIONALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Nacionalidade" name="nacionalidade2" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DO PAI</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome do Pai"
                        name="pai2" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DA MÃE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome da Mãe"
                        name="mae2" oninput="this.className = ''">
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTATOS</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">TELEFONE FIXO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui o telefone fixo" name="telefone2" oninput="this.className = ''">
                    </div>
                    <div class="text-label">WHATSAPP</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloquei aqui seu whatsapp" name="whatsapp2" oninput="this.className = ''">
                    </div>
                    <div class="text-label">E-MAIL</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="email" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque o email" name="email2" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">POSSUI ALGUMA DEFICIENCIA?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="deficiencia2" id="def" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>

                    </select>
                </div>
                <div class="d-none" id="defDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_def2" oninput="this.className = ''">
                    </div>
                </div>
                <div class="text-label">POSSUI ALGUM PLANO E SAÚDE?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="plano2" id="plan" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                </div>
                <div class="d-none" id="planDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_plano1" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CADASTRO DO DEPENDENTE 3</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">NOME DO DEPENDENTE 3</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome do dependente"
                            name="dependente3" oninput="this.className = ''">
                    </div>
                    <div class="text-label">DATA DE NASCIMENTO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="date" placeholder="" name="birth_date_dependente3" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ENDEREÇO</b></h2>
                <div class="text-label2">CEP</div>
                <div class="form-group mt-3 mb-5 d-flex input-material input-especial">
                    <input type="text" id="ceping3" name="cep3">

                    <button type="button" id="buscaring3" class="btn ml-2">Buscar</button>
                </div>

                <div class="text-label2">RUA</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="endereco3" name="rua3" oninput="this.className = ''">
                </div>

                <div class="text-label2">BAIRRO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="bairro3" name="bairro3" oninput="this.className = ''">
                </div>

                <div class="text-label2">CIDADE</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="cidade3" name="cidade3" oninput="this.className = ''">
                </div>

                <div class="text-label2">ESTADO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="estado3" name="estado3" oninput="this.className = ''">
                </div>

                <div class="text-label2">NUMERO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="numero3" name="numero3" oninput="this.className = ''">
                </div>

                <div class="text-label2">COMPLEMENTO</div>
                <div class="form-group mt-3 mb-5 d-flex input-material">
                    <input type="text" id="complemento3" name="complemento3">
                </div>

            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>MAIS SOBRE VOCÊ</b></h2>
                <div class="text-label">ESCOLHA SEU ESTADO CIVIL</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="civil3" oninput="this.className = ''">
                        <option value="Solteiro">SOLTEIRO</option>
                        <option value="Casado">CASADO</option>
                        <option value="Divorciado">DIVORCIADO</option>
                        <option value="Outro">OUTRO</option>
                    </select>
                </div>
                <div class="text-label">RG</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu RG" name="rg3" oninput="this.className = ''">
                </div>
                <div class="text-label">CPF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu CPF" name="cpf3" oninput="this.className = ''">
                </div>
                <div class="text-label">NATURALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Naturalidade"
                        name="naturalidade3" oninput="this.className = ''">
                </div>
                <div class="text-label">UF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="UF"
                        name="uf3" oninput="this.className = ''">
                </div>
                <div class="text-label">NACIONALIDADE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Nacionalidade" name="nacionalidade3" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DO PAI</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome do Pai"
                        name="pai3" oninput="this.className = ''">
                </div>
                <div class="text-label">NOME DA MÃE</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Nome da Mãe"
                        name="mae3" oninput="this.className = ''">
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTATOS</b></h2>
                <div class="row justify-content-center">
                    <div class="text-label">TELEFONE FIXO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui o telefone fixo" name="telefone3" oninput="this.className = ''">
                    </div>
                    <div class="text-label">WHATSAPP</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloquei aqui seu whatsapp" name="whatsapp3" oninput="this.className = ''">
                    </div>
                    <div class="text-label">E-MAIL</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="email" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque o email" name="email3" oninput="this.className = ''">
                    </div>

                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">POSSUI ALGUMA DEFICIENCIA?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="deficiencia3" id="def" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>

                    </select>
                </div>
                <div class="d-none" id="defDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_def3" oninput="this.className = ''">
                    </div>
                </div>
                <div class="text-label">POSSUI ALGUM PLANO E SAÚDE?</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="plano3" id="plan" oninput="this.className = ''">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                </div>
                <div class="d-none" id="planDiv">
                    <div class="text-label">QUAL?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui" name="tipo_plano3" oninput="this.className = ''">
                    </div>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">FORMA DE PAGAMENTO</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="pagamento" id="pagamento" oninput="this.className = ''">
                        <option value="Cartão">Cartão</option>
                        <option value="Boleto">Boleto</option>

                    </select>
                </div>
                <div class="d-none" id="bolDiv">
                    <div class="text-label">DATA DE VENCIMENTO?</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                            placeholder="Coloque aqui a data de vencimento" name="boletoInp" oninput="this.className = ''">
                    </div>
                </div>

            </div>
    </div>

    <div class="mt-3">
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-multi-step mr-2" id="prevBtn" onclick="nextPrev(-1)">VOLTAR</button>
            <button type="button" class="btn btn-multi-step ml-2" id="nextBtn" onclick="nextPrev(1)">PRÓXIMO</button>
        </div>
    </div>

    <!-- Circles which indicates the steps of the form: -->
    <div class="d-none" style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>



    </div>

    </form>
    </div>
    </div>
@endsection

@section('script')
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "SALVAR";
            } else {
                document.getElementById("nextBtn").innerHTML = "PRÓXIMO";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = true;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#def').on('change', function() {
                $('#defDiv').addClass('d-none');
                if ($(this).val() == 'Sim') {
                    $('#defDiv').removeClass('d-none');
                }
            });
            $('#plan').on('change', function() {
                $('#planDiv').addClass('d-none');
                if ($(this).val() == 'Sim') {
                    $('#planDiv').removeClass('d-none');
                }
            });
            $('#pagamento').on('change', function() {
                $('#bolDiv').addClass('d-none');
                if ($(this).val() == 'Boleto') {
                    $('#bolDiv').removeClass('d-none');
                }
            });

            $('[name="boletoInp"]').mask("99");
            $('[name="telefone1"]').mask("(99) 9999-9999");
            $('[name="telefone2"]').mask("(99) 9999-9999");
            $('[name="telefone3"]').mask("(99) 9999-9999");
            $('[name="whatsapp1"]').mask("(99) 99999-9999");
            $('[name="whatsapp2"]').mask("(99) 99999-9999");
            $('[name="whatsapp3"]').mask("(99) 99999-9999");
            $('[name="rg1"]').mask("99.999.999-4");
            $('[name="rg2"]').mask("99.999.999-4");
            $('[name="rg3"]').mask("99.999.999-4");
            $('[name="cpf1"]').mask("999.999.999-99");
            $('[name="cpf2"]').mask("999.999.999-99");
            $('[name="cpf3"]').mask("999.999.999-99");






            // requição ajax
            $('#buscaring1').on('click', function() {
                $value = $('#ceping1').val();
                $.ajax({
                    type: 'get',
                    url: '{{ route('address.cep') }}',
                    data: {
                        'search': $value
                    },
                    success: function(data) {
                        console.log(data);
                        $('#endereco1').val(data.street);
                        $('#bairro1').val(data.district);
                        $('#cidade1').val(data.city);
                        $('#estado1').val(data.uf);
                    }
                });
            });
            $('#buscaring2').on('click', function() {
                $value = $('#ceping2').val();
                $.ajax({
                    type: 'get',
                    url: '{{ route('address.cep') }}',
                    data: {
                        'search': $value
                    },
                    success: function(data) {
                        console.log(data);
                        $('#endereco2').val(data.street);
                        $('#bairro2').val(data.district);
                        $('#cidade2').val(data.city);
                        $('#estado2').val(data.uf);
                    }
                });
            });
            $('#buscaring3').on('click', function() {
                $value = $('#ceping3').val();
                $.ajax({
                    type: 'get',
                    url: '{{ route('address.cep') }}',
                    data: {
                        'search': $value
                    },
                    success: function(data) {
                        console.log(data);
                        $('#endereco3').val(data.street);
                        $('#bairro3').val(data.district);
                        $('#cidade3').val(data.city);
                        $('#estado3').val(data.uf);
                    }
                });
            });

        });
    </script>

@endsection
