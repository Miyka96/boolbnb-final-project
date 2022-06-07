@extends('layouts.app')

@section('content')
    <div class="container-fluid reset_password_page d-flex flex-column justify-content-center align-items-center">

        <i class="icon fa-solid fa-envelope"></i>
        <div class="reset_wrapper d-flex flex-column align-items-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <label for="email" class="col-form-label text-md-right d-flex flex-column align-items-center justify-content-center">
                    <h1>Password dimenticata?</h1>
                </label>

                <input placeholder="Inserisci l'e-mail con cui hai effettutato la registrazione" id="email" type="email" class="placeholder_xl form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <input placeholder="Inserisci l'e-mail" id="email" type="email" class="placeholder_sm form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </form>

            <button type="submit" class="button btn btn-primary">
                Invia
            </button>

        </div>

    </div>
@endsection
