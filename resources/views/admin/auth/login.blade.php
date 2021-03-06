@extends('admin.layout.auth')

@section('content')

<div class="login-box">
    <div class="login-logo">
        <img src="{{asset('images/logo.png')}}" alt="Logo" class="img-logo">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Login Administrativo</p>
        @if(session()->has('warning'))
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-sm-12">
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('warning')}}
                </div>
            </section>
        </div>
        @endisset
        <form role="form" method="POST" action="{{ url('/admin/') }}">

            {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group has-feedback">
                        <input name="email" type="email" class="form-control" placeholder="E-mail"
                            value="{{ old('email') }}" required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback">
                        <input name="password" type="password" class="form-control" placeholder="Senha" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
$(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
</script>
</body>

</html>


@endsection