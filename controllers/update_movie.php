<?php

namespace App\Controllers\UpdateMovie;

require_once('lib/database.php');
require_once('models/movie.php');
require_once('controllers/image.php');

use App\Lib\Database\Database;
use App\Models\Movie\MovieRepository;
use App\Models\Movie\Movie;
use App\Controllers\ImageController\ImageController;

class UpdateMovie extends ImageController
{
    public function form($identifier)
    {
        $movieRepository = new MovieRepository();
        $movieRepository->connection = new Database();

        $getMovie = $movieRepository->getMovie($identifier);

        require_once('templates/update_movie.php');
    }

    public function execute()
    {
        $identifier = $_POST['identifier'];
        $name = $_POST['name'];
        $kind = $_POST['kind'];
        $director = $_POST['director'];
        $actor1 = $_POST['actor1'];
        $actor2 = $_POST['actor2'];
        $actor3 = $_POST['actor3'];
        $summary = $_POST['summary'];
        $creationDate = $_POST['date'];
        $duration = $_POST['duration'];

        if (!empty($_FILES['image']['name'])) {
            $validateImage = $this->uploadFile($_FILES['image'], "public/images/");
        } else {
            $validateImage = $_POST['oldImage'];
        }

        $movie = new Movie($identifier, $name, $kind, $director, $actor1, $actor2, $actor3, $summary, $creationDate, $duration, $validateImage);

        $movieRepository = new MovieRepository();
        $movieRepository->connection = new Database();

        $success = $movieRepository->updateMovie($movie);
        if (!$success) {
            throw new \Exception('Impossible d\'ajouter le film !');
        } else {
            header("Location: index.php?action=movie&id=$identifier");
        }
    }
}
