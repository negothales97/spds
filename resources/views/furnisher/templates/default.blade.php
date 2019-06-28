<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('furnisher.includes.head')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        
        @include('furnisher.includes.header')

        @include('furnisher.includes.sidebar')

        @yield('content')

        @include('furnisher.includes.modals')
        
        @include('furnisher.includes.footer')
        
    </body>

</html>