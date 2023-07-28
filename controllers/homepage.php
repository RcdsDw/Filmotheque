<?php

namespace App\Controllers\Homepage;

require_once('lib/database.php');
require_once('models/movie.php');

use App\Lib\Database\Database;
use App\Models\Movie\MovieRepository;

class Homepage {
    public function execute() {
        $movieRepository = new MovieRepository();
        $movieRepository->connection = new Database();
        $movies = $movieRepository->getMovies();

        require('templates/homepage.php');
    }
}