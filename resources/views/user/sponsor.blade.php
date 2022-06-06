@extends('layouts.app')

@php
    $cards = [
      [
        'icon' => 'fa-solid fa-bullhorn',
      ],
      [
        'icon' => 'fa-regular fa-comments',
      ],
      [
        'icon' => 'fa-solid fa-chart-line',
      ],       
    ];

    $i = 1;
    $j = 0;
    
@endphp

<script>

  function paymentDisplay(i) {
    var element = document.getElementById('box_cc');

    var button = document.getElementById('button_carta');

   
    

    if (element.classList[1]== undefined) {
      element.classList.add('sponsor_'+i+'_border');
    }
    else{element.classList.replace(element.classList[1],'sponsor_'+i+'_border');}

    if (button.classList[1]== undefined) {
      button.classList.add('sponsor_'+i+'_bg_after');
    }
    else{button.classList.replace(button.classList[1],'sponsor_'+i+'_bg_after');}

  };

  function paymentHide() {
    var element = document.getElementById('box_cc');

    element.classList.replace(element.classList[1],'display_none');

  }; 

</script>

@section('content')

{{-- <h1 class="text-center py-5">Sponsorizzazioni:</h1>

<div class="container-fluid d-flex justify-content-center">
    
@foreach ($sponsorship as $sponsor)

<form 
action="{{ route('user.sponsorship.store', $house_id) }}" 
method="post">

  @csrf 

  <div class="card px-4 mx-4" style="width: 18rem;"> 
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$sponsor->name}}</h5>
      qui bisogna fixare la visualizzazione della durata: passare da visualizzazione ore a giorni. Serve Carbon?
      <p class="card-text">Durata: {{$sponsor->duration}}</p>
      <p class="card-text">Prezzo: {{$sponsor->price}}</p>

      <button class="btn btn-primary" type="submit">Acquista</button>
    </div>
  </div>

</form>

@endforeach

</div> --}}



<div class="sponsorship_page">
  <h1 class="text-center">Porta più visitatori al tuo appartamento</h1>
  <div class="card_wrapper">

    @foreach ($sponsorship as $sponsor)

      <div class="card">
          <div class="box @php echo 'sponsor_'.($i).'_bg'  @endphp">
          <div class="content">
              {{-- contatore numero in bg --}}
              <h2>{{$i}}</h2>
              
              <i class="@php echo $cards[($j)]['icon']; $j++; @endphp"></i>

              <h1>{{$sponsor->name}}</h1>
              <h3>{{$sponsor->price}} €</h3>

              {{-- formattazione data --}}
              <p>@php $ore = explode(':',($sponsor->duration)); echo $giorni = floor($ore[0] / 24); if($giorni == 1) echo ' Giorno'; else echo ' Giorni' @endphp </p>

              <a onclick="paymentDisplay(@php echo ($i); $i++; @endphp)" href="#">Start Sponsorship</a>
          </div>
          </div>
      </div>

    @endforeach

  </div>

  <div class="container display_none" id="box_cc">
      <div class="close">
          <i onclick="paymentHide()" class="fa-regular fa-circle-xmark"></i>
      </div>
      <form class="input_wrapper" action="{{ route('user.sponsorship.store', Route::current()->parameter('house_id')) }}" method="POST">
        @csrf
          <input type="text" name="card_num" placeholder="inserisci il numero della carta">
          <input type="text" name="card_cvc" placeholder="inserisci il cvc della carta">
          <input type="text" name="card_date" placeholder="inserisci la data di scadenza della carta">
          <div class="button_wrapper d-flex justify-content-center">
              <button type="submit" id="button_carta" class="button">Start Sponsorship</button>
          </div>
      </form>
  </div>

</div>

@endsection

