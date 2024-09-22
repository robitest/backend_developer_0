 @extends('frontend.layout.master')

 @section('content')
    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">Najpopularniji filmovi</h1>

            <ul class="list-group my-5">
                {{-- <?php foreach ($popularMovies as $movie): ?>
                    <li class="list-group-item bg-body-tertiary">
                        <?= $movie['naslov_filma'] ?> (<?= $movie['godina_filma'] ?>) - <?= $movie['zanr'] ?>
                        <span class="badge text-bg-primary float-end"><?= $movie['tip_filma']?></span>
                    </li>
                <?php endforeach ?> --}}
            </ul>

            <button class="btn btn-outline-secondary" type="button">Vidi sve!</button>
        </div>
    </div>             

    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid">
            <h1 class="display-5 fw-bold">Zanrovi</h1>

            <div class="d-grid gap-3 mt-5" style="grid-template-columns: 1fr 1fr 1fr;">
                {{-- <?php $counter = 0 ?>
                <?php foreach ($moviesByGenre as $key => $moviesInGenre): ?>
                    <?php 
                        $isEven = $counter % 2 == 0;
                        $counter++;
                    ?>
                    <div class="h-100 p-5 <?= $isEven ? 'text-bg-dark' : 'bg-body-tertiary border' ?> rounded-3">
                        <h2><?= $key ?></h2>
                        <ul class="list-group my-4">
                            <?php foreach ($moviesInGenre as $movie): ?>
                                <li class="list-group-item <?= $isEven ? 'text-bg-dark' : 'bg-body-tertiary' ?>">
                                    <?= $movie['naslov_filma'] ?> (<?= $movie['godina_filma'] ?>) - <?= $movie['zanr'] ?>
                                    <span class="badge text-bg-primary float-end"><?= $movie['tip_filma']?></span>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <button class="btn <?= $isEven ? 'btn-outline-light' : 'btn-outline-secondary' ?>" type="button">Vidi vise!</button>
                    </div>
                <?php endforeach ?> --}}
            </div>
        </div>
    </div>
@endsection