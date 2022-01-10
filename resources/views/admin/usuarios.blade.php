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
                            <button class="btn btn-sm iq-bg-success"><i class="ri-add-fill"><span
                                        class="pl-1">Adicionar Novo</span></i>
                            </button>
                        </span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Código</th>
                                    <th>Filiado</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td contenteditable="true">{{ $user->name }}</td>
                                        <td contenteditable="true">{{ $user->email }}</td>
                                        <td contenteditable="true">{{ $user->uniqid }}</td>
                                        <td contenteditable="true">{{ $user->filiados->name ?? 'Código errado ou matriz' }}</td>
                                        <td>
                                            <span class=""><button type="button"
                                                    class="btn iq-bg-danger btn-rounded btn-sm my-0">Remover</button></span>
                                            <span class=""><button type="button"
                                                    class="btn iq-bg-info btn-rounded btn-sm my-0">Editar</button></span>
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


@endsection
