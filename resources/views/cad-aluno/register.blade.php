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
        <form id="regForm" action="{{ route('alunos.store') }}" method="POST">
            @csrf
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ESCOLHA A OPÇÃO</b></h2>
                <div class="row justify-content-center">
                    <div class="form-group col-8 input-material">
                        <label for="name-field">Curso</label>
                        <input id="check_unidade" value="Curso" class="form-control" name="plano" type="radio">
                    </div>
                    <div class="form-group col-8 input-material">
                        <label for="name-field">Pacote</label>
                        <input id="check_unidade" value="Pacote" class="form-control" name="plano" type="radio">
                    </div>
                    <div class="form-group col-8 input-material">
                        <label for="name-field">Assinatura</label>
                        <input id="check_unidade" value="Assinatura" class="form-control" name="plano" type="radio">
                    </div>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUAR O CADASTRO</b></h2>
                <div class="text-label">CURSO ESCOLHIDO</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Escreva o curso escolhido" name="curso" oninput="this.className = ''">
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>VAMOS COMEÇAR O CADASTRO</b></h2>
                <div class="text-label">NOME COMPLETO</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Seu Nome e sobrenome" name="name" oninput="this.className = ''">
                </div>
                <div class="text-label">EMAIL</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="email" placeholder="Seu Email" name="email" oninput="this.className = ''">
                </div>
            </div>


            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ESCOLHA SEU SEXO</b></h2>
                <div class="row justify-content-center">
                    <div class="form-group col-8 input-material">
                        <label for="name-field">FEMININO</label>
                        <input id="check_unidade" value="Feminino" class="form-control" name="sexo" type="radio">
                    </div>
                    <div class="form-group col-8 input-material">
                        <label for="name-field">MASCULINO</label>
                        <input id="check_unidade" value="Masculino" class="form-control" name="sexo" type="radio">
                    </div>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">DATA DE NASCIMENTO</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="date" placeholder="" name="birth_date" oninput="this.className = ''">
                </div>

            </div>

            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ESTADO CIVIL</b></h2>
                <div class="text-label">ESCOLHA SEU ESTADO CIVIL</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="civil" oninput="this.className = ''">
                            <option value="Solteiro">SOLTEIRO</option>
                            <option value="Casado">CASADO</option>
                            <option value="Divorciado">DIVORCIADO</option>
                            <option value="Outro">OUTRO</option>
                    </select>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>ESCOLARIDADE</b></h2>
                <div class="text-label">ESCOLHA SUA ESCOLARIDADE</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="escolaridade" oninput="this.className = ''">
                            <option value="Ensino Fundamental">ENSINO FUNDAMENTAL</option>
                            <option value="Ensino Médio">ENSINO MÉDIO</option>
                            <option value="Superior Incompleto">SUPERIOR INCOMPLETO</option>
                            <option value="Superior Completo">SUPERIOR COMPLETO</option>
                            <option value="Outro">OUTRO</option>
                    </select>
                </div>
            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">RG</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu RG" name="rg" oninput="this.className = ''">
                </div>
                <div class="text-label">ESCOLHA O ORGÃO EMISSOR</div>
                <div class="form-group mt-4 mb-5 input-material">
                    <select name="orgao" oninput="this.className = ''">
                            <option value="ssp">SSP</option>
                            <option value="detran">DETRAN</option>
                            <option value="conselhos de classe">CONSELHOS DE CLASSE</option>
                            <option value="outros">OUTROS</option>
                    </select>
                </div>
                <div class="text-label">CPF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="Seu CPF" name="cpf" oninput="this.className = ''">
                </div>

            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>SE FOR MAIOR PROSSIGA PARA PRÓXIMA ETAPA</b></h2>
                <div class="text-label">NOME DO RESPONSAVEL(CASO O ALUNO SEJA MENOR)</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Nome do seu responsavel" name="name_responsavel" oninput="this.className = ''">
                </div>

                <div class="text-label">CPF</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" placeholder="CPF do responsavel" name="cpf_responsavel" oninput="this.className = ''">
                </div>
                <div class="text-label">DATA DE NASCIMENTO DO RESPONSAVEL</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="date" placeholder="" name="birth_date_responsavel" oninput="this.className = ''">
                </div>


            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>CONTATOS</b></h2>
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


            </div>
            <div class="tab">
                <h2 class="mt-2 mb-5 text-white"><b>SÓ PRECISAMOS DO SEU ENDEREÇO!</b></h2>
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
                <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                <div class="text-label">RESPONSÁVEL/FRANQUIA</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Coloque aqui o responsavel ou franquia" name="responsavel_franquia" oninput="this.className = ''">
                </div>
                <div class="text-label text-uppercase">Aproveite o espaço abaixo, se tiver alguma observação</div>
                <div class="form-group mt-3 mb-5 input-material">
                    <input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                        placeholder="Escreva aqui sua observação" name="observacao" oninput="this.className = ''">
                </div>


            </div>

            <div class="mt-3">
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-multi-step mr-2" id="prevBtn"
                        onclick="nextPrev(-1)">VOLTAR</button>
                    <button type="button" class="btn btn-multi-step ml-2" id="nextBtn"
                        onclick="nextPrev(1)">PRÓXIMO</button>
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


            </div>

            <div class="text-register text-center my-3">
                <a href="{{ route('login') }}" class="text-white"><strong>Já tenho cadatro!</strong></a>
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

@endsection
