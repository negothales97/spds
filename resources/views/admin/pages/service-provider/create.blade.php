@extends('admin.templates.default')

@section('title', 'Adicionar Prestador de Serviço')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>Adicionar Prestador de Serviço</h1>
            </div>
        </div>
    </section>

    @if(session()->has('success'))
    <section class="content-header">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-sm-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('success')}}
                </div>
            </section>
        </div>
    </section>
    @endisset
    @if(session()->has('info'))
    <section class="content-header">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-sm-12">
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('info')}}
                </div>
            </section>
        </div>
    </section>
    @endisset

    @if ($errors->any())
    <div class="content-header">
        @foreach ($errors->all() as $error)
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ $error }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dados</h3>
                    </div>
                    <form method="POST" action="{{route('admin.service_provider.store')}}"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group row box-nome">
                                <div class="col-xs-6">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                </div>
                                <div class="col-xs-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-4">
                                    <label for="phone">Telefone</label>
                                    <input type="text" name="phone" class="form-control input-phone"
                                        value="{{old('phone')}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="document_number">CPF/CNPJ<small>(Sem os pontos)</small></label>
                                    <input type="text" name="document_number" placeholder="Digite sem os pontos"
                                        class="form-control input-cpfcnpj" value="{{old('document_number')}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="logo">Logo</label>
                                    <input class="form-control" name="logo" type="file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="password">Senha</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        value="{{old('password')}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="password_confirmation">Confirmação de senha</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" value="{{old('password_confirmation')}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="occupation_area_id">Área de Ocupação</label>
                                    <select name="occupation_area_id" class="form-control">
                                        <option value="" disabled selected hidden>SELECIONE...</option>
                                        @forelse($occupations as $occupation)
                                        <option {{$occupation->id == old('occupation_area_id') ? "selected" : ""}} value="{{$occupation->id}}">{{$occupation->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="description">Texto Sobre a Empresa</label>
                                    <textarea name="description" class="form-control" rows="5"
                                        placeholder="Fale um pouco sobre você">{{old('description')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                            <a href="{{route('admin.service_provider.show')}}" class="">
                                <button type="button" class="btn btn-secondary">Voltar</button>
                            </a>
                        </div>
                    </form>
                </div>
            </section>

        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

@stop