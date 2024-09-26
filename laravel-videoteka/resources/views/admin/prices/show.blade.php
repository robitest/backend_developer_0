@extends('admin.layout.master')

@section('page-title', $price->title)


@section('content')
    
    <div class="title flex-between">
        <h1>Cijena za {{ $price->type }}</h1>
    </div>

    <hr>
    
    <form class="row g-3 mt-3">
        <div class="col-md-4">
            <label for="type" class="form-label">Tip Filma</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $price->type }}" disabled>
        </div>
        <div class="col-md-4">
            <label for="price" class="form-label">price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $price->price }}" disabled>
        </div>
        <div class="col-md-4">
            <label for="late_fee" class="form-label">Zakasnina</label>
            <input type="number" step="0.01" class="form-control" id="late_fee" name="late_fee" value="{{ $price->late_fee }}" disabled>
        </div>
        <div class="col-12 d-flex mt-4 justify-content-between">
            <a href="{{ route('prices.index') }}" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Povratak"><i class="bi bi-arrow-return-left"></i></a>
            <a href="{{ route('prices.edit', $price->id) }}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Uredi Cijenu"><i class="bi bi-pencil"></i></a>
        </div>
    </form>

@endsection