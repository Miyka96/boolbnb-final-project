@extends('layouts.app')

@section('content')
        {{-- POSITION FORM --}}
   {{-- Rileva utente --}}
   @php
      $id = Auth::id();
   @endphp
   
   <div class="container-fluid pt-5 mt-5 house-create">

        {{-- HOUSE FORM --}}
        <form action="{{ route('user.houses.store') }}" method="post" id="create-house-form" enctype="multipart/form-data">
            @csrf

         <h1 class="titolo-house-create">Aggiungi una nuova casa</h1>

            <div id="search">
                <geo-search></geo-search>

         {{-- User id --}}
         <div class="form-group">
            <input
               type="number"
               class="form-control"
               name="user_id"
               id="user_id"
               hidden
               required
               min="1"
               value="{{ $id ? $id : null }}"
            >
         </div>

         {{-- Titolo --}}
         <div class="form-group">
            <label for="title">Titolo</label>
            <input
               type="text"
               class="form-control"
               name="title"
               id="title"
               required
               minlength="5"
               maxlength="255"
               placeholder="Inserisci il titolo"
               value="{{ old('title') }}"
            >
            <div id="title-error"></div>
         </div>



      <div class="flex-piccolo flex-wrap d-flex align-items-center justify-content-between">

         {{-- Num camere --}}
         <div class="form-group">
            <label for="room_num">Camere</label>
            <input
               type="number"
               class="form-control"
               name="room_num"
               id="room_num"
               required
               min="1"
               max="15"
               placeholder="Inserisci numero camere"
               value="{{ old('room_num') }}"
            >
            <div id="room_num-error"></div>
         </div>

         {{-- Num letti --}}
         <div class="form-group">
            <label for="beds_num">Posti letto</label>
            <input
               type="number"
               class="form-control"
               name="beds_num"
               id="beds_num"
               required
               min="1"
               max="30"
               placeholder="Inserisci numero posti letto"
               value="{{ old('beds_num') }}"
            >
            <div id="beds_num-error"></div>
         </div>

         {{-- Num bagni --}}
         <div class="form-group">
            <label for="toilets_num">Bagni</label>
            <input
               type="number"
               class="form-control"
               name="toilets_num"
               id="toilets_num"
               required
               min="1"
               max="15"
               placeholder="Inserisci numero bagni"
               value="{{ old('toilets_num') }}"
            >
            <div id="toilets_num-error"></div>
         </div>

         {{-- Metri quadrati --}}
         <div class="form-group">
            <label for="square_meters">Metri quadrati</label>
            <input
               type="number"
               class="form-control"
               name="square_meters"
               id="square_meters"
               required
               min="20"
               max="300"
               placeholder="Inserisci numero metri quadri"
               value="{{ old('square_meters') }}"
            >
            <div id="square_meters-error"></div>
         </div>
      </div>


         {{-- Url immagine --}}
         <label class="d-block">Inserisci un'immagine del tuo appartamento</label>
         <div class="form-group">
             <input id="image" type="file" name="image" class="@error('image') is-invalid @enderror">
             <div>Formati validi : jpg, jpeg, png, webp</div>
             @error('image')
                 <div class="alert alert-danger">{{ $message }}</div>
             @enderror
         </div>

         {{-- Costo per notte --}}
         <div class="form-group">
            <label for="cost_per_night">Costo per notte (&euro;)</label>
            <input
               type="number"
               class="form-control"
               name="cost_per_night"
               id="cost_per_night"
               required
               min="10"
               max="1000"
               step="0.01"
               placeholder="Inserisci il numero di metri quadri"
               value="{{ old('cost_per_night') }}"
            >
            <div id="cost_per_night-error"></div>
         </div>

         {{-- Servizi --}}
         <label>Servizi aggiuntivi</label>
         <div class="d-flex flex-wrap justify-content-between flex-medio" style="gap: 1rem;">
            @foreach ($services as $service)
                  <div class="servizi form-group form-check custom-control custom-switch">
                     <input
                        type="checkbox" {{ $house->services->contains($service) ? 'checked' : '' }}
                        class="custom-control-input form-check-input"
                        value="{{ $service->id }}"
                        name="services[]"
                        id="customSwitch1 services-{{ $service->id }}"
                     >
                     <label class="custom-control-label form-check-label" for="customSwitch1 services-{{ $service->id }}">{{ $service->name }}</label>
                  </div>
            @endforeach            
         </div>

                {{-- Visibilità --}}
                <div class="form-group">
                    <label for="is_visible">Visibilità</label>
                    <div class="form-check form-check-inline d-flex">
                        <input class="form-check-input" type="radio" name="is_visible" id="is_visible1" value="1" checked>
                        <label class="form-check-label" for="is_visible1">Visibile</label>
                    </div>
                    <div class="form-check form-check-inline d-flex">
                        <input class="form-check-input" type="radio" name="is_visible" id="is_visible2" value="0">
                        <label class="form-check-label" for="is_visible2">Non visibile</label>
                    </div>
                    {{-- <div id="cost_per_night-error"></div> --}}
                </div>

                {{-- Submit btn --}}
                <button id="house-submit" class="btn btn-primary" type="submit">
                    Aggiungi casa
                </button>

            </form>
    </div>
@endsection
