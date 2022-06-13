@extends('layouts.app')

@section('content')
    <div class="user_houses d-flex flex-column container-fluid py-5 mt-5 ms__container-fluid">

        <h1>Le tue case</h1>
        {{-- <a class="button aggiungi align-self-center" href="{{ route('user.houses.create') }}"><span class="icon">Aggiungi casa</span><i class="text fa-solid fa-circle-plus"></i></a> --}}

        <div class="card-wrapper container-fluid d-flex align-items-start">

            <a class="aggiungi-card card  align-items-center justify-content-center"
                href="{{ route('user.houses.create') }}">
                <i class="fa-solid fa-plus"></i>
            </a>
            
            @foreach ($houses as $house)
                @if ($house->user_id == auth::user()->id)
                    <a href="/house/{{$house->id}}">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('storage/'.$house->image)}} " alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $house->title }}</h5>
                                {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                <p class="card-position">{{ $house->position->city }}</p>
                                <p class="card-price"><strong>&euro;{{ $house->cost_per_night }}</strong>/notte</p>
                            </div>

                            <div class="bottoni-card mt-2 d-flex flex-wrap">

                                <a href="{{ route('user.houses.edit', $house) }}" class="modifica button">
                                    <span class="text">Modifica</span>
                                    <i class="icon fa-solid fa-pen-to-square"></i>
                                </a>

                                <form class="elimina-form d-flex align-items-center"
                                    action="{{ route('user.houses.destroy', $house) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="elimina button" onclick="return confirm('Sicur*?')">
                                        <span class='text'>Elimina</span>
                                        <i class="fa-solid fa-x icon"></i>
                                    </button>
                                </form>

                                <a href="{{ route('user.messages.index', $house) }}" class="messaggi button">
                                    <span class="text">Visualizza messaggi</span>
                                    <i class="icon fa-solid fa-comments"></i>
                                </a>

                                <a href="{{ route('user.sponsorship.index', $house) }}" class="sponsor button">
                                    <span class="text">Sponsorizza appartamento</span>
                                    <i class="icon fa-solid fa-chart-line"></i>
                                </a>

                            </div>


                        </div>
                    </a>
                @endif
            @endforeach

        </div>

    </div>
@endsection
