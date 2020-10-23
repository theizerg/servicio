@extends('layouts.admin')

@section('title', 'Logins')
@section('page_title', 'Registros de logins')



@section('content')

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Inicio</th>
                    <th>Cierre</th>
                    <th>IP</th>
                    <th>Cliente</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($logins as $login)
                <tr>
                  <td>{{ $login->user->name }} {{ $login->user->last_name }}</td>
                  <td>{{ $login->login_at  }}</td>
                  <td>{{ $login->logout_at }}</td>
                  <td>{{ $login->ip_address }}</td>
                  <td>{{ $login->user_agent }}</td>
                </tr>
                </tbody>
                @endforeach
              </table>
              
                  {{ $logins->links( "pagination::bootstrap-4")}}
                </div>
            </div>
          </div>
        </div>
    </section>
@endsection

@push('scripts')
  <script src="{{ asset('js/admin/login/index.js') }}"></script>
@endpush
