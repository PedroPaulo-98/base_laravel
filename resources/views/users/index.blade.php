@extends('layouts.app') <!-- Certifique-se de que o layout correto está sendo chamado -->

@section('content')
<div class="content-card">
    <div class="container">
    <div class="row">
        <div class="col-sm-9 text-start">
            <h2>Usuários</h2>
        </div>
    
        <div class="col-sm-3 text-end">
            <a href="user/create" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Cadastrar
            </a>
        </div>
    </div>
    </div>
    <br>
    <table class="table table-responsive table-striped table-secondary" id="table">
        <thead>
            <th width=5%>#</th>
            <th width=50%>Nome</th>
            <th width=13%>Ações</th>
        </thead>
        
        <tbody>
            @foreach($data as $data)
                <tr class="align-middle">
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        <div class="row">
                            <form method="post">

                                    <a href="sector/{{ $data->id }}" class="btn btn-info" title="Editar Unidade">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
            
                                    <a href="employee_sector/{{ $data->id }}" class="btn btn-success" title="Designar Funcionários para o Setor">
                                        <i class="fa-solid fa-clipboard-list"></i>
                                    </a>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
