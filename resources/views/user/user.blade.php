@extends('layouts.app')

@section('content')
    <div class="container py-5 mt-5">

        <h1>Ciao {{ Auth::user()->name }} !</h1>

        <button class="btn btn-primary"> 
            <a class="text-white" href="{{ route('user.houses.index') }}">
            Visualizza i tuoi appartamenti</a>
        </button>
    </div>

    {{-- chart js static experiment --}}

    <div class="chart-container" style="
            position:relative;
            margin: auto;
            height: 40vh;
            width: 80vw;">
        <canvas id="chart"></canvas>
    </div>



    <script>
        var data = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [{
                label: "Dataset #1",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                borderWidth: 2,
                hoverBackgroundColor: "rgba(255,99,132,0.4)",
                hoverBorderColor: "rgba(255,99,132,1)",
                data: [65, 59, 20, 81, 56, 55, 40],
            }]
        };

        var options = {
            maintainAspectRatio: false,
            scales: {
                y: {
                    stacked: true,
                    grid: {
                        display: true,
                        color: "rgba(255,99,132,0.2)"
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        };

        new Chart('chart', {
            type: 'bar',
            options: options,
            data: data
        });
    </script>
@endsection
