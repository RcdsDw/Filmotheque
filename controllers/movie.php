<?php

namespace App\Controllers\Movie;

require_once('lib/database.php');
require_once('models/movie.php');

use App\Lib\Database\Database;
use App\Models\Movie\MovieRepository;


class MoviePage {
        public function execute($identifier) {
        $movieRepository = new MovieRepository();
        $movieRepository->connection = new Database();
        $movie = $movieRepository->getMovie($identifier);

        require('templates/movie.php');
    }
}