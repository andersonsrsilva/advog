@extends('admin.layouts.admin')

@section('content')

<div class="page-title">
    <div class="title_left">
        <h1 class="h3">Ver cliente</h1>
    </div>
    <div class="title_right">
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/admin">Home</a></li>
                <li><a href="/admin/clientes">clientes</a></li>
                <li class="active">editar</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_content">
                <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Nome<span class="required">*</span></label>
                        {!! Form::text('name', old('name', $customer->name), ['id'=>'name', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">E-mail<span class="required">*</span></label>
                        {!! Form::text('email', old('email', $customer->email), ['id'=>'email', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="cpf">CPF<span class="required">*</span></label>
                        {!! Form::text('cpf', old('cpf', $customer->cpf), ['id'=>'cpf', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cnh">Habilitação</label>
                        {!! Form::text('cnh', old('cnh', $customer->cnh), ['id'=>'cnh', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="passport">Passaporte</label>
                        {!! Form::text('passport', old('passport', $customer->passport), ['id'=>'passport', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="mobile_phone">Telefone celular<span class="required">*</span></label>
                        {!! Form::text('mobile_phone', old('mobile_phone', $customer->mobile_phone), ['id'=>'mobile_phone', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="home_phone">Telefone Residencial</label>
                        {!! Form::text('home_phone', old('home_phone', $customer->home_phone), ['id'=>'home_phone', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="zip_code">CEP<span class="required">*</span></label>
                        {!! Form::text('zip_code', old('zip_code', $customer->zip_code), ['id'=>'zip_code', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="address">Endereço<span class="required">*</span></label>
                        {!! Form::text('address', old('address', $customer->address), ['id'=>'address', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                    <div class="form-group col-md-2">
                        <label for="number_address">Número</label>
                        {!! Form::text('number_address', old('number_address', $customer->number_address), ['id'=>'number_address', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="other_address">Complemento</label>
                        {!! Form::text('other_address', old('other_address', $customer->other_address), ['id'=>'other_address', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="district_address">Bairro<span class="required">*</span></label>
                        {!! Form::text('district_address', old('district_address', $customer->district_address), ['id'=>'district_address', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="city">Cidade<span class="required">*</span></label>
                        <input type="hidden" id="ibge_code" name="ibge_code"/>

                        {!! Form::text('city_input', old('city_input', $customer->city->name), ['id'=>'city_input', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                        <select class="form-control" id="city_select" name="city_select"></select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="uf">Estado<span class="required">*</span></label>

                        {!! Form::select('uf',[
                                '0'=>'-- SELECIONE --',
                                'AC'=>'ACRE',
                                'AL'=>'ALAGOAS',
                                'AP'=>'AMAPÁ',
                                'AM'=>'AMAZONAS',
                                'BA'=>'BAHIA',
                                'CE'=>'CEARÁ',
                                'DF'=>'DISTRITO FEDERAL',
                                'ES'=>'Espírito Santo',
                                'GO'=>'GOIÁS',
                                'MA'=>'MARANHÃO',
                                'MT'=>'MATO GROSSO',
                                'MS'=>'MATO GROSSO DO SUL',
                                'MG'=>'MINAS GERAIS',
                                'PA'=>'PARÁ',
                                'PB'=>'PARAÍBA',
                                'PR'=>'PARANÁ',
                                'PE'=>'PERNAMBUCO',
                                'PI'=>'PIAUÍ',
                                'RJ'=>'RIO DE JANEIRO',
                                'RN'=>'RIO GRANDE DO NORTE',
                                'RS'=>'RIO GRANTE DO SUL',
                                'RO'=>'RONDÔNIA',
                                'RR'=>'RORAIMA',
                                'SC'=>'SANTA CATARINA',
                                'SP'=>'SÃO PAULO',
                                'SE'=>'SERGIPE',
                                'TO'=>'TOCANTINS',
                            ],
                            old('state', $customer->city->uf->code),
                            ['id'=>'state', 'class'=>'form-control', 'disabled'=>'disabled']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <a class="btn btn-primary" href="{{route('admin.customers')}}">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/script.js')) }}
@endsection
