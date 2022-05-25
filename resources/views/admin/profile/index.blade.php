@extends('admin.layouts.admin')

@section('content')

<div class="page-title">
    <div class="title_left">
        <h1 class="h3">Meu perfil</h1>
    </div>
    <div class="title_right">
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/admin">Home</a></li>
                <li class="active">Meu perfil</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_content">
                <br />
                <form class="form-horizontal" action="{{ route('admin.profile.update') }}" method="POST">
                    @csrf
                    <div class="row">    
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">                        
                        <div class="profilepic">
                            <img class="profilepic_image" src="{{$user->avatar}}" width="150" height="150" alt="" />
                                <div class="profilepic_content">
                                    <span class="profilepic_icon"><i class="fa fa-camera"></i></span>
                                    <span class="profilepic_text">Alterar</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12"> 
                            <div class="form-group">
                                <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3" for="name">Nome<span class="required">*</span></label>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" id="name" name="name" required="required" class="form-control" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3" for="email">E-mail<span class="required">*</span></label>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" id="email" name="email" required="required" class="form-control" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3" for="password">Senha</label>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9">
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-md-3 col-sm-3 col-xs-3" for="password-confirm">Confirmar senha</label>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9">
                                    <input type="password" id="password-confirm" name="password-confirm" class="form-control">
                                </div>
                            </div>	
                        </div>
                    </div>

                    <div class="ln_solid"></div>

                    <div class="row">
                        <button class="btn btn-secundary" type="button">Cancelar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
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
