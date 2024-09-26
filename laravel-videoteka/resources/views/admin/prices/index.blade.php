@extends('admin.layout.master')

@section('page-title', 'Cjenik')


@section('content')
    
<div class="title flex-between">
    <div class="">
        <h1>Cjenik</h1>
    </div>
    <div class="action-buttons">
        <a href="{{ route('prices.create') }}" type="submit" class="btn btn-primary">Dodaj novu cijenu</a>
    </div>
</div>

    <hr>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Br</th>
                <th>Tip Filma</th>
                <th>Cijena</th>
                <th>Zakasnina po danu</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($prices as $price)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('prices.show', $price->id) }}">{{ $price->type }}</a></td>
                    <td>€ {{ $price->price }}</td>
                    <td>€ {{ $price->late_fee }}</td>
                    <td>
                        <a href="{{ route('prices.edit', $price->id) }}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Uredi Cijenu"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('prices.destroy', $price->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Obrisi Cijenu"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection