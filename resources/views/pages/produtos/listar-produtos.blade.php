@extends('index')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="h2">Produtos</h1>
        </div>
        <div class="col-12">
            <div class="row d-flex justify-content-between align-items-center">

                <div class="col-12 col-md-6">
                    <form action="" method="get">
                        <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar...">
                        <button class="btn btn-primary mt-2">Buscar</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 text-md-end" style="justify-content: right">
                    <a href="" class="btn btn-success mt-2">Cadastrar Produto</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <h4>Total de produtos (0)</h4>
            <div class="table-responsive small">
                <table class="table table-striped table-sm align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Data cadastro</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($db_produtos as $produto)
                            <tr>
                                <td>{{ $produto->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>R$ {{ number_format($produto->valor, 2, ',', '.') }}</td>
                                <td>
                                    <a class="btn btn-info" href="">
                                        <i class="fa fa-pencil"></i> Editar
                                    </a>
                                    <a class="btn btn-danger" href="">
                                        <i class="fa fa-trash"></i> Deletar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
