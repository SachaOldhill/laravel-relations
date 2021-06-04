@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>Cars:</h1>
      <ul>
        @foreach ($cars as $car)
          <li class='li_border'>
             {{ $car -> name }}
             -
             {{ $car -> model }}
             :
             {{ $car -> kW }}
             <br>
             {{ $car -> brand -> name }}
           @foreach ($car -> pilots as $pilot)
             <li>
               <span>Pilot:</span>
               <a href="{{ route('pilot', $pilot -> id) }}">
                 {{ $pilot -> firstname }}
                 -
                 {{ $pilot -> lastname }}
               </a>
                 :
                 {{ $pilot -> nationality }}
                 <br>
                 {{ $pilot -> data_of_birthday }}
             </li>
           @endforeach
          </li>
        @endforeach
    </ul>
    </div>
@endsection
