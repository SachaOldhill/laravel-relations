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
               -
               {{ $car -> model }}
               :
               {{ $car -> kW }}
               <br>
               {{ $car -> brand -> name }}
          </li>
        @endforeach
    </ul>
    </div>
@endsection
