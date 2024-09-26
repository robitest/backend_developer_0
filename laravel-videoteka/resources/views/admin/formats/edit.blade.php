@extends('admin.layout.master')

@section('page-title', 'Uredi medij za {{ $format->type }}')


@section('content')
    
    <div class="title flex-between">
        <h1>Uredi medij za {{ $format->type }}</h1>
    </div>

    <hr>

    <form class="row g-3 mt-3" method="POST" action="{{ route('formats.update', $format->id) }}">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="format_type" class="form-label">Tip Medija</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="formatType" name="format_type" value="{{ $format->type }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="format_coefficient" class="form-label">Koeficijent</label>
            <input type="number" step="0.01" class="form-control @error('coefficient') is-invalid @enderror" id="lateFee" name="format_coefficient" value="{{ $format->coefficient }}">
            @error('coefficient')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('formats.index') }}" class="btn btn-primary mb-3">Povratak</a>
            <button type="submit" class="btn btn-success mb-3">Spremi</a>
        </div>
    </form>

@endsection