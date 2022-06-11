@extends('admin.layouts.admin')

@section('content')

<div class="page-title">
    <div class="title_left">
        <h1 class="h3">Clientes</h1>
    </div>
    <div class="title_right">
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/admin">Home</a></li>
                <li class="active">Clientes</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_content">
                <button class="btn btn-success" onclick="window.location='{{route('admin.customers.create')}}'">
                    <i class="fa fa-plus"></i> Novo cliente
                </button>
                <br /><br />
                <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>@sortablelink('name', 'Nome', ['page' => $customers->currentPage()])</th>
                            <th>@sortablelink('cpf', 'CPF', ['page' => $customers->currentPage()])</th>
                            <th>@sortablelink('email', 'E-mail', ['page' => $customers->currentPage()])</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->cpf }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary btn-icon" href="{{ route('admin.customers.show', [$customer->id]) }}" title="mostrar">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-xs btn-info btn-icon" href="{{ route('admin.customers.edit', [$customer->id]) }}" title="editar">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="" class="btn btn-xs btn-danger btn-icon" title="Excluir" data-toggle="modal" data-target="#delete-modal" data-id="{{$customer->id}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('admin.customers.destroy') }}" method="post">
                {{method_field('delete')}} {{csrf_field()}}
                <div class="modal-body">
                    <p>Tem certeza de que deseja excluir?</p>
                    <input type="hidden" name="id" id="modal_id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="confirmLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmLabel">Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('admin.customers.destroy') }}" method="post">
                {{method_field('post')}} {{csrf_field()}}
                <div class="modal-body">
                    <p>Confirma a inclusão?</p>
                    <input type="hidden" name="id" id="modal_id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
