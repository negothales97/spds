@extends('admin.templates.default')

@section('title', 'Editar Cupom')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>Editar Cupom</h1>
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
            <section class="col-lg-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dados</h3>
                    </div>
                    <form method="POST" action="{{route('admin.coupon.update')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="coupon_id" value="{{$coupon->id}}">
                        <div class="box-body">
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <label for="code">Código Cupom</label>
                                    <input type="text" name="code" class="form-control" value="{{$coupon->code}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <label for="value">Valor Cupom</label>
                                    <input type="text" name="value" class="form-control input-money"
                                        value="{{$coupon->value}}">
                                </div>
                                <div class="col-xs-6">
                                    <label for="validity">Validade</label>
                                    <input type="text" name="validity" class="form-control input-date"
                                        value="{{$coupon->validity}}">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <a href="{{route('admin.coupon.show')}}" class="">
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