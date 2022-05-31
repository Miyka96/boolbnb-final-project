@extends('layouts.app')

@section('content')

    Show/ edit appartamento {{$house->title}}

   <div class="container py-5 my-5">
      <form action="{{ route('user.messages.store') }}" method="post">
         @csrf

         @php
            // dd(request()->house->id);
            $houseId = request()->house->id;
         @endphp
   
         <div class="form-group">
            <label for="name">Nome*</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci il tuo nome"
               value="{{ old('name') }}">
            @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
   
         <div class="form-group">
            <label for="email">Email*</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Inserisci la tua email"
               value="{{ old('email') }}">
            @error('email')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
   
         <div class="form-group">
            <label for="telephone">Telefono</label>
            <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Inserisci il tuo n. di telefono"
               value="{{ old('telephone') }}">
            @error('telephone')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         <div class="form-group">
            <label for="content">Messaggio</label>
            <textarea name="content" id="content" cols="30" rows="10" class="@error('content') is-invalid @enderror form-control">
               {{ old('content') }}
            </textarea>
            @error('content')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- HouseId --}}
         <div class="form-group">
            <input hidden type="number" class="form-control" name="house_id" id="house_id"
               value="{{ request()->house->id }}">
         </div>
   
         {{-- Submit --}}
         <button class="btn btn-outline-primary" type="submit">
            Create
         </button>
      </form>
   </div>
@endsection