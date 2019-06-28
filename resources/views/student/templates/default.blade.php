<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('student.includes.head')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        
        @include('student.includes.header')

        @include('student.includes.sidebar')

        @yield('content')

        @include('student.includes.modals')
        
        @include('student.includes.footer')
        
    </body>

</html>