@extends('student.templates.default')

@section('title', 'Editar Ex-Aluno')

@section('description', 'Descrição')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <h1>Editar {{$student->name}}</h1>
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
                    <form method="POST" action="{{route('student.update')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="student_id" value="{{$student->id}}">
                        <div class="box-body">
                            <div class="form-group row box-nome">
                                <div class="col-xs-4">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" class="form-control" value="{{$student->name}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="{{$student->email}}">
                                </div>
                                <div class="col-xs-4">
                                    <label>Alterar Senha</label>
                                    <a class="btn btn-primary act-password password" data-id={{$student->id}}>
                                        Alterar
                                    </a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-4">
                                    <label for="phone">Telefone</label>
                                    <input type="text" name="phone" class="form-control input-phone"
                                        value="{{$student->phone}}">
                                </div>
                                <div class="col-xs-4">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" class="form-control input-cpf"
                                        value="{{$student->cpf}}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="thumbnail">Foto de perfil</label>
                                    <input name="thumbnail" type="file">
                                </div>
                            </div>
                            <div class="form-group row">
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
                                                <th scope="col">Ações</th>
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
                                                <td>
                                                    <a href="#" title="Editar" data-formation=""
                                                        class="act-list act-list-blue act-formation-edit"
                                                        data-formation-id="{{$formation->id}}"
                                                        data-formation-name="{{$formation->name}}"
                                                        data-formation-country_id="{{$formation->country_id}}"
                                                        data-formation-state_id="{{$formation->state_id}}"
                                                        data-formation-level_id="{{$formation->level_id}}"
                                                        data-formation-course_id="{{$formation->course_id}}"
                                                        data-formation-situation="{{$formation->situation}}"
                                                        data-formation-start_month="{{$formation->start_month}}"
                                                        data-formation-start_year="{{$formation->start_year}}"
                                                        data-formation-finish_month="{{$formation->finish_month}}"
                                                        data-formation-finish_year="{{$formation->finish_year}}">
                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{route('student.formation.delete', ['formation'=> $formation])}}"
                                                        title="Editar" data-formation=""
                                                        class="act-list act-list-red act-delete">
                                                        <i class="fa f fa-trash" aria-hidden="true"></i>
                                                    </a>
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
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <button type="button" data-student_id="{{$student->id}}"
                                        class="btn btn-primary act-formation">
                                        Incluir Formação
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <h4>Experiência Profissional</h4>
                                    <table class="table table-bordered table-striped">

                                        <thead>
                                            <tr>
                                                <th scope="col">Nome Empresa</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Nível hierárquico</th>
                                                <th scope="col">Data início</th>
                                                <th scope="col">Ações</th>
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
                                                <td>
                                                    <a href="#" title="Editar" data-formation=""
                                                        class="act-list act-list-blue act-professional-edit"
                                                        data-professional-id="{{$professional->id}}"
                                                        data-professional-name="{{$professional->name}}"
                                                        data-professional-occupation="{{$professional->occupation}}"
                                                        data-professional-hierarchy_id="{{$professional->hierarchy_id}}"
                                                        data-professional-description="{{$professional->description}}"
                                                        data-professional-country_id="{{$professional->country_id}}"
                                                        data-professional-state_id="{{$professional->state_id}}"
                                                        data-professional-city_id="{{$professional->city_id}}"
                                                        data-professional-start_month="{{$professional->start_month}}"
                                                        data-professional-start_year="{{$professional->start_year}}"
                                                        data-professional-finish_month="{{$professional->finish_month}}"
                                                        data-professional-finish_year="{{$professional->finish_year}}">
                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{route('student.professional.delete', ['professional'=> $professional])}}"
                                                        title="Editar" data-formation=""
                                                        class="act-list act-list-red act-delete">
                                                        <i class="fa f fa-trash" aria-hidden="true"></i>
                                                    </a>
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
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <button type="button" data-student_id="{{$student->id}}"
                                        class="btn btn-primary act-professional">
                                        Incluir Experiência Profissional
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <h4>Idiomas</h4>
                                    <table class="table table-bordered table-striped">

                                        <thead>
                                            <tr>
                                                <th scope="col">Idioma</th>
                                                <th scope="col">Nível</th>
                                                <th scope="col">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($student->language_students as $lang)
                                            <tr>
                                                <td>{{$lang->language->name}}</td>
                                                <td>{{$lang->level}}</td>
                                                </td>
                                                <td>
                                                    <a href="#" title="Editar" data-formation=""
                                                        class="act-list act-list-blue act-language-edit"
                                                        data-language-id="{{$lang->id}}"
                                                        data-language-language_id="{{$lang->language_id}}"
                                                        data-language-level="{{$lang->level}}">
                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{route('student.language.delete', ['language'=> $lang])}}"
                                                        title="Editar" data-formation=""
                                                        class="act-list act-list-red act-delete">
                                                        <i class="fa f fa-trash" aria-hidden="true"></i>
                                                    </a>
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
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <button type="button" data-student_id="{{$student->id}}"
                                        class="btn btn-primary act-language">
                                        Incluir Idioma
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <h4>Conhecimentos em Informática</h4>
                                    <table class="table table-bordered table-striped">

                                        <thead>
                                            <tr>
                                                <th scope="col">Categoria</th>
                                                <th scope="col">Conhecimento</th>
                                                <th scope="col">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($student->knowledge_students as $know)
                                            <tr>
                                                <td>{{$know->knowledge->name}}</td>
                                                <td>{{$know->subknowledge->name}}</td>
                                                </td>
                                                <td>
                                                    <a href="#" title="Editar" data-formation=""
                                                        class="act-list act-list-blue act-knowledge-edit"
                                                        data-knowledge-id="{{$know->id}}"
                                                        data-knowledge-knowledge_id="{{$know->knowledge_id}}"
                                                        data-knowledge-subknowledge_id="{{$know->subknowledge_id}}">
                                                        <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="{{route('student.knowledge.delete', ['knowledge'=> $know])}}"
                                                        title="Editar" data-formation=""
                                                        class="act-list act-list-red act-delete">
                                                        <i class="fa f fa-trash" aria-hidden="true"></i>
                                                    </a>
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
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <button type="button" data-student_id="{{$student->id}}"
                                        class="btn btn-primary act-knowledge">
                                        Incluir Conhecimento em Informática
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                            <a href="{{route('student.show')}}" class="">
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

