@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>
        {{ $pilot -> firstname }}
        -
        {{ $pilot -> lastname }}
        :
      </h1>
      <ul>
        @foreach ($pilot -> cars as $car)
          <li class='li_border'>
               {{ $car -> name }}
               -> Model :
               {{ $car -> model }}
               <br>kW
               {{ $car -> kW }}
               <br>
               Brand
               {{ $car -> brand -> name }}
          </li>
        @endforeach
    </ul>
    </div>
@endsection
