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
                    <div class="container my-3">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal"
                                    data-target="#novaCategoria"><i class="fas fa-plus"></i> Nova Categoria</button>
                            </div>
                            <div class="col-md-6 text-right">
                                @if ($id)
                                    <a class="btn btn-dark btn-sm" href="{{ url('/cadastro/categoria_menu') }}"><i
                                            class="fas fa-arrow-left"></i> Voltar</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="table" class="table-editable">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Nome</th>
                                    <th>Slug</th>
                                    @if ($id == null) <th>Sub Categorias</th> @endif
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr class="tr-id-{{ $category->id }}">
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        @if ($category->parent_id == null) <td>{{ $category->subCategories->count() }}</td> @endif
                                        <td>
                                            <div class="btn-group" role="group" aria-label="">
                                                @if ($category->parent_id == null)
                                                    <a href="{{ url('cadastro/categoria_menu', $category->id) }}"
                                                        class="btn btn-primary btn-xs"><i class="fas fa-eye"></i>
                                                        Vizualizar</a>
                                                @endif

                                                <a href="#" class="btn btn-info btn-xs btn-editar" data-toggle="modal"
                                                    data-target="#editarCategoria"
                                                    data-dados="{{ json_encode($category) }}"><i
                                                        class="fas fa-edit"></i>
                                                    Alterar</a>

                                                <a href="#" class="btn btn-danger btn-xs btn-excluir-categoria"
                                                    data-toggle="modal" data-target="#excluirCategoria"
                                                    data-dados="{{ json_encode($category) }}"><i
                                                        class="fas fa-trash"></i>
                                                    Apagar</a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                            <tfoot>
                                <th colspan="5">{{ $categories->count() }} Categorias</th>
                            </tfoot>
                        </table>
                    </div>
                    {{-- {{ $users->links() }} --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="novaCategoria" tabindex="-1" aria-labelledby="novaCategoria" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="#" method="post" id="postNovaCategoria">
                    @csrf
                    <input type="hidden" name="parent_id" value="@if ($id){{ $id }}@endif">
                    <div class="modal-header">
                        <h4 class="modal-title">Nova Categoria</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="category_name">Nome da Categoria</label>
                                <input type="text" name="category_name" class="form-control"
                                    placeholder="Nome da Categoria">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                            Fechar</button>
                        <button type="button" class="btn btn-success btn-salvar" data-update_table="S"
                            data-save_target="#postNovaCategoria" data-save_route="{{ route('novaCategoria') }}"><i
                                class="fas fa-save"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editarCategoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postEditarCategoria">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-header">
                        <h4 class="modal-title">Atualizar Categoria</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="category_name">Nome da Categoria</label>
                                <input type="text" name="category_name" class="form-control name"
                                    placeholder="Nome da Categoria">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                            Fechar</button>
                        <button type="button" class="btn btn-success btn-salvar" data-update_table="S"
                            data-save_target="#postEditarCategoria"
                            data-save_route="{{ route('atualizarCategoria') }}"><i class="fas fa-save"></i>
                            Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="excluirCategoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="post" id="postExcluirCategoria">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                            Fechar</button>
                        <button type="button" class="btn btn-danger btn-confirma-exclusao-categoria "><i
                                class="fas fa-save"></i> Excluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
