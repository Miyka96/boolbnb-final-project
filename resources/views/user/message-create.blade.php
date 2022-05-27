<div class="container">

    <h1>Nuovo messaggio</h1>

    <form action="{{ route('user.messages.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="name">Nome completo*</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                value="{{ old('name') }}" placeholder="Inserisci nome e cognome...">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">E-mail*</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                value="{{ old('email') }}" placeholder="Inserisci indirizzo e-mail...">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="telephone">Numero di telefono*</label>
            <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" id="telephone"
                value="{{ old('telephone') }}" placeholder="Inserisci numero di telefono...">
            @error('telephone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Messaggio*</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3"
                placeholder="Inserisci testo...">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