@section('modals')
<!--Inclur formação-->
<div class="modal fade" tabindex="-1" role="dialog" id="formationModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Incluir Formação</h4>
            </div>
            <form action="{{route('student.formation.store')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="student_id" value="">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="name">Nome da Instituição</label>
                            <input type="text" name="name" placeholder="Nome da Instituição" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="country_id">País</label>
                            <select name="country_id" class="form-control country_id">
                                <option selected disabled hidden>País..</option>
                                @isset($countries)
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6 state_formation">
                            <label for="state_id">Estado</label>
                            <select name="state_id" class="form-control state_id">
                                <option selected disabled hidden>SELECIONE..</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="level_id">Nível</label>
                            <select name="level_id" class="form-control level_id">
                                <option selected disabled hidden>Nível..</option>
                                @isset($levels)
                                @foreach($levels as $level)
                                <option value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="course_id">Curso..</label>
                            <select name="course_id" class="form-control course_id">
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="situation">Situação</label>
                            <select name="situation" class="form-control situation">
                                <option selected disabled hidden>Situação..</option>
                                <option value="concluido">Concluído</option>
                                <option value="cursando">Cursando</option>
                                <option value="trancado">Trancado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="start_month">Mês Início</label>
                            <select name="start_month" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <?php $y = date("Y");$y += 10?>
                        <div class="col-sm-3">
                            <label for="start_year">Ano Início</label>
                            <select name="start_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_month">Mês Conclusão</label>
                            <select name="finish_month" class="form-control">
                                <option selected disabled hidden> Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_year">Ano Conclusão</label>
                            <select name="finish_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Incluir formação -->

<!--Editar formação-->
<div class="modal fade" tabindex="-1" role="dialog" id="formationEditModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Editar Formação</h4>
            </div>
            <form action="{{route('student.formation.update')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="formation_id" value="">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="name">Nome da Instituição</label>
                            <input type="text" name="name" placeholder="Nome da Instituição" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="country_id">País</label>
                            <select name="country_id" class="form-control country_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($countries)
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6 state_formation">
                            <label for="state_id">Estado</label>
                            <select name="state_id" class="form-control state_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($states)
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="level_id">Nível</label>
                            <select name="level_id" class="form-control level_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($levels)
                                @foreach($levels as $level)
                                <option value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="course_id">Curso..</label>
                            <select name="course_id" class="form-control course_id">
                                @isset($courses)
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="situation">Situação</label>
                            <select name="situation" class="form-control situation">
                                <option selected disabled hidden>Situação..</option>
                                <option value="concluido">Concluído</option>
                                <option value="cursando">Cursando</option>
                                <option value="trancado">Trancado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="start_month">Mês Início</label>
                            <select name="start_month" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <?php $y = date("Y");$y += 10?>
                        <div class="col-sm-3">
                            <label for="start_year">Ano Início</label>
                            <select name="start_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_month">Mês Conclusão</label>
                            <select name="finish_month" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_year">Ano Conclusão</label>
                            <select name="finish_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Editar formação -->

<!--Incluir experiencia profissional-->
<div class="modal fade" id="professionalModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Incluir Experiência Profissional</h4>
            </div>
            <form method="POST" action="{{route('student.professional.store')}}">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="student_id" value="">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="name">Nome da Empresa</label>
                            <input type="text" name="name" placeholder="Nome da Empresa" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="occupation">Cargo</label>
                            <input type="text" name="occupation" placeholder="Indique seu Cargo.." class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="hierarchy_id">Nível Hierárquico</label>
                            <select id="hierarchy_id" name="hierarchy_id" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @isset($hierarchies)
                                @foreach($hierarchies as $hierarchy)
                                <option value="{{$hierarchy->id}}">{{$hierarchy->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="description">Descrição das Atividadees</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="country_id">País</label>
                            <select name="country_id" class="form-control country_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($countries)
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6 state_professional">
                            <label for="state_id">Estado</label>
                            <select name="state_id" class="form-control state_id">
                                <option selected disabled hidden>SELECIONE..</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 city_professional">
                            <label for="city_id">Cidade</label>
                            <select name="city_id" class="form-control city_id">
                                <option selected disabled hidden>SELECIONE..</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="actually">Atual</label>
                            <select name="actually" class="form-control actually">
                                <option selected disabled hidden>SELECIONE..</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="start_month">Mês Início</label>
                            <select name="start_month" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <?php $y = date("Y");$y += 10?>
                        <div class="col-sm-3">
                            <label for="start_year">Ano Início</label>
                            <select name="start_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_month">Mês Saída</label>
                            <select name="finish_month" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_year">Ano Saída</label>
                            <select name="finish_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--/.Incluir experiencia profissional-->

<!--Editar experiencia profissional-->
<div class="modal fade" id="professionalEditModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Editar Experiência Profissional</h4>
            </div>
            <form method="POST" action="{{route('student.professional.update')}}">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="professional_id" value="">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="name">Nome da Empresa</label>
                            <input type="text" name="name" placeholder="Nome da Empresa" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="occupation">Cargo</label>
                            <input type="text" name="occupation" placeholder="Indique seu Cargo.." class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="hierarchy_id">Nível Hierárquico</label>
                            <select id="hierarchy_id" name="hierarchy_id" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @isset($hierarchies)
                                @foreach($hierarchies as $hierarchy)
                                <option value="{{$hierarchy->id}}">{{$hierarchy->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="description">Descrição das Atividades</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="country_id">País</label>
                            <select name="country_id" class="form-control country_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($countries)
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6 state_professional">
                            <label for="state_id">Estado</label>
                            <select name="state_id" class="form-control state_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($states)
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 city_professional">
                            <label for="city_id">Cidade</label>
                            <select name="city_id" class="form-control city_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($cities)
                                @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="actually">Atual</label>
                            <select name="actually" class="form-control actually">
                                <option selected disabled hidden>SELECIONE..</option>
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label for="start_month">Mês Início</label>
                            <select name="start_month" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <?php $y = date("Y");$y += 10?>
                        <div class="col-sm-3">
                            <label for="start_year">Ano Início</label>
                            <select name="start_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_month">Mês Saída</label>
                            <select name="finish_month" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 0; $i < 12; $i++) <option value="{{$i + 1}}">{{$i +1}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="col-sm-3 finish">
                            <label for="finish_year">Ano Saída</label>
                            <select name="finish_year" class="form-control">
                                <option selected disabled hidden>Selecione..</option>
                                @for($i = 1950; $i <= $y; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--/.Editar experiencia profissional-->

<!--Inclur idioma-->
<div class="modal fade" tabindex="-1" role="dialog" id="languageModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Incluir Idioma</h4>
            </div>
            <form action="{{route('student.language.store')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="student_id" value="">

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="language_id">Idioma</label>
                            <select name="language_id" class="form-control">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($languages)
                                @foreach($languages as $language)
                                <option value="{{$language->id}}">{{$language->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="level">Nível</label>
                            <select name="level" class="form-control">
                                <option selected disabled hidden>SELECIONE..</option>
                                <option value="Básico">Básico</option>
                                <option value="Intermediário">Intermediário</option>
                                <option value="Avançado">Avançado</option>
                                <option value="Fluente">Fluente</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Incluir Idioma -->

<!--Editar idioma-->
<div class="modal fade" tabindex="-1" role="dialog" id="languageEditModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Editar Idioma</h4>
            </div>
            <form action="{{route('student.language.update')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="lang_id" value="">

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="language_id">Idioma</label>
                            <select name="language_id" class="form-control">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($languages)
                                @foreach($languages as $language)
                                <option value="{{$language->id}}">{{$language->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="level">Nível</label>
                            <select name="level" class="form-control">
                                <option selected disabled hidden>SELECIONE..</option>
                                <option value="Básico">Básico</option>
                                <option value="Intermediário">Intermediário</option>
                                <option value="Avançado">Avançado</option>
                                <option value="Fluente">Fluente</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Editar Idioma -->

<!--Incluir Conhecimento-->
<div class="modal fade" tabindex="-1" role="dialog" id="knowledgeModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Incluir Conhecimento em Informática</h4>
            </div>
            <form action="{{route('student.knowledge.store')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="student_id" value="">

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="knowledge_id">Tipo</label>
                            <select name="knowledge_id" class="form-control knowledge_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($knowledges)
                                @foreach($knowledges as $knowledge)
                                <option value="{{$knowledge->id}}">{{$knowledge->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6 subknowledge_know">
                            <label for="subknowledge_id">Habilidade</label>
                            <select name="subknowledge_id" class="form-control subknowledge_id">
                                <option selected disabled hidden>SELECIONE..</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Incluir Conhecimento -->

<!--Editar Conhecimento-->
<div class="modal fade" tabindex="-1" role="dialog" id="knowledgeEditModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Editar Conhecimento em Informática</h4>
            </div>
            <form action="{{route('student.knowledge.update')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="know_id" value="">

                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="knowledge_id">Tipo</label>
                            <select name="knowledge_id" class="form-control knowledge_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($knowledges)
                                @foreach($knowledges as $knowledge)
                                <option value="{{$knowledge->id}}">{{$knowledge->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="col-sm-6 subknowledge_know">
                            <label for="subknowledge_id">Habilidade</label>
                            <select name="subknowledge_id" class="form-control subknowledge_id">
                                <option selected disabled hidden>SELECIONE..</option>
                                @isset($subknowledges)
                                @foreach($subknowledges as $subknowledge)
                                <option value="{{$subknowledge->id}}">{{$subknowledge->name}}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Editar Conhecimento -->
<!--Alterar senha-->
<div class="modal fade" tabindex="-1" role="dialog" id="passwordModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Alterar Senha</h4>
            </div>
            <form action="{{ route('student.password')}}" method="POST">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="">
                   
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="col-sm-6">
                            <label for="password_confirmation">Confirmação de Senha</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.Alterar senha -->


@endsection