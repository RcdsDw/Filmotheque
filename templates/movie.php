<?php $title = $movie->name; ?>

<?php ob_start(); ?>

<div class="d-flex align-items-center justify-content-center flex-column mt-3">

    <a href="index.php" class="btn btn-success w-25 mb-5">Retour à l'accueil</a>

    <div class="movie d-flex align-items-center justify-content-center flex-column w-75">
        <img src="public/images/<?= $movie->image ?>" alt="Image du film <?= $movie->name ?>">
        <h3>
            <?= htmlspecialchars($movie->name) ?><br>
            <?= htmlspecialchars($movie->kind) ?><br>
            <?= $movie->creationDate ?>
        </h3>

        <p class="w-50">
            Temps : <?= htmlspecialchars($movie->duration) ?><br>
            Synopsis : <?= nl2br(htmlspecialchars($movie->summary)) ?>
        </p>

        <p>
            Réalisateur : <?= htmlspecialchars($movie->director) ?><br>
            Acteurs Principaux : <?= htmlspecialchars($movie->actor1) ?>, <?= htmlspecialchars($movie->actor2) ?>, <?= htmlspecialchars($movie->actor3) ?>
        </p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>