<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    Pagina create house:

    <div class="container">
        <h1>Create a new house</h1>

        <form action="{{ route('user.houses.store') }}" method="post">
            @csrf

            {{-- title --}}

            <div class="form-group">
                <label for="title">House title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Insert Post title"
                    value="{{ old('title') }}">
            </div>

            {{-- rooms --}}
            <div class="form-group">
                <label for="room_num">Rooms Number</label>
                <select class="form-control" id="room_num" name="room_num">
                    <input type="number" value="{{ old('room_num') }}">
                </select>
            </div>

            {{-- beds --}}
            <div class="form-group">
                <label for="beds_num">Beds Number</label>
                <select class="form-control" id="beds_num" name="beds_num">
                    <input type="number" value="{{ old('beds_num') }}">
                </select>
            </div>

            {{-- toilets --}}
            <div class="form-group">
                <label for="toilets_num">Toilets Number</label>
                <select class="form-control" id="toilets_num" name="toilets_num">
                    <input type="number" value="{{ old('toilets_num') }}">
                </select>
            </div>

            {{-- square meters --}}
            <div class="form-group">
                <label for="square_meters">Square Meters</label>
                <select class="form-control" id="square_meters" name="square_meters">
                    <input type="number" value="{{ old('square_meters') }}">
                </select>
            </div>

            {{-- position???? --}}
            <h4>------------>Manca il form Position?? boh aiuto<-----------</h4> 

            {{-- image --}}

            <div class="form-group">
                <label for="image">House image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Insert House image url"
                    value="{{ old('image') }}">
            </div>

            {{-- cost per night --}}

            <div class="form-group">
                <label for="cost_per_night">Cost per night</label>
                <select class="form-control" id="cost_per_night" name="cost_per_night">
                    <input type="number" value="{{ old('cost_per_night') }}">
                </select>
            </div>


            {{-- services --}}
            <label>Services</label>
            <div class="d-flex" style="gap: 1rem;">
                @foreach ($services as $service)
                    <div class="form-group form-check">
                        <input type="checkbox" {{ $house->services->contains($service) ? 'checked' : '' }}
                            class="form-check-input" value="{{ $service->id }}" name="services[]"
                            id="services-{{ $service->id }}">
                        <label class="form-check-label" for="services-{{ $service->id }}">{{ $service->name }}</label>
                    </div>
                @endforeach
            </div>
            @error('services.*')
                <div class="text-danger">'The selected service is invalid</div>
            @enderror



            {{-- create btn --}}
            <button class="btn btn-primary" type="submit">
                Create
            </button>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>

</body>

</html>
