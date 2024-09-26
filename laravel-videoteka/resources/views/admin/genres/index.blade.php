@extends('admin.layout.master')

@section('page-title', 'Žanrovi')


@section('content')
    
    <div class="title flex-between">
        <div class="">
            <h1>Žanrovi</h1>
        </div>
        <div class="action-buttons">
            <a href="{{ route('genres.create') }}" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Br</th>
                <th>Žanr</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('genres.show', $genre->id) }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Pogledaj Žanr">{{{ $genre->name }}}</a></td>
                    <td>
                        <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Uredi Žanr"><i class="bi bi-pencil"></i></a>
                        <form id="delete-form" class="hidden d-inline" method="POST" action="{{ route('genres.destroy', $genre->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Obriši Žanr"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection