<?php

require_once('controllers/add_movie.php');
require_once('controllers/update_movie.php');
require_once('controllers/delete_movie.php');
require_once('controllers/movie.php');
require_once('controllers/homepage.php');

use App\Controllers\AddMovie\AddMovie;
use App\Controllers\UpdateMovie\UpdateMovie;
use App\Controllers\DeleteMovie\DeleteMovie;
use App\Controllers\Movie\MoviePage;
use App\Controllers\Homepage\Homepage;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'movie') {
            if (isset($_GET['id'])) {
                $identifier = $_GET['id'];
                (new MoviePage())->execute($identifier);
            } else {
                throw new Exception('Aucun film trouvé');
            }
        } else if ($_GET['action'] === 'addMovie') {
            (new AddMovie())->form();
        } else if ($_GET['action'] === 'updateMovie') {
            if (isset($_GET['id'])) {
                $identifier = $_GET['id'];
                (new UpdateMovie())->form($identifier);
            } else {
                throw new Exception('Aucun formulaire disponible');
            }
        } else if ($_GET['action'] === 'deleteMovie') {
            if (isset($_GET['id'])) {
                $identifier = $_GET['id'];
                (new DeleteMovie())->execute($identifier);
            }
        }
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['action'] === 'addMovie') {
            (new AddMovie())->execute();
        } else if ($_POST['action'] === 'updateMovie') {
            (new UpdateMovie())->execute();
        }
    } else {
        (new Homepage())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require('templates/error.php');
}
