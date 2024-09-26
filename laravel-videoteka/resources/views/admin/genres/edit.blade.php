@extends('admin.layout.master')

@section('page-title', 'Uredi žanr za {{ $genre->name }}')


@section('content')
    
    <div class="title flex-between">
        <h1>Uredi žanr za {{ $genre->name }}</h1>
    </div>

    <hr>

    <form class="row g-3 mt-3" method="POST" action="{{ route('genres.update', $genre->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="genre_name" class="form-label">Žanr</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="genreName" name="genre_name" value="{{ $genre->name }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('genres.index') }}" class="btn btn-primary mb-3">Povratak</a>
            <button type="submit" class="btn btn-success mb-3">Spremi</a>
        </div>
    </form>

@endsection