<?php

namespace App\Controllers\DeleteMovie;

require_once('lib/database.php');
require_once('models/movie.php');

use App\Lib\Database\Database;
use App\Models\Movie\MovieRepository;

class DeleteMovie
{

    public function execute($identifier)
    {

        $movieRepository = new MovieRepository();
        $movieRepository->connection = new Database();

        if ($movieRepository->deleteMovie($identifier)) {
            header("Location: index.php");
        } else {
            throw new \Exception('Impossible de supprimer le film !');
        }
    }
}
