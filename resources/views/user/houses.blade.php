@extends('layouts.app')

@section('content')


<div class="container py-5 mt-5">

  <h1>Le tue case</h1>


  @foreach ($houses as $house)

  @if($house->user_id == auth::user()->id)

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$house->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$house->title}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('user.houses.show', $house)}}" class="btn btn-primary">Modifica appartamento</a>
    </div>
  </div>

  @endif

  @endforeach

</div>


@endsection