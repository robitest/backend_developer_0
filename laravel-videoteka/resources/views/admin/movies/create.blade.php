@extends('admin.layout.master')

@section('page-title', 'Novi Film')

@section('content')
    <div class="title flex-between">
        <h1>Dodaj novi Film</h1>
    </div>
    
    <hr>

    <form class="p-4" action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div class="row mt-3">
            <div class="col-1">
                <label for="title" class="mt-1">Naslov</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" value="{{ old('title') }}" required>
                @error('title')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1">
                <label for="year" class="mt-1">Godina</label>
            </div>
            <div class="col-6">
                <input type="text" class="form-control" @error('year') is-invalid @enderror id="year" name="year" value="{{old('year')}}" required>
                @error('year')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1">
                <label for="genre_id" class="mt-1">Žanr</label>
            </div>
            <div class="col-6">
                <select class="form-select form-select mb-2" id="genre_id" name="genre_id">
                    <option selected>Odaberi</option>
                        @foreach($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                        @endforeach 
                </select>
                @error('genre_id')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1">
                <label for="price_id" class="mt-1">Tip filma</label>
            </div>
            <div class="col-6">
                <select class="form-select form-select mb-2" id="price_id" name="price_id">
                    <option selected >Odaberi</option>
                        @foreach($prices as $price)
                            <option value="{{$price->id}}">{{$price->type}}</option>
                        @endforeach
                </select>
                @error('price_id')
                    <span class="text-danger small">{{$message}}</span>
                @enderror
            </div>
        </div>
        {{-- <hr>
        @foreach($formats as $format)
            @php($formatType = strtolower($format->type))
            <div class="row mt-3">
                <div class="col-1">
                    <label for="{{$formatType}}" class="mt-1">{{$format->type}} količina</label>
                </div>
                <div class="col-6">
                    <input type="number" step="1" class="form-control" id="{{$formatType}}" name="{{$formatType}}" value="{{old($formatType)}}">
                    @error($formatType)
                        <span class="text-danger small">{{$message}}</span>
                    @enderror
                </div>
            </div>
        @endforeach --}}
        <hr>
        <div class="col-auto">
            <div class="col-12 d-flex mt-4 justify-content-between">
                <a href="{{ route('movies.index') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Povratak"><i class="bi bi-arrow-return-left"></i></a>
                <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Spremi"><i class="bi bi-floppy"></i></button>
            </div>
        </div>
    </form>
@endsection