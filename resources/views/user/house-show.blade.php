@extends('layouts.app')

@section('content')


   <div class="container py-5 my-5">

      

      <h1>Visualizzazioni Appartamento</h1>

      {{-- chart js static experiment NON TOCCARE PLS --}}

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
                    label: "Visualizzazioni",
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
      {{-- <form action="{{ route('user.messages.store') }}" method="post">
         @csrf

         @php
            // dd(request()->house->id);
            $houseId = request()->house->id;
         @endphp
   
         <div class="form-group">
            <label for="name">Nome*</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Inserisci il tuo nome"
               value="{{ Auth::user()->name ? Auth::user()->name : old('name')}} ">
            @error('name')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
   
         <div class="form-group">
            <label for="email">Email*</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Inserisci la tua email"
            value="{{ Auth::user()->email ? Auth::user()->email : old('email')}} ">
            @error('email')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>
   
         <div class="form-group">
            <label for="telephone">Telefono</label>
            <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Inserisci il tuo n. di telefono"
            value="{{ Auth::user()->telephone ? Auth::user()->telephone : old('telephone')}} ">
            @error('telephone')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         <div class="form-group">
            <label for="content">Messaggio</label>
            <textarea name="content" id="content" cols="30" rows="10" class="@error('content') is-invalid @enderror form-control">
               {{ old('content') }}
            </textarea>
            @error('content')
               <div class="alert alert-danger">{{ $message }}</div>
            @enderror
         </div>

         {{-- HouseId --}}
         {{-- <div class="form-group">
            <input hidden type="number" class="form-control" name="house_id" id="house_id"
               value="{{ request()->house->id }}">
         </div> --}}
   
         {{-- Submit --}}
         {{-- <button class="btn btn-outline-primary" type="submit">
            Create
         </button>
      </form> --}} 
   </div>
@endsection