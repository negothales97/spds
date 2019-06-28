@extends('company.templates.default')

@section('title', 'Ex-Aluno')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>{{$company->name}}</h1>
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
                    <div class="box-body">
                        <div class="form-group row box-nome">
                            <div class="col-xs-4">
                                <h4>Nome</h4>
                                <p>{{$company->name}}</p>
                            </div>
                            <div class="col-xs-4">
                                <h4>E-mail</h4>
                                <p>{{$company->email}}</p>
                            </div><div class="col-xs-4">
                                <h4>Razão Social</h4>
                                <p>{{$company->trade}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <h4>Telefone</h4>
                                <p>{{$company->phone}}</p>
                            </div>
                            <div class="col-xs-4">
                                <h4>CNPJ</h4>
                                <p>{{$company->cnpj}}</p>
                            </div>
                            <div class="col-xs-4">
                                <h4>Mensalidade</h4>
                                <p>R$ {{$company->mensality}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <h4>CEP</h4>
                                <p>{{$company->zip_code}}</p>
                            </div>
                            <div class="col-sm-4">
                                <h4>Logradouro</h4>
                                <p>{{$company->street}}</p>
                            </div>
                            <div class="col-sm-4">
                                <h4>Número</h4>
                                <p>{{$company->number}}</p>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <h4>Bairro</h4>
                                <p>{{$company->neighborhood}}</p>
                            </div>
                            <div class="col-sm-4">
                                <h4>Cidade</h4>
                                <p>{{$company->city->name}}</p>
                            </div>
                            <div class="col-sm-4">
                                <h4>Estado</h4>
                                <p>{{$company->state->name}}</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('company.edit')}}" class="">
                            <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

@stop