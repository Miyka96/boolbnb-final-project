@extends('layouts.app')

@php $i = 0 @endphp

@section('content')
<div class="register_page container-fluid d-flex justify-content-between">
    <div class="row banner">

        {{-- For per il banner tramite DB --}}

        {{-- 
            @for($j = 0; $j < 6; $j++)
            @if($i == 3)</div>@endif
            @if($i == 0 or $i == 3) <div class="column column_@php echo $i @endphp col-6 flex-column d-flex"> @endif
                <img src="{{$house->image}}">  <!-- Dimensioni per le immagini 325x425 -->
            @php $i++ @endphp
            @endfor
        --}}        

        @for($j = 0; $j < 12; $j++)
            @if($i == 6)@php $i=0 @endphp
            @endphp</div>@endif
            @if($i == 0 or $i == 6) <div class="column column_@php echo $j @endphp col-lg-6 col-md-12 d-flex"> @endif
                <img src="{{ asset('./images/login-'.$i.'.png') }}" alt="">            
            @php $i++ @endphp
        @endfor
        </div>  
    </div>
    <div class="row  align-items-center justify-content-center">
        <div class="col-12 d-flex align-items-center justify-content-center">

                <div class="card-body register-wrapper">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="name" class="col-form-label text-md-right">Nome</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>

                        <div class="form-group row">

                            <label for="surname" class="col-form-label text-md-right">Cognome</label>
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">

                            <label for="birthday" class="col-form-label text-md-right">Data di nascita</label>
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">

                            <label for="email" class="col-form-label text-md-right">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">

                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">

                            <label for="password-confirm" class="col-form-label text-md-right">Conferma password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="form-group row mt-4">
                            <div>
                                <button type="submit" class="button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
@endsection
