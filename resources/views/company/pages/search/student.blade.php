@extends('company.templates.default')

@section('title', 'Profissionais')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>Profissionais</h1>
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
                                <div class="col-sm-4">
                                    <label>Nome</label>
                                    <input type="text" name="name" value="{{request('name')}}" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label>E-mail</label>
                                    <input type="text" name="email" value="{{request('email')}}" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label>Area de Atuação</label>
                                    <select type="text" name="occupation_area_id"
                                        value="{{request('occupation_area_id')}}" class="form-control">
                                        <option value="" disabled selected hidden>SELECIONE..</option>
                                        @foreach($occupations as $occupation)
                                        <option {{$occupation->id == request('occupation_area_id') ? "selected" : ""}} value="{{$occupation->id}}">{{$occupation->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Filtrar</button>
                            <button type="submit" class="btn btn-default clear-filters">Limpar</button>
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
                        <h3 class="box-title">Lista de Profissionais</h3>
                        <div class="box-tools">
                            <?php

                $paginate = $students;

                $link_limit = 7;

                $filters = '&name='.request('name');
                $filters .= '&email='.request('email');
                $filters .= '&occupation_area_id='.request('occupation_area_id');

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
                                    @if ($from < $i && $i < $to) <li
                                        class="{{ ($paginate->currentPage() == $i) ? ' active' : '' }}">
                                        <a href="{{ $paginate->url($i) . $filters}}">{{ $i }}</a>
                                        </li>
                                        @endif
                                        @endfor
                                        <li
                                            class="{{ ($paginate->currentPage() == $paginate->lastPage()) ? ' disabled' : '' }}">
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
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Área de Atuação</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $student)
                                <tr>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->occupation_area->name}}</td>
                                    <td>
                                        <a href="{{ route('company.search.student.show', ['student' => $student])}}"
                                            title="Visualizar" class="act-list act-list-blue">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Nenhum resultado encontrado</td>
                                </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Área de Atuação</th>
                                    <th>Ações</th>
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