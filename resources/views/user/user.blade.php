@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Ciao {{ Auth::user()->name }} !</h1>
    {{-- PS. NON SO COSA CAZZO SBAGLIO --}}
    {{-- <button class="btn btn-primary">  <a class="text-white" href="{{ route('user.houses.index', $user) }}">Visualizza i tuoi appartamenti</a></button> --}}
    <button class="btn btn-primary">  <a class="text-white" href="{{ route('user.houses.index') }}">Visualizza i tuoi appartamenti</a></button>
</div>

@endsection