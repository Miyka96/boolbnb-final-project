@extends('layouts.app')

@php $i = 0 @endphp

@section('content')
<div class="login_page container-fluid d-flex justify-content-between">
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
            @if($i == 6)</div>@endif
            @if($i == 0 or $i == 6) <div class="column column_@php echo $i @endphp col-lg-6 col-md-12 flex-column d-flex"> @endif
                <img src="https://picsum.photos/1080/1920" alt="">            
            @php $i++ @endphp
        @endfor
        </div>  
    </div>
                               
    <div class="row align-items-center justify-content-center">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="card-body login-wrapper">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">                        
                            <label for="email" class="col-form-label text-md-right">Email</label>
                            <input id="email" type="email" class="form-email-color form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">                                                
                            <div class='d-flex justify-content-between'>
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                @if (Route::has('password.request'))
                                <a class="btn pass-forgot" href="{{ route('password.request') }}">Password dimenticata?</a>
                                @endif
                            </div>
                            <input id="password" type="password" class="form-pass-color form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                        
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Ricordati di me
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="button">{{ __('Login') }}</button>                    
                </form>
            </div>            
        </div>
    </div>
</div>
@endsection