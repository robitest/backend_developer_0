@extends('admin.layout.master')

@section('page-title', 'Cjenik')


@section('content')
    
    <div class="title flex-between">
        <div class="">
            <h1>Članovi</h1>
        </div>
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?= $message['type'] ?> alert-dismissible fade show" role="alert">
                <?= $message['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="action-buttons">
            <a href="/members/create" type="submit" class="btn btn-primary">Dodaj novi</a>
        </div>
    </div>

    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ime</th>
                <th>Adresa</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Clanski broj</th>
                <th class="table-action-col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $member): ?>
                <tr>
                    <td><?= $member['id'] ?></td>
                    <td>
                        <a href="/members/show?id=<?= $member['id'] ?>">
                            <?= $member['ime'] ?> <?= $member['prezime'] ?>
                        </a>
                    </td>
                    <td><?= $member['adresa'] ?></td>
                    <td><?= $member['telefon'] ?></td>
                    <td><?= $member['email'] ?></td>
                    <td><?= $member['clanski_broj'] ?></td>
                    <td>
                        <a href="/members/edit?id=<?= $member['id'] ?>" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit Member"><i class="bi bi-pencil"></i></a>
                        <form action="/members/destroy" method="POST" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?= $member['id'] ?>">
                            <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete Member"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

@endsection