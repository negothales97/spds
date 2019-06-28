@extends('furnisher.templates.default')

@section('title', 'Prestador de Serviço')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>{{$furnisher->name}}</h1>
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
                        <div class="row">
                            <div class="col-sm-3">
                                <h4>Foto de perfil</h4>
                                <div>
                                    <img src="{{asset('images/logo')}}/{{$furnisher->logo}}" class="img-perfil"
                                        alt="Foto de perfil">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h4>E-mail</h4>
                                        <p>{{$furnisher->email}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <h4>Área de Ocupação</h4>
                                        <p>{{$furnisher->occupation_area->name}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h4>Telefone</h4>
                                        <p>{{$furnisher->phone}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <h4>CPF/CNPJ</h4>
                                        <p>{{$furnisher->document_number}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <h4>Texto sobre</h4>
                                <p>{{$furnisher->description}}</p>

                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('furnisher.edit')}}" class="">
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