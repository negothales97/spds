@extends('admin.templates.default')

@section('title', 'Dashboard')

@section('description', 'Descrição')

@section('content')
<?php
  $company = DB::table('companies')->get();
  $furnisher = DB::table('furnishers')->get();
  $student = DB::table('students')->get();
  $coupons = DB::table('coupons')->get();
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </section>

    @isset($_GET['alert'])
      <section class="content-header">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-sm-12">
            <div class="alert alert-{{$_GET['type-alert']}} alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{$_GET['alert']}}
            </div>
          </section>
        </div>
      </section>
    @endisset

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$student->count()}}</h3>

              <p>EX-Aluno</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('admin.student.show')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$furnisher->count()}}</h3>

              <p>Prestadores de Serviço</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('admin.furnisher.show')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$company->count()}}</h3>

              <p>Empresas</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('admin.company.show')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Cupons Gerados</h3>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Código Cupom</th>
                    <th>Valor</th>
                    <th>Validade</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($coupons as $coupon)
                    <tr>
                      <td>{{$coupon->code}}</td>
                      <td>R$ {{convertMoneyUSAtoBrazil($coupon->value)}}</td>
                      <td>{{convertDateUSAtoBrazil($coupon->validity)}}</td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="4">Nenhum resultado encontrado</td>
                    </tr>
                  @endforelse
                </tbody>
                <tfoot>
                  <tr>
                    <th>Código Cupom</th>
                    <th>Valor</th>
                    <th>Validade</th>
                  </tr>
                </tfoot>   
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

@stop