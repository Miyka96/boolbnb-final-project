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




        if (element.classList[1] == undefined) {
            element.classList.add('sponsor_' + i + '_border');
        } else {
            element.classList.replace(element.classList[1], 'sponsor_' + i + '_border');
        }

        if (button.classList[1] == undefined) {
            button.classList.add('sponsor_' + i + '_bg_after');
        } else {
            button.classList.replace(button.classList[1], 'sponsor_' + i + '_bg_after');
        }

    };

    function paymentHide() {
        var element = document.getElementById('box_cc');

        element.classList.replace(element.classList[1], 'display_none');

    };
</script>

@section('content')
    <div class="sponsorship_page">
        <h1 class="text-center">Porta più visitatori al tuo appartamento</h1>
        <div class="card_wrapper">

            @foreach ($sponsorship as $sponsor)
                <div class="card">
                    <div class="box @php echo 'sponsor_'.($i).'_bg'  @endphp">
                        <div class="content">
                            {{-- contatore numero in bg --}}
                            <h2>{{ $i }}</h2>

                            <i class="@php echo $cards[($j)]['icon']; $j++; @endphp"></i>

                            <h1>{{ $sponsor->name }}</h1>
                            <h3>{{ $sponsor->price }} €</h3>

                            {{-- formattazione data --}}
                            <p>@php
                                $ore = explode(':', $sponsor->duration);
                                echo $giorni = floor($ore[0] / 24);
                                if ($giorni == 1) {
                                    echo ' Giorno';
                                } else {
                                    echo ' Giorni';
                                }
                            @endphp </p>

                            <a onclick="paymentDisplay(@php
                                echo $i;
                                $i++;
                            @endphp)" href="#">Start Sponsorship</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="container display_none" id="box_cc">
            <div class="close">
                <i onclick="paymentHide()" class="fa-regular fa-circle-xmark"></i>
            </div>
            <script src="https://js.braintreegateway.com/web/dropin/1.33.2/js/dropin.js"></script>

            <div id="dropin-container"></div>
            <button id="submit-button" class="button button--small button--green">Purchase</button>
        </div>

    </div>
    <script>
        var button = document.querySelector('#submit-button');
        braintree.dropin.create({
            authorization: "{{ \Braintree\ClientToken::generate() }}",
            container: '#dropin-container'
        }, function(createErr, instance) {
            button.addEventListener('click', function() {
                instance.requestPaymentMethod(function(err, payload) {
                    $.get('{{ route('payment.make') }}', {
                        payload
                    }, function(response) {
                        if (response.success) {
                            alert('Payment successfull!');
                            axios
                                .post("'/sponsor/send/SPONSOR-ID", this.visual_data)
                                .then((res) => {
                                    console.log(res.data);
                                })
                                .catch((error) => {
                                    console.log(error);
                                });
                        } else {
                            alert('Payment failed');
                        }
                    }, 'json');
                });
            });
        });
    </script>
@endsection



<style>
    .button {
        cursor: pointer;
        font-weight: 500;
        left: 3px;
        line-height: inherit;
        position: relative;
        text-decoration: none;
        text-align: center;
        border-style: solid;
        border-width: 1px;
        border-radius: 3px;
        -webkit-appearance: none;
        -moz-appearance: none;
        display: inline-block;
    }

    .button--small {
        padding: 10px 20px;
        font-size: 0.875rem;
    }

    .button--green {
        outline: none;
        background-color: #64d18a;
        border-color: #64d18a;
        color: white;
        transition: all 200ms ease;
    }

    .button--green:hover {
        background-color: #8bdda8;
        color: white;
    }
</style>
