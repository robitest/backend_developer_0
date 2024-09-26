@extends('admin.layout.master')

@section('page-title', 'Nova Cijena')

@section('content')
    <div class="title flex-between">
        <h1>Nova Cijena</h1>
        <div class="action-buttons">
            <a href="{{ route('prices.create') }}" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <hr>

    <form class="row g-3 mt-3" method="POST" action="{{ route('prices.store') }}">
        @csrf
        <div class="col-md-4">
            <label for="type" class="form-label">Tip Cijene</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Tip Filma" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label">Cijena</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Cijena" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="late_fee" class="form-label">Zakasnina</label>
            <input type="number" step="0.01" class="form-control @error('late_fee') is-invalid @enderror" id="late_fee" name="late_fee" placeholder="Zakasnina" value="{{ old('late_fee') }}">
            @error('late_fee')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('rentals.index') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Povratak"><i class="bi bi-arrow-return-left"></i></a>
            <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Spremi"><i class="bi bi-floppy"></i></button>
        </div>
    </form>
    
@endsection