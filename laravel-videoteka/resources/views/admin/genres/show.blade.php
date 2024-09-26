@extends('admin.layout.master')

@section('page-title', $genre->name)


@section('content')
  
    <div class="title flex-between">
        <h1>Medij {{ $genre->name }}</h1>
    </div>
    
    <hr>

    <form class="row g-3 mt-3">
        <div class="col-md-12">
            <label for="genre_name" class="form-label">Tip Medija</label>
            <input type="text" class="form-control" id="genreName" name="genre_name" value="{{ $genre->name }}" disabled>
        </div>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('genres.index') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Povratak"><i class="bi bi-arrow-return-left"></i></a>
            <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Uredi Žanr"><i class="bi bi-pencil"></i></a>
        </div>
    </form>

@endsection