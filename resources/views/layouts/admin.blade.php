<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <meta name="robots" content="noindex, nofollow">
     <link rel="stylesheet" href="{{asset('css/main.css')}}">
     <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
     <link rel="stylesheet" href="{{asset('iconfont/material-icons.css')}}">
     <link rel="icon" href="{{ asset('images/logo/Sin-título-1.png') }}">

    @stack('styles')

  </head>
   <style>
     .btn-round { 
   font-size: 24px;
    height: 41px;
    min-width: 41px;
    width: 41px;
    padding: 0;
    overflow: hidden;
    position: relative;
    line-height: 41px; 
    border-radius: 50%; }
   </style>

  <body id="login" class="grey lighten-4">

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style=" background:linear-gradient(to right,#f44336,#d32f2f,#b71c1c);">
          <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center" href="#">{{ env('APP_NAME') }}</a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a href="logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="text-white">
                <i class="fas fa-sign-out-alt"></i> Salir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </li>
          </ul>
    </nav>
       <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" id="leftmenu">
            @include('layouts.partials.leftmenu')
        </aside>

        <!-- Content Wrapper. Contains page content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1  class="h2">
            @yield('page_title')
           
        </h1>
      </div>

        <!-- Main content -->
        <section class="content container-fluid">
        <!--Page Content Here -->
        @yield('content')
        </section>

    </main>
    <!-- REQUIRED JS SCRIPTS -->
      <!-- jQuery -->
     
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/dashboard.js')}}"></script>

    
    <script>
 $(document).ready(function() {
   var table = $('#example').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
            }
        },
         lengthChange: true,
        buttons: [ 'copy', 'excel', 'pdf','print' ]
    });

    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
   
    @stack('scripts')

  </body>
</html>
