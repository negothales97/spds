@extends('company.templates.default')

@section('title', 'Ex-Aluno')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>{{$student->name}}</h1>
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
                                    <img src="{{asset('images/thumbnail')}}/{{$student->thumbnail}}" class="img-perfil"
                                        alt="Foto de perfil">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="row box-nome">
                                    <div class="col-xs-6">
                                        <h4>E-mail</h4>
                                        <p>{{$student->email}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <h4>Telefone</h4>
                                        <p>{{$student->phone}}</p>
                                    </div>
                                </div>
                                <div class=" row">
                                    <div class="col-xs-6">
                                        <h4>CPF</h4>
                                        <p>{{$student->cpf}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class=" row">
                            <div class="col-xs-12">
                                <h4>Formação</h4>
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Nível</th>
                                            <th scope="col">Curso</th>
                                            <th scope="col">Situação</th>
                                            <th scope="col">Conclusão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($student->formations as $formation)
                                        <tr>
                                            <td>{{$formation->name}}</td>
                                            <td>{{$formation->level->name}}</td>
                                            <td>{{$formation->course->name}}</td>
                                            <td>{{ucfirst($formation->situation)}}</td>
                                            <td>{{$formation->situation == 'trancado' ? "Trancado" : str_pad($formation->finish_month, 2, "0", STR_PAD_LEFT) ."/".$formation->finish_year}}
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Não possui nenhuma formação cadastrada</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class=" row">
                            <div class="col-xs-12">
                                <h4>Experiência Profissional</h4>
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th scope="col">Nome Empresa</th>
                                            <th scope="col">Cargo</th>
                                            <th scope="col">Nível hierárquico</th>
                                            <th scope="col">Data início</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($student->professionals as $professional)
                                        <tr>
                                            <td>{{$professional->name}}</td>
                                            <td>{{$professional->occupation}}</td>
                                            <td>{{$professional->hierarchy->name}}</td>
                                            <td>{{str_pad($professional->start_month, 2, "0", STR_PAD_LEFT) ."/".$professional->start_year}}
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Não possui nenhuma experiência cadastrada</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=" row">
                            <div class="col-xs-12">
                                <h4>Idiomas</h4>
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th scope="col">Idioma</th>
                                            <th scope="col">Nível</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($student->language_students as $lang)
                                        <tr>
                                            <td>{{$lang->language->name}}</td>
                                            <td>{{$lang->level}}</td>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Não possui nenhum idioma cadastrado</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class=" row">
                            <div class="col-xs-12">
                                <h4>Conhecimentos em Informática</h4>
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th scope="col">Categoria</th>
                                            <th scope="col">Conhecimento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($student->knowledge_students as $know)
                                        <tr>
                                            <td>{{$know->knowledge->name}}</td>
                                            <td>{{$know->subknowledge->name}}</td>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Não possui nenhum conhecimento em informática cadastrado</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>

@stop