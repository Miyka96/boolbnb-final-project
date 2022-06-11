@extends('layouts.app')


@php

$team = [
    [
        'img' => './images/Asia.jpg',
        'name' => 'Asia De Martino',
        'linkedin' => 'https://www.linkedin.com/in/asia-de-martino/',
        'github' => 'https://github.com/AsiaDeMartino',
    ],
    [
        'img' => './images/Simone.jpg',
        'name' => 'Simone Sada',
        'linkedin' => 'https://www.linkedin.com/in/simone-sada/',
        'github' => 'https://github.com/Glabdugrib',
    ],
    [
        'img' => './images/Micaela.jpg',
        'name' => 'Micaela Seminara',
        'linkedin' => 'https://www.linkedin.com/in/micaela-seminara/',
        'github' => 'https://github.com/Miyka96',
    ],
    [
        'img' => './images/Eduardo.png',
        'name' => 'Eduardo Vaccarella',
        'linkedin' => 'https://www.linkedin.com/in/eduardo-vaccarella-152a661b9/',
        'github' => 'https://github.com/eduardoego',
    ],
];

@endphp



@section('content')
    <div class="container-fluid team_page d-flex justify-content-center align-item-center">

        <div class="row justify-content-center align-item-center">

            @foreach ($team as $item)
                <div class="col-12col-md-6 col-lg-4">
                    <div class="card-team">
                        <div class="picture">
                            <img class="img-fluid" src="{{ asset($item['img']) }}">
                        </div>
                        <div class="team-content">
                            <h3 class="name">{{ $item['name'] }}</h3>
                        </div>

                        <ul class="social-icons">
                            <li><a href="{{ $item['github'] }}"><i class="fa-brands fa-github"></i></a></li>
                            <li><a href="{{ $item['linkedin'] }}"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
