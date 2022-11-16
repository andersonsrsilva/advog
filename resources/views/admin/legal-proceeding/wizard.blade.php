@extends('admin.layouts.admin')

@section('content')

<div class="page-title">
    <div class="title_left">
        <h1 class="h3">{{ $title }}</h1>
    </div>
    <div class="title_right">
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/admin">Home</a></li>
                <li><a href="/admin/processos">Processos Judiciais</a></li>
                <li class="active">{{ $breadcrumb }}</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_content">
                <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps">
                        <li>
                            <a href="#step-1">
                                <span class="step_no">1</span>
                                <span class="step_descr">Passo 1<br />
                                    <small>Criar processo</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2">
                                <span class="step_no">2</span>
                                <span class="step_descr">Passo 2<br />
                                    <small>Anexar arquivos</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3">
                                <span class="step_no">3</span>
                                <span class="step_descr">Passo 3<br />
                                    <small>Exportar processo</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4">
                                <span class="step_no">4</span>
                                <span class="step_descr">Passo 4<br />
                                    <small>Finalizar processo</small>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <br/><br/>
                    <div id="step-1">
                        <form id="legal-proceeding-form" action={{ route ('admin.legal-proceeding.store') }}>
                            @include('admin.legal-proceeding.wizard-legal-proceeding-form')
                            <input type="hidden" id="id-legalProceeding" name="id-legalProceeding">
                        </form>
                    </div>
                    <div id="step-2">
                        @include('admin.legal-proceeding.wizard-upload-form')
                    </div>
                    <div id="step-3">
                        <form id="legal-proceeding-download-form" action={{ route ('admin.legal-proceeding.buildPDF') }}>
                            @include('admin.legal-proceeding.wizard-download-form')
                        </form>
                    </div>
                    <div id="step-4">
                        @include('admin.legal-proceeding.wizard-legal-proceeding-number-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/legal-proceeding/wizard.css')) }}
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/legal-proceeding/wizard.js')) }}
@endsection
