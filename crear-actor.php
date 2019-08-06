<?php
require_once 'autoload.php';

if ($_POST) {
    $actorToSave = new Actor($_POST['first_name'], $_POST['last_name'], $_POST['rating']);

    $actorToSave->setFavoriteMovieId((int) $_POST['favorite_movie_id']);

    $saved = DB::saveActor($actorToSave);
}

$pageTitle = 'Crear actor';
require_once 'partials/head.php';
require_once 'partials/navbar.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2>Crear Actor</h2>
            <form method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control" placeholder="Ej: James" name="first_name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Apellido:</label>
                            <input type="text" class="form-control" placeholder="Ej: Bond" name="last_name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Rating:</label>
                            <input type="number" class="form-control" placeholder="Ej: 10" name="rating">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Pelicula favorita:</label>
                            <select class="form-control" name='favorite_movie_id'>
                                <?php $allMovies = DB::getAllMovies(); ?>
                                <?php foreach($allMovies as $movie) : ?>
                                    <option value="<?= $movie->getId() ?>"><?= $movie->getTitle() ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if (isset($saved)) : ?>
        <div class="alert <?php echo $saved ? 'alert-success' : 'alert-danger' ?>">
            <p>El actor se guardo con exito!</p>
        </div>
    <?php endif; ?>
</div>
</body>

</html>