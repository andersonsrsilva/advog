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
                <button class="btn btn-success" onclick="window.location='{{route('admin.customers.new')}}'">
                    <i class="fa fa-plus"></i> Novo cliente
                </button>
                <br /><br />

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
            
            <form action="{{ route('admin.users.destroy') }}" method="post">
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
            
            <form action="{{ route('admin.users.destroy') }}" method="post">
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
