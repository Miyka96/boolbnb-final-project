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
         </div>

         {{-- Num camere --}}
         <div class="form-group">
            <label for="room_num">Camere</label>
            <input
               type="number"
               class="@error('room_num') is-invalid @enderror form-control"
               name="room_num"
               id="room_num"
               required
               min="1"
               max="15"
               placeholder="Inserisci il numero di camere"
               value="{{ $house->room_num }}"
            >
            @error('room_num')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- Num letti --}}
         <div class="form-group">
            <label for="beds_num">Posti letto</label>
            <input
               type="number"
               class="@error('beds_num') is-invalid @enderror form-control"
               name="beds_num"
               id="beds_num"
               required
               min="1"
               max="30"
               placeholder="Inserisci il numero di posti letto"
               value="{{ $house->beds_num }}"
            >
            @error('beds_num')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- Num bagni --}}
         <div class="form-group">
            <label for="toilets_num">Bagni</label>
            <input
               type="number"
               class="@error('toilets_num') is-invalid @enderror form-control"
               name="toilets_num"
               id="toilets_num"
               required
               min="1"
               max="15"
               placeholder="Inserisci il numero di bagni"
               value="{{ $house->toilets_num }}"
            >
            @error('toilets_num')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- Metri quadrati --}}
         <div class="form-group">
            <label for="square_meters">Metri quadrati</label>
            <input
               type="number"
               class="@error('square_meters') is-invalid @enderror form-control"
               name="square_meters"
               id="square_meters"
               required
               min="20"
               max="300"
               placeholder="Inserisci il numero di metri quadri"
               value="{{ $house->square_meters }}"
            >
            @error('square_meters')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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
               class="@error('image') is-invalid @enderror form-control"
               name="image"
               id="image"
               required
               {{-- pattern="[/^(http|https):\/\/]" --}}
               placeholder="Inserisci l'url dell'immagine"
               value="{{ $house->image }}"
            >
            @error('image')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- Costo per notte --}}
         <div class="form-group">
            <label for="cost_per_night">Costo per notte (&euro;)</label>
            <input
               type="number"
               class="@error('cost_per_night') is-invalid @enderror form-control"
               name="cost_per_night"
               id="cost_per_night"
               required
               min="10"
               max="1000"
               step="0.01"
               placeholder="Inserisci il numero di metri quadri"
               value="{{ $house->cost_per_night }}"
            >
            @error('cost_per_night')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- Servizi --}}
         <label>Servizi aggiuntivi</label>
         <div class="d-flex" style="gap: 1rem;">
            @foreach ($services as $service)
               <div class="form-group form-check">
                  <input
                     type="checkbox"
                     {{ $house->services->contains($service) ? 'checked' : '' }}
                     class="form-check-input"
                     value="{{ $service->id }}"
                     name="services[]"
                     id="services-{{ $service->id }}"
                  >
                  <label class="form-check-label" for="services-{{ $service->id }}">{{ $service->name }}</label>
               </div>
            @endforeach
         </div>
         @error('services.*')
            <div class="text-danger">Il servizio selezionato non è corretto.</div>
         @enderror

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
         <button class="btn btn-primary" type="submit">
            Aggiorna informazioni casa
         </button>
      </form>
   </div>
@endsection
