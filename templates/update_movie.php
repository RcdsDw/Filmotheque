<?php $title = 'Modifier le film'; ?>

<?php ob_start(); ?>

<div class="d-flex align-items-center justify-content-center flex-column">
    <h2 class="mb-3">Modifer le film</h2>
    <a href="index.php" class="btn btn-success w-25 mb-5">Retour à l'accueil</a>
</div>
<form action="index.php" method="post" enctype="multipart/form-data" class="form">
    <input type="hidden" name="identifier" value="<?= $getMovie->identifier ?>">
    <input type="hidden" name="action" value="updateMovie">

    <div class="d-flex align-items-center justify-content-center flex-column">
        <div class="form-floating mb-3 w-50">
            <input class="form-control" placeholder="Exemple : Usual Suspects" id="name" name="name" type="text" value="<?= $getMovie->name ?>"></input>
            <label for="name">Titre</label>
        </div>
        <div class="form-floating mb-3 w-50">
            <textarea class="form-control" placeholder="Exemple : Lorem ipsum..." id="summary" name="summary"><?= $getMovie->summary ?></textarea>
            <label for="summary">Résumé</label>
        </div>
        <div class="form-floating mb-3 w-50">
            <input class="form-control" placeholder="Exemple : Horreur/Romantique" id="kind" name="kind" type="text" value="<?= $getMovie->kind ?>"></input>
            <label for="kind">Genre</label>
        </div>
        <div class="form-floating mb-3 w-50">
            <input class="form-control" placeholder="Exemple : -492 Avant JC" id="date" name="date" type="text" value="<?= $getMovie->creationDate ?>"></input>
            <label for="date">Date de sortie</label>
        </div>
        <div class="form-floating mb-3 w-50">
            <input class="form-control" placeholder="10:26" id="duration" name="duration" type="text" value="<?= $getMovie->duration ?>"></input>
            <label for="duration">Durée</label>
        </div>
        <div class="form-floating w-50">
            <input class="form-control" placeholder="Exemple : Jean Dujardin" id="director" name="director" type="text" value="<?= $getMovie->director ?>"></input>
            <label for="director">Réalisateur</label>
        </div>
        <div class="d-flex flex-row">
            <div class="form-floating d-flex m-3">
                <input class="form-control" placeholder="Exemple : Robert De Niro" id="actor1" name="actor1" type="text" value="<?= $getMovie->actor1 ?>"></input>
                <label for="actor1">Acteur n°1</label>
            </div>
            <div class="form-floating d-flex m-3">
                <input class="form-control" placeholder="Exemple : Omar Sy" id="actor2" name="actor2" type="text" value="<?= $getMovie->actor2 ?>"></input>
                <label for="actor2">Acteur n°2</label>
            </div>
            <div class="form-floating d-flex m-3">
                <input class="form-control" placeholder="Exemple : Christian Clavier" id="actor3" name="actor3" type="text" value="<?= $getMovie->actor3 ?>"></input>
                <label for="actor3">Acteur n°3</label>
            </div>
        </div>
        <div class="form-floating mb-3 w-50">
            <input class="form-control" placeholder="Exemple : Image du film : Qu'est ce qu'on a fait à la tranche de jambon" id="image" name="image" type="file"></input>
            <input type="hidden" id="oldImage" name="oldImage" value="<?= $getMovie->image ?>">
            <img src="public/images/<?= $getMovie->image ?>" alt="Ancienne Image">
            <label for="image">Affiche du film</label>
        </div>
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>