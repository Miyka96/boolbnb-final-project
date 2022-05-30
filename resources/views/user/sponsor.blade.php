@extends('layouts.app')

@section('content')

<h1 class="text-center py-5 mt-5">Sponsorizzazioni:</h1>

<div class="container-fluid d-flex justify-content-center">
    
@foreach ($sponsorship as $sponsor)

<form 
{{-- action="{{ route('') }}"  --}}
method="post">

  @csrf

  <div class="card px-4 mx-4" style="width: 18rem;">
    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
    <div class="card-body">
      <h5 class="card-title">{{$sponsor->name}}</h5>
      {{-- qui bisogna fixare la visualizzazione della durata: passare da visualizzazione ore a giorni. Serve Carbon? --}}
      <p class="card-text">Durata: {{$sponsor->duration}}</p>
      <p class="card-text">Prezzo: {{$sponsor->price}}</p>

      <button class="btn btn-primary" type="submit">Acquista</button>
    </div>
  </div>


</form>


@endforeach

</div>


@endsection