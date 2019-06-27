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
                    <form method="POST" action="{{route('admin.company.update')}}"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="company_id" value="{{$company->id}}">
                        <div class="box-body">
                            <div class="form-group row box-nome">
                                <div class="col-xs-6">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" class="form-control" value="{{$company->name}}">
                                </div>
                                <div class="col-xs-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="{{$company->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label for="trade">Razão Social</label>
                                    <input type="text" name="trade" class="form-control"
                                        value="{{$company->trade}}">
                                </div>
                                <div class="col-xs-6">
                                    <label for="cnpj">CNPJ<small>(Sem os pontos)</small></label>
                                    <input type="text" name="cnpj" placeholder="Digite sem os pontos"
                                        class="form-control input-cnpj" value="{{$company->cnpj}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label for="mensality">Mensalidade</label>
                                    <input type="text" name="mensality" class="form-control input-money"
                                        value="{{$company->mensality}}">
                                </div>
                                <div class="col-xs-6">
                                    <label for="phone">Telefone</label>
                                    <input type="text" name="phone" class="form-control input-phone"
                                        value="{{$company->phone}}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="zip_code">CEP</label>
                                    <input type="text" name="zip_code" class="form-control input-cep"
                                        value="{{$company->zip_code}}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="street">Logradouro</label>
                                    <input type="text" name="street" class="form-control"
                                        value="{{$company->street}}">
                                </div>
                                <div class="col-sm-2">
                                    <label for="number">Número</label>
                                    <input type="text" name="number" class="form-control"
                                        value="{{$company->number}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label for="neighborhood">Bairro</label>
                                    <input type="text" name="neighborhood" class="form-control"
                                        value="{{$company->neighborhood}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="state_id">Estado</label>
                                    <select name="state_id" class="form-control state_id">
                                        <option value="" selected disabled hidden>SELECIONE..</option>
                                        @foreach($states as $state)
                                        <option {{$state->id == $company->state_id ? "selected" : ""}} value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="city_id">Cidade</label>
                                    <select name="city_id" class="form-control city_id">
                                        <option value="" selected disabled hidden>SELECIONE..</option>
                                        @foreach($cities as $city)
                                        <option {{$city->id == $company->city_id ? "selected" : ""}} value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                            <a href="{{route('admin.company.show')}}" class="">
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