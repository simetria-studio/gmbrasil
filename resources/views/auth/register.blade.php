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
        <form id="regForm" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="tab">
                    <h2 class="mt-2 mb-5 text-white"><b>VAMOS COMEÇAR O CADASTRO</b></h2>
                    <div class="text-label">NOME COMPLETO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                            <input type="text" class="" placeholder="Seu Nome e sobrenome" name="name" oninput="this.className = ''">
                    </div>
                </div>

                <div class="tab">
                    <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                    <div class="text-label">EMAIL</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="email" placeholder="Seu Email" name="email" oninput="this.className = ''">
                    </div>
                </div>

                <div class="tab">
                    <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                    <div class="text-label">RG</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" placeholder="Seu RG" name="rg" oninput="this.className = ''">
                    </div>
                    <div class="text-label">CPF</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="text" placeholder="Seu CPF" name="cpf" oninput="this.className = ''">
                    </div>
                </div>

                <div class="tab">
                    <h2 class="mt-2 mb-5 text-white"><b>CONTINUE COM O CADASTRO</b></h2>
                    <div class="text-label">DATA DE NASCIMENTO</div>
                    <div class="form-group mt-3 mb-5 input-material">
                        <input type="date" placeholder="" name="rg" oninput="this.className = ''">
                    </div>

                </div>
                <div class="tab">
                    <h2 class="mt-2 mb-5 text-white"><b>SÓ PRECISAMOS DO SEU ENDEREÇO!</b></h2>
                    <div class="text-label2">CEP</div>
                    <div class="form-group mt-3 mb-5 d-flex input-material input-especial">
                        <input type="text" id="ceping" name="codigo_postal">

                        <button type="button" id="buscaring" class="btn ml-2">Buscar</button>
                    </div>

                    <div class="text-label2">RUA</div>
                    <div class="form-group mt-3 mb-5 d-flex input-material">
                        <input type="text" id="morada" name="morada">
                    </div>

                    <div class="text-label2">BAIRRO</div>
                    <div class="form-group mt-3 mb-5 d-flex input-material">
                        <input type="text" id="regiao" name="regiao">
                    </div>

                    <div class="text-label2">CIDADE</div>
                    <div class="form-group mt-3 mb-5 d-flex input-material">
                        <input type="text" id="porta" name="porta">
                    </div>

                    <div class="text-label2">ESTADO</div>
                    <div class="form-group mt-3 mb-5 d-flex input-material">
                        <input type="text" id="distrito" name="distrito">
                    </div>

                    <div class="text-label2">NUMERO</div>
                    <div class="form-group mt-3 mb-5 d-flex input-material">
                        <input type="text" id="conselho" name="conselho">
                    </div>

                    <div class="text-label2">COMPLEMENTO</div>
                    <div class="form-group mt-3 mb-5 d-flex input-material">
                        <input type="text" id="freguesia" name="freguesia">
                    </div>

                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude">
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
                            valid = false;
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
