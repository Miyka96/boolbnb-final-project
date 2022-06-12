@extends('layouts.app')

@section('content')

   @php
   $id = Auth::id();
   @endphp

   <div class="container-fluid mt-5 pt-5 house-edit">

      <h1>Modifica l'appartamento n {{ $house->id }}</h1>


      <form class="pt-1" action="{{ route('user.houses.update', $house) }}" method="POST" id="create-house-form">
         @csrf
         @method('PUT')

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
               value="{{ $house->title }}"
            >
            <div id="title-error"></div>
         </div>

      <div class="flex-piccolo flex-wrap d-flex justify-content-between">
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
               placeholder="Inserisci il numero di camere"
               value="{{ $house->room_num }}"
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
               placeholder="Inserisci il numero di posti letto"
               value="{{ $house->beds_num }}"
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
               placeholder="Inserisci il numero di bagni"
               value="{{ $house->toilets_num }}"
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
               placeholder="Inserisci il numero di metri quadri"
               value="{{ $house->square_meters }}"
            >
            <div id="square_meters-error"></div>
         </div>

      </div>

         {{-- Position id --}}
         <div class="form-group">
            <input
               type="number"
               class="@error('position_id') is-invalid @enderror form-control"
               name="position_id"
               id="position_id"
               hidden
               required
               min="1"
               value="{{ $house->position_id }}"
            >
            @error('position_id')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- Url immagine --}}
         <div class="form-group">
            <label for="image">Immagine</label>
            <input
               type="url"
               class="form-control"
               name="image"
               id="image"
               required
               {{-- pattern="[/^(http|https):\/\/]" --}}
               placeholder="Inserisci l'url dell'immagine"
               value="{{ $house->image }}"
            >
            <div id="image-error"></div>
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
               value="{{ $house->cost_per_night }}"
            >
            <div id="cost_per_night-error"></div>
         </div>

         {{-- Servizi --}}
         <label>Servizi aggiuntivi</label>
         <div class="d-flex flex-wrap justify-content-between flex-medio" style="gap: 1rem;">
            @foreach ($services as $service)
               <div class="servizi form-group form-check custom-control custom-switch">
                  <input
                     type="checkbox"
                     {{ $house->services->contains($service) ? 'checked' : '' }}
                     class=" custom-control-input form-check-input"
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
               <input class="form-check-input" type="radio" name="is_visible" id="is_visible1" value="1" {{ $house->is_visible == 1 ? 'checked' : '' }}>
               <label class="form-check-label" for="is_visible1">Visibile</label>
            </div>
            <div class="form-check form-check-inline d-flex">
               <input class="form-check-input" type="radio" name="is_visible" id="is_visible2" value="0" {{ $house->is_visible == 0 ? 'checked' : '' }}>
               <label class="form-check-label" for="is_visible2">Non visibile</label>
            </div>
         </div>

         {{-- create btn --}}
         <button id="house-submit" class="btn btn-primary" type="submit">
            Aggiorna informazioni
         </button>
      </form>
   </div>
@endsection
