<?php $title = "Filmothèque"; ?>

<?php ob_start(); ?>

<a href="index.php?action=addMovie" class="btn btn-success d-flex align-items-center justify-content-center">Ajouter un film</a>

<div class="d-flex align-items-center justify-content-center">

    <?php
    $movieCounter = 0;
    foreach ($movies as $movie) {
        $movieCounter++;
    ?>


        <div class="movies col-3 mt-5">
            <img src="public/images/<?= $movie->image; ?>" alt="Image du film <?= $movie->name; ?>" class="w-75">
            <h4>
                <?= htmlspecialchars($movie->name); ?><br>
                <?= $movie->creationDate; ?>
            </h4>
            <a href="index.php?action=movie&id=<?= $movie->identifier; ?>" class="btn btn-dark">Fiche du film</a>
            <a href="index.php?action=updateMovie&id=<?= $movie->identifier; ?>" class="btn btn-warning">Modifier</a>
            <a href="index.php?action=deleteMovie&id=<?= $movie->identifier; ?>" class="btn btn-danger">Supprimer</a>
        </div>
        <?php
        if ($movieCounter === 4) {
            echo '</div><div class="d-flex align-items-center justify-content-center">';
            $movieCounter = 0;
        }
        ?>
    <?php
    }
    ?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>