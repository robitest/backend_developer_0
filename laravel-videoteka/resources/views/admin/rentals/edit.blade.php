@extends('admin.layout.master')

@section('page-title', 'Cjenik')


@section('content')
    
    <div class="title flex-between">
        <h1>Dodaj novi Žanr</h1>
    </div>
    
    <hr>

    <form class="row g-3 mt-3" action="/genres/update" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $rentals['id'] ?>">
        <div class="col-auto">
            <label for="zanr" class="mt-1">Naziv Žanra</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="zanr" name="zanr" value="<?= $rentals['ime'] ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Spremi</button>
        </div>
        <div class="col-auto">
            <a href="/rentals" type="submit" class="btn btn-primary">X</a>
        </div>
    </form>

@endsection