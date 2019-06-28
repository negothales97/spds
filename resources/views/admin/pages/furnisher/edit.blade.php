@extends('admin.templates.default')

@section('title', 'Editar Prestador de Serviço')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>Editar Prestador de Serviço</h1>
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
                    <form method="POST" action="{{route('admin.furnisher.update')}}"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="furnisher_id" value="{{$furnisher->id}}">
                        <div class="box-body">
                            <div class="form-group row box-nome">
                                <div class="col-xs-6">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" class="form-control" value="{{$furnisher->name}}">
                                </div>
                                <div class="col-xs-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="{{$furnisher->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-4">
                                    <label for="phone">Telefone</label>
                                    <input type="text" name="phone" class="form-control input-phone"
                                        value="{{$furnisher->phone}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="document_number">CPF/CNPJ<small>(Sem os pontos)</small></label>
                                    <input type="text" name="document_number" placeholder="digite sem os pontos"
                                        class="form-control input-cpfcnpj" value="{{$furnisher->document_number}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="logo">Logo</label>
                                    <input class="form-control" name="logo" type="file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="occupation_area_id">Área de Ocupação</label>
                                    <select name="occupation_area_id" class="form-control">
                                        <option value="" disabled selected hidden>SELECIONE...</option>
                                        @forelse($occupations as $occupation)
                                        <option {{$occupation->id == $furnisher->occupation_area_id ? "selected" : ""}} value="{{$occupation->id}}">{{$occupation->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="description">Texto Sobre a Empresa</label>
                                    <textarea name="description" class="form-control" rows="5"
                                        placeholder="Fale um pouco sobre você">{{$furnisher->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <a href="{{route('admin.furnisher.show')}}" class="">
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