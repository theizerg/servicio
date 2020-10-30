@extends('layouts.admin')

@section('title', 'Bienvenidos')
@section('page_title', 'Inicio')
@section('page_subtitle', '')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="title text-center red-text">
				<h3>
					Datos Generales por consejo comunal
				</h3>
			</div><br>
			<h5 class="">CONSEJO COMUNAL DIOS REINA</h5>
			<div class="row">
				@include('layouts.Dios.index')
		  </div>
		<br>
		<h5 class="">CONSEJO COMUNAL TRAS LOS PASOS DEL COMANDANTE</h5>
		   <div class="row">
				@include('layouts.comandante.index')
		   </div>
			 <br>
		 <h5 class="">CONSEJO COMUNAL MARIA LIONZA</h5>
			 <div class="row">
				@include('layouts.maria.index')
	     </div>
    </div>
@endsection


@push('scripts')

  <script>
  	
  // Graphs
  var ctx = document.getElementById('myChart1')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        '0-2',
        '2-4',
        '4-6',
        '6-10'
      ],
      datasets: [{
        data: [
          '{{ $niños1 }}',
          '{{ $niños2 }}',
          '{{ $niños3 }}',
          '{{ $niños4 }}'
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#f44336',
        borderWidth: 4,
        pointBackgroundColor: '#f44336'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
  </script>
   <script>
  	
  // Graphs
  var ctx = document.getElementById('myChart2')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        '0-2',
        '2-4',
        '4-6',
        '6-10'
      ],
      datasets: [{
        data: [
          '{{ $niños5 }}',
          '{{ $niños6 }}',
          '{{ $niños7 }}',
          '{{ $niños8 }}'        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#f44336',
        borderWidth: 4,
        pointBackgroundColor: '#f44336'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
  </script>
    <script>
  	
  // Graphs
  var ctx = document.getElementById('myChart3')
  // eslint-disable-next-line no-unused-vars
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        '0-2',
        '2-4',
        '4-6',
        '6-10'
      ],
      datasets: [{
        data: [
          '{{ $niños9 }}',
          '{{ $niños10 }}',
          '{{ $niños11 }}',
          '{{ $niños12 }}'
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#f44336',
        borderWidth: 4,
        pointBackgroundColor: '#f44336'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
  </script>
@endpush


