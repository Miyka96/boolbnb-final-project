@extends('layouts.app')

@section('content')
    Pagina create house:

   @php
      $id = Auth::id();
   @endphp

   {{-- RISOLVERE PROBLEMA POSITION ID --}}

   <div class="container">

      {{-- FORM PER POSITION --}}
      <form class="py-5" action="{{ route('user.position.store') }}" method="post">
         @csrf
         {{-- address --}}
         <div class="form-group">
            <label for="address">House address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Insert house address"
               value="">
         </div>

         {{-- create btn --}}
         <button class="btn btn-primary" type="submit">
            Confirm house position
         </button>

         @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
         @endif

         @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
         @endif

         @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                     @foreach ($errors->all() as $error)
                        <li>
                           {{ $error }}
                        </li>
                     @endforeach
               </ul>
            </div>
         @endif
      </form>


      {{-- php section --}}
      @php
            // dd(Session::has('message'));
      @endphp


      {{-- FORM PER HOUSE --}}
      <form action="{{ route('user.houses.store') }}" method="post">
         @csrf
         <input type="hidden" name="user_id" id="user_id" value="{{ $id }}">
         
         {{-- title --}}
         <div class="form-group">
            <label for="title">House title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Insert House title"
               value="{{ old('title') }}">
         </div>

         {{-- rooms --}}
         <div class="form-group">
            <label for="room_num">Rooms Number</label>
            <input type="number" class="form-control" name="room_num" id="room_num" value="{{ old('room_num') }}">
         </div>

         {{-- beds --}}
         <div class="form-group">
            <label for="beds_num">Beds Number</label>
            <input type="number" class="form-control" name="beds_num" id="beds_num" value="{{ old('beds_num') }}">
         </div>

         {{-- toilets --}}
         <div class="form-group">
            <label for="toilets_num">Toilets Number</label>
            <input type="number" class="form-control" name="toilets_num" id="toilets_num"
               value="{{ old('toilets_num') }}">
         </div>

         {{-- square meters --}}
         <div class="form-group">
            <label for="square_meters">Square Meters</label>
            <input type="number" class="form-control" name="square_meters" id="square_meters"
               value="{{ old('square_meters') }}">
         </div>

         {{-- position id --}}
         <div class="form-group">
            {{-- <label for="position_id">Position id</label> --}}
            <input hidden type="number" class="form-control" name="position_id" id="position_id"
               value="{{ Session::has('positionId') ? Session::get('positionId') : '1' }}">
         </div>

         {{-- image --}}
         <div class="form-group">
            <label for="image">House image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Insert House image url"
               value="{{ old('image') }}">
         </div>

         {{-- cost per night --}}
         <div class="form-group">
            <label for="cost_per_night">Cost per night</label>
            <input type="number" class="form-control" name="cost_per_night" id="cost_per_night"
               value="{{ old('cost_per_night') }}">
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
               <option selected value="1">Visibile</option>
               <option value="0">Non visibile</option>
            </select>

            @error('is_visible')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>


         {{-- create btn --}}
         <button class="btn btn-primary" type="submit">
            Create
         </button>

         @if ($errors->any())
            <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                        <li>
                              {{ $error }}
                        </li>
                     @endforeach
                  </ul>
            </div>
         @endif

      </form>
   </div>




   <script>

         const addressInput = document.getElementById('address');

         addressInput.addEventListener('keydown', function (evt) {

            const addressInput = document.getElementById('address').value;

            axios.get(`https://api.tomtom.com/search/2/search/${addressInput}.json`,{
               params: {
                  key: 'DINngHSiTz58Z5fDF5pThkg1IrJA87je',
                  typeahead: true,
                  limit: 6
               }
            })
            
            .then( res => {
               console.log( res.data )
               this.addressList = res.data
            })
            .catch( err => {
               console.warn( err )
            })

         });

   </script>

@endsection
