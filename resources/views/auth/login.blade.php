@extends('layouts.adminfront')

@section('title', 'Login')

@section('content')
  <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-6">
          <div class="text-center mt-5">
             <img src="{{('images/logo/logo_infotep.jpg')}}" height="100">
             <h5 class="mt-3">Instituto Nacional De Formación Técnica Profesional</h5>
          </div>
          <div class="card ml-5">
           <div class="title text-center">
             <h6 class="ml-1 mt-5">Ingresa tu Correo y contraseña</h6>
           </div>
                <form id="main-form" class=""><br>
                  <input type="hidden" id="_url" value="{{ url('login') }}">
                  <input type="hidden" id="_redirect" value="{{ url('') }}">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <div class="md-form row">
                       
                        <div class="col-md-10 offset-md-1 " >
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Introduzca el usuario correspondiente" autocomplete="username" autofocus>
                          <span class="missing_alert text-danger" id="username_alert"></span>    
                        </div>
                    </div>
                    <div class="md-form row">
                        <div class="col-md-10 offset-md-1">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Introduce la contraseña" autocomplete="current-password">

                           <span class="missing_alert text-danger" id="password_alert"></span>
                        </div>
                   </div>
                    <div class="md-form row mb-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn blue darken-4 form-control">
                                <i class="fas fa-sign-in-alt text-white" id="ajax-icon"></i> <span class="text-white ml-3">{{ __('Iniciar Sesión') }}</span>
                            </button>                           
                        </div>
                    </div>
                </form>
              </div>
              <div class="text-center mt-3 ml-5">
                 <p>&copy; 2019 Todos los derechos reservados.</a></p>
              </div>
          </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/admin/auth/login.js') }}"></script>
@endpush
