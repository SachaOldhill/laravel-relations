@extends('layouts.main-layout')
@section('content')
 <div class="home_container">
   <div class="mb-4">
     <h1>New Match</h1>
   </div>
   <form method="POST" action="{{ route('store-car') }}">

     @csrf
     @method('POST')

     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="model"><h4>Model</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="model" name="model" placeholder="Model">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="name"><h4>Name</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="name" name="name" placeholder="Name">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="kW"><h4>kW</h4></label>
         <div class="col-lg-6">
           <input type="text" class="form-control" id="kW" name="kW" placeholder="kW">
         </div>
     </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="brand_id"><h4>Brand</h4></label>
          <div class="col-lg-6">
            <select class="form-control" id="brand_id" name="brand_id">
              <option selected disabled>Brand</option>
              @foreach ($brands as $brand)
                <option value="{{ $brand -> id }}">{{ $brand -> name }} ({{ $brand -> nationality }})</option>
              @endforeach
            </select>
          </div>
      </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="pilots_id[]"><h4>Pilots</h4></label>
          <div class="col-lg-6">
            <select class="form-control" id="pilots_id[]" name="pilots_id[]" required multiple>
              @foreach ($pilots as $pilot)
                <option value="{{ $pilot -> id }}">
                  {{ $pilot -> firstname }}
                  -
                  {{ $pilot -> lastname }}
                </option>
              @endforeach
            </select>
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Create Car</button>
   </form>
 </div>
@endsection
