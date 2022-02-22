@extends('layouts.painel')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Usuários</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div id="table" class="table-editable">
                        <span class="float-right mb-3 mr-2">
                            {{-- <button class="btn btn-sm iq-bg-success"><i class="ri-add-fill"><span
                                        class="pl-1">Adicionar Novo</span></i>
                            </button> --}}
                        </span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Código</th>
                                    <th>Código do filiado</th>
                                    <th>Filiado</th>
                                    <th>Level</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td contenteditable="true">{{ $user->name }}</td>
                                        <td contenteditable="true">{{ $user->email }}</td>
                                        <td contenteditable="true">{{ $user->uniqid }}</td>
                                        <td contenteditable="true">{{ $user->codigo }}</td>
                                        <td contenteditable="true">
                                            {{ $user->filiados->name ?? 'Código errado ou Matriz' }}</td>
                                        <td>
                                            @foreach ($user->broches as $item)
                                                @if ($item->broxes)
                                                    @if ($loop->last)
                                                        {{ $item->broxes->name }} <img width="20" height="20"
                                                            src="{{ asset($item->broxes->path) }}" alt="">
                                                    @endif
                                                @endif
                                            @endforeach

                                        </td>
                                        <td>

                                            <span class=""><button type="button"
                                                    class="btn iq-bg-danger btn-rounded btn-sm my-0">Remover</button></span>
                                            <span class=""><button type="button"
                                                    class="btn iq-bg-info btn-rounded btn-sm my-0">Editar</button></span>
                                            <span class=""><button type="button"
                                                    class="btn iq-bg-dark btn-rounded btn-sm my-0">Ver</button></span>
                                            <span class=""><button type="button"
                                                    class="btn iq-bg-dark btn-rounded btn-sm my-0" data-toggle="modal"
                                                    data-target="#exampleModal"
                                                    data-dados="{{ json_encode($user) }}">Level</button></span>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Level do consultor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('add.broche') }}" method="post">
                    <div class="modal-body">

                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Selecione o Level</label>
                            <select class="form-control" name="broche_id" id="exampleFormControlSelect1">
                                <option value="100500">Sem Level</option>
                                @foreach ($broches as $broche)
                                    <option value="{{ $broche->id }}">{{ $broche->name }}</option>
                                @endforeach
                            </select>
                            <div id="divDados" class="d-none">

                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('[data-target="#exampleModal"]').on('click', function() {
                var dados = $(this).data('dados');
                $('#divDados').empty();
                $.each(dados, (key, value) => {
                    $('#divDados').append(
                        `<input type="hidden" name="user_${key}" value="${value}">`);
                });

                // console.log(dados.map(function(key, value){
                //     return `<input type="hidden" name="product_${key}" value="${value}">`;
                // }))
            });

        });
    </script>
@endsection
