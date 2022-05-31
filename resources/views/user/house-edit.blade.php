@extends('layouts.app')

@section('content')

   @php
   $id = Auth::id();
   @endphp

   <div class="container mt-4 py-5">

      Edit appartamento n {{ $house->id }}

      <form action="{{ route('user.houses.update', $house) }}" method="POST">
         @csrf
         @method('PUT')

         @php
            // dd($house);
            // $house = request()->house;
         @endphp

         <input type="hidden" name="user_id" id="user_id" value="{{ $id }}">

         {{-- title --}}
         <div class="form-group">
            <label for="title">House title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Insert House title"
               value="{{ $house->title }}">
         </div>

         {{-- rooms --}}
         <div class="form-group">
            <label for="room_num">Rooms Number</label>
            <input type="number" class="form-control" name="room_num" id="room_num" value="{{ $house->room_num }}">
         </div>

         {{-- beds --}}
         <div class="form-group">
            <label for="beds_num">Beds Number</label>
            <input type="number" class="form-control" name="beds_num" id="beds_num" value="{{ $house->beds_num }}">
         </div>

         {{-- toilets --}}
         <div class="form-group">
            <label for="toilets_num">Toilets Number</label>
            <input type="number" class="form-control" name="toilets_num" id="toilets_num"
               value="{{ $house->toilets_num }}">
         </div>

         {{-- square meters --}}
         <div class="form-group">
            <label for="square_meters">Square Meters</label>
            <input type="number" class="form-control" name="square_meters" id="square_meters"
               value="{{ $house->square_meters }}">
         </div>

         {{-- position id --}}
         <div class="form-group">
            {{-- <label for="position_id">Position id</label> --}}
            <input hidden type="number" class="form-control" name="position_id" id="position_id"
               value="{{ $house->position_id }}">
         </div>

         {{-- image --}}
         <div class="form-group">
            <label for="image">House image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Insert House image url"
               value="{{ $house->image }}">
         </div>

         {{-- cost per night --}}
         <div class="form-group">
            <label for="cost_per_night">Cost per night</label>
            <input type="number" class="form-control" name="cost_per_night" id="cost_per_night"
               value="{{ $house->cost_per_night }}">
         </div>


         {{-- services --}}
         <label>Services</label>
         <div class="d-flex" style="gap: 1rem;">
            @foreach ($services as $service)
               <div class="form-group form-check">
                  <input type="checkbox" {{ $house->services->contains($service) ? 'checked' : '' }}
                     class="form-check-input" value="{{ $service->id }}" name="services[]"
                     id="services-{{ $service->id }}">
                  <label class="form-check-label" for="services-{{ $service->id }}">{{ $service->name }}</label>
               </div>
            @endforeach
         </div>
         @error('services.*')
            <div class="text-danger">'The selected service is invalid</div>
         @enderror

         {{-- Is visible --}}
         <div class="form-group">
            <label for="is_visible">Visibilità</label>
            <select class="form-control @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible">
               <option {{ old('is_visible') == $house->is_visible ? 'selected' : '' }} value="1">Visibile</option>
               <option {{ old('is_visible') == $house->is_visible ? 'selected' : '' }} value="0">Non visibile</option>
            </select>

            @error('is_visible')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- create btn --}}
         <button class="btn btn-primary" type="submit">
            Aggiorna dati Appartamento
         </button>

         @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
         @endif

      </form>
   </div>
@endsection
