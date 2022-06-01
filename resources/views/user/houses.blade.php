@extends('layouts.app')

@section('content')


<div class="container py-5 mt-5">

  <h1>Le tue case</h1>

  @foreach ($houses as $house)

   @if($house->user_id == auth::user()->id)

      <a href="{{ route('user.houses.show', $house) }}">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$house->image}}" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">{{$house->title}}</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               <a href="{{ route('user.houses.edit', $house) }}" class="btn btn-outline-primary">Modifica appartamento</a>
               <a href="{{ route('user.messages.index', $house) }}" class="btn btn-outline-primary">Visualizza messaggi appartamento</a>
               <form action="{{ route('user.houses.destroy', $house) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  
                  <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Sicur*?')">Elimina appartamento</button>
               </form> 
            </div>
         </div>
      </a>

   @endif

  @endforeach

</div>


@endsection