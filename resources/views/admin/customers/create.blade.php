@extends('admin.layouts.admin')

@section('content')

<div class="page-title">
    <div class="title_left">
        <h1 class="h3">Novo cliente</h1>
    </div>
    <div class="title_right">
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/admin">Home</a></li>
                <li><a href="/admin/clientes">clientes</a></li>
                <li class="active">novo</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_content">
                <br>
                {{ Form::open(['route'=>['admin.customers.create'],'method' => 'post','class'=>'']) }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="habilitacao">Habilitação</label>
                            <input type="text" class="form-control" id="habilitacao" name="habilitacao">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="passaporte">Passaporte</label>
                            <input type="text" class="form-control" id="passaporte" name="passaporte">
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="tel_residencial">Telefone Residencial</label>
                            <input type="text" class="form-control" id="tel_residencial" name="tel_residencial">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tel_celular">Telefone celular</label>
                            <input type="text" class="form-control" id="tel_celular" name="tel_celular">
                        </div>
                    </div>                                   
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" id="numero" name="numero">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cidade">Cidade</label>
                            <!-- <input type="text" class="form-control" id="cidade" name="cidade"> -->
                            <select class="form-control" id="cidade"></select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="estado">Estado</label>
                            <select class="form-control" id="estado">
                                <option value="0">-- SELECIONE --</option>
                                <option value="1">ACRE</option>
                                <option value="2">ALAGOAS</option>
                                <option value="3">AMAPÁ</option>
                                <option value="4">AMAZONAS</option>
                                <option value="5">BAHIA</option>
                                <option value="6">CEARÁ</option>
                                <option value="7">DISTRITO FEDERAL</option>
                                <option value="8">Espírito Santo</option>
                                <option value="9">GOIÁS</option>
                                <option value="10">MARANHÃO</option>
                                <option value="11">MATO GROSSO</option>
                                <option value="12">MATO GROSSO DO SUL</option>
                                <option value="13">MINAS GERAIS</option>
                                <option value="14">PARÁ</option>
                                <option value="15">PARAÍBA</option>
                                <option value="16">PARANÁ</option>
                                <option value="17">PERNAMBUCO</option>
                                <option value="18">PIAUÍ</option>
                                <option value="19">RIO DE JANEIRO</option>
                                <option value="20">RIO GRANDE DO NORTE</option>
                                <option value="21">RIO GRANTE DO SUL</option>
                                <option value="22">RONDÔNIA</option>
                                <option value="23">RORAIMA</option>
                                <option value="24">SANTA CATARINA</option>
                                <option value="25">SÃO PAULO</option>
                                <option value="26">SERGIPE</option>
                                <option value="27">TOCANTINS</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a class="btn btn-primary" href="{{ URL::previous() }}"> Cancelar</a>
                            <button type="submit" class="btn btn-success"> Salvar</button>
                        </div>
                    </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/script.js')) }}
@endsection