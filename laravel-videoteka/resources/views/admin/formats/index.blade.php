@extends('admin.layout.master')

@section('page-title', 'Mediji')


@section('content')
    
    <div class="title flex-between">
        <div class="">
            <h1>Mediji</h1>
        </div>
        <div class="action-buttons">
            <a href="{{ route('formats.create') }}" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Br</th>
                <th>Tip Medija</th>
                <th>Koeficijent</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formats as $format)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('formats.show', $format->id) }}" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Pogledaj Medij">{{{ $format->type }}}</a></td>
                    <td>{{{ $format->coefficient }}}</td> 
                    <td>
                        <a href="{{ route('formats.edit', $format->id) }}" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Uredi Medij"><i class="bi bi-pencil"></i></a>
                        <form id="delete-form" class="hidden d-inline" method="POST" action="{{ route('formats.destroy', $format->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Obriši Medij"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection