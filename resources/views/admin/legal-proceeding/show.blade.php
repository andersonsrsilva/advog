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
                <li><a href="/admin/processos">Processos Judiciais</a></li>
                <li class="active">ver</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_content">
                <br>

                @include('admin.legal-proceeding.form')

                <div class="row">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <a class="btn btn-primary" href="{{route('admin.legal-proceeding')}}">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/legal-proceeding/create.js')) }}
@endsection
