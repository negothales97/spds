@extends('company.templates.default')

@section('title', 'Cupons')

@section('description', 'Descrição')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-sm-6">
          <h1>Cupons</h1>
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
      <div class="row">
        <section class="col-lg-12">
          <div class="box">
              <form id="filterForm" method="GET" autocomplete="off">
              <div class="box-header">
                <h3 class="box-title">Filtrar resultados</h3>
              </div>
              <div class="box-body">
                <div class="row">
                  <div class="col-sm-12">
                    <label>Código Cupom</label>
                    <input type="text" name="code" value="{{request('code')}}" class="form-control">
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Filtrar</button>
                <button type="button" class="btn btn-default clear-filters">Limpar</button>
              </div>
            </form>
        </section>
      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de Cupons</h3>
              <div class="box-tools">
                <?php

                $paginate = $coupons;

                $link_limit = 7;

                $filters = '&name='.request('name');
                $filters .= '&email='.request('email');

                ?>

                @if($paginate->lastPage() > 1)
                  <ul class="pagination pagination-sm no-margin pull-right">
                      <li class="{{ ($paginate->currentPage() == 1) ? ' disabled' : '' }}">
                        <a href="{{ $paginate->url(1) . $filters}}">«</a>
                      </li>
                      @for($i = 1; $i <= $paginate->lastPage(); $i++)
                          <?php
                          $half_total_links = floor($link_limit / 2);
                          $from = $paginate->currentPage() - $half_total_links;
                          $to = $paginate->currentPage() + $half_total_links;
                          if ($paginate->currentPage() < $half_total_links) {
                             $to += $half_total_links - $paginate->currentPage();
                          }
                          if ($paginate->lastPage() - $paginate->currentPage() < $half_total_links) {
                              $from -= $half_total_links - ($paginate->lastPage() - $paginate->currentPage()) - 1;
                          }
                          ?>
                          @if ($from < $i && $i < $to)
                              <li class="{{ ($paginate->currentPage() == $i) ? ' active' : '' }}">
                                  <a href="{{ $paginate->url($i) . $filters}}">{{ $i }}</a>
                              </li>
                          @endif
                      @endfor
                      <li class="{{ ($paginate->currentPage() == $paginate->lastPage()) ? ' disabled' : '' }}">
                          <a href="{{ $paginate->url($paginate->lastPage()) . $filters}}">»</a>
                      </li>
                  </ul>
                @endif
              </div>
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