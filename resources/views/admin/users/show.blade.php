@extends('admin.layouts.admin')

@section('content')

<div class="page-title">
    <div class="title_left">
        <h1 class="h3">{{ $user->name }}</h1>
    </div>
    <div class="title_right">
        <div class="pull-right">
            <ol class="breadcrumb">
                <li><a href="/admin">Home</a></li>
                <li><a href="/admin/users">Usuário</a></li>
                <li class="active">ver</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <table class="table table-striped table-hover">
        <tbody>
        <tr>
            <th></th>
            <td>
                <img src="{{ $user->avatar }}" class="user-profile-image">
            </td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>
                <a href="mailto:{{ $user->email }}">
                    {{ $user->email }}
                </a>
            </td>
        </tr>
        <tr>
            <th>Acessos</th>
            <td>
                {{ $user->roles->pluck('name')->implode(',') }}
            </td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                @if($user->active)
                    <span class="label label-primary">Ativo</span>
                @else
                    <span class="label label-danger">Inativo</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Login confirmado</th>
            <td>
                @if($user->confirmed)
                    <span class="label label-success">Sim</span>
                @else
                    <span class="label label-warning">não</span>
                @endif
            </td>
        </tr>
        <tr>
            <th>Criando em</th>
            <td>{{ $user->created_at }} ({{ $user->created_at->diffForHumans() }})</td>
        </tr>
        <tr>
            <th>Atualizado em</th>
            <td>{{ $user->updated_at }} ({{ $user->updated_at->diffForHumans() }})</td>
        </tr>

        <tr>
            <th>Último acesso ao sistema</th>
            <td>{{ $user->last_login }} ({{ $user->last_login->diffForHumans() }})</td>
        </tr>'
        </tbody>
    </table>
</div>
@endsection
