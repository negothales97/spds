<!DOCTYPE html>
<html lang="pt-br">
    <head>
        @include('company.includes.head')
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        
        @include('company.includes.header')

        @include('company.includes.sidebar')

        @yield('content')

        @include('company.includes.modals')
        
        @include('company.includes.footer')
        
    </body>

</html>