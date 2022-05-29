@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Ciao {{ Auth::user()->name }} !</h1>
   
    <button class="btn btn-primary">  <a class="text-white" href="{{ route('user.houses.index') }}">Visualizza i tuoi appartamenti</a></button>
</div>

@endsection