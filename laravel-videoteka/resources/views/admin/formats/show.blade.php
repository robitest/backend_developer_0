@extends('admin.layout.master')

@section('page-title', $format->type)


@section('content')
  
    <div class="title flex-between">
        <h1>Medij {{ $format->type }}</h1>
    </div>
    
    <hr>

    <form class="row g-3 mt-3">
        <div class="col-md-4">
            <label for="format_id" class="form-label">Id</label>
            <input type="number" class="form-control" id="formatId" name="format_id" value="{{ $format->id }}" disabled>
        </div>
        <div class="col-md-4">
            <label for="format_type" class="form-label">Tip Medija</label>
            <input type="text" class="form-control" id="formatType" name="format_type" value="{{ $format->type }}" disabled>
        </div>
        <div class="col-md-4">
            <label for="format_coefficient" class="form-label">Koeficijent</label>
            <input type="number" class="form-control" id="formatCoefficient" name="format_coefficient" value="{{ $format->coefficient }}" disabled>
        </div>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('formats.index') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Povratak"><i class="bi bi-arrow-return-left"></i></a>
            <a href="{{ route('formats.edit', $format->id) }}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Uredi Medij"><i class="bi bi-pencil"></i></a>
        </div>
    </form>

@endsection