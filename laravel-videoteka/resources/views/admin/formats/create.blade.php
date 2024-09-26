@extends('admin.layout.master')

@section('page-title', 'Novi Medij')

@section('content')

    <div class="title flex-between">
        <h1>Novi Medij</h1>
    </div>
    <hr>

    <form class="row g-3 mt-3" action="{{ route('formats.store') }}" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="format_type" class="form-label">Tip Medija</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="formatType" name="format_type" placeholder="Tip Medija" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="format_coefficient" class="form-label">Koeficijent</label>
            <input type="number" step="0.01" class="form-control @error('coefficient') is-invalid @enderror" id="lateFee" name="format_coefficient" placeholder="Tip Medija" value="{{ old('coefficient') }}">
            @error('coefficient')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <hr>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('formats.index') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Povratak"><i class="bi bi-arrow-return-left"></i></a>
            <button class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Spremi"><i class="bi bi-floppy"></i></button>
        </div>
    </form>

@endsection