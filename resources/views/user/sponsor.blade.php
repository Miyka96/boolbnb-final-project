@extends('layouts.app')

@php
    $cards = [
      [
        'icon' => 'fa-solid fa-bullhorn',
        'price' => 'Prezzo1',
        'time' => 'Durata sponsorizzazione1'
        ],
      [
        'icon' => 'fa-regular fa-comments',
        'price' => 'Prezzo2',
        'time' => 'Durata sponsorizzazione2'
        ],
      [
        'icon' => 'fa-solid fa-chart-line',
        'price' => 'Prezzo3',
        'time' => 'Durata sponsorizzazione3'
        ],       
    ];
    
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
{{-- action="{{ route('') }}"  --}}
{{-- method="post">

  @csrf

  <div class="card px-4 mx-4" style="width: 18rem;">  --}}
    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
    {{-- <div class="card-body">
      <h5 class="card-title">{{$sponsor->name}}</h5> --}}
      {{-- qui bisogna fixare la visualizzazione della durata: passare da visualizzazione ore a giorni. Serve Carbon? --}}
      {{-- <p class="card-text">Durata: {{$sponsor->duration}}</p>
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

    @foreach ($cards as $i=>$card)

      <div class="card">
          <div class="box @php echo 'sponsor_'.($i+1).'_bg'  @endphp">
          <div class="content">
              <h2>{{$i+1}}</h2>
              <i class="@php echo $card['icon'] @endphp"></i>
              <h3>{{ $card['price'] }}</h3>
              <p>{{ $card['time'] }}</p>
              <a onclick="paymentDisplay(@php echo ($i+1) @endphp)" href="#">Start Sponsorship</a>
          </div>
          </div>
      </div>

    @endforeach

  </div>

  <div class="container display_none" id="box_cc">
      <div class="close">
          <i onclick="paymentHide()" class="fa-regular fa-circle-xmark"></i>
      </div>
      <form action="" method="POST">
      <div class="input_wrapper">
          <input type="text" name="card_num" placeholder="inserisci il numero della carta">
          <input type="text" name="card_cvc" placeholder="inserisci il cvc della carta">
          <input type="text" name="card_date" placeholder="inserisci la data di scadenza della carta">
          <div class="button_wrapper d-flex justify-content-center">
              <button type="submit" id="button_carta" class="button">Start Sponsorship</button>
          </div>
      </div>
      </form>
  </div>

</div>

@endsection

