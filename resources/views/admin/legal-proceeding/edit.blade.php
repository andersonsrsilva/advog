@extends('admin.layouts.admin')

@section('content')

<div class="page-title">
    <div class="title_left">
        <h1 class="h3">Editar processo</h1>
    </div>
    <div class="title_right">
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/admin">Home</a></li>
                <li><a href="/admin/processos">processos</a></li>
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
                <form action={{ route ('admin.legal-proceeding.update', $legalProceeding->id) }} method="POST">
                    @method('PUT')

                    @include('admin.legal-proceeding.wizard')

                    <div class="row">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a class="btn btn-primary" href="{{ route('admin.legal-proceeding') }}">Voltar</a>
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a id="buildPDF" class="btn btn-dark">Gerar PDF</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/legal-proceeding/wizard.js')) }}
@endsection
