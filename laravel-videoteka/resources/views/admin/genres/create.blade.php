@extends('admin.layout.master')

@section('page-title', 'Novi Žanr')

@section('content')

    <div class="title flex-between">
        <h1>Novi Žanr</h1>
    </div>
    <hr>

    <form class="row g-3 mt-3" action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="genre_name" class="form-label">Žanr</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="genreName" name="genre_name" placeholder="Žanr" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <hr>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('genres.index') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Povratak"><i class="bi bi-arrow-return-left"></i></a>
            <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Spremi"><i class="bi bi-floppy"></i></button>
        </div>
    </form>

@endsection