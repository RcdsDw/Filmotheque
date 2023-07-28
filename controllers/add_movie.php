<?php 

namespace App\Controllers\AddMovie;

require_once('lib/database.php');
require_once('models/movie.php');
require_once('controllers/image.php');

use App\Lib\Database\Database;
use App\Models\Movie\MovieRepository;
use App\Models\Movie\Movie;
use App\Controllers\ImageController\ImageController;

class AddMovie extends ImageController {

    public function form() {
        require_once('templates/add_movie.php');
    }

    public function execute() {

        $name = $_POST['name'];
        $kind = $_POST['kind'];
        $director = $_POST['director'];
        $actor1 = $_POST['actor1'];
        $actor2 = $_POST['actor2'];
        $actor3 = $_POST['actor3'];
        $summary = $_POST['summary'];
        $creationDate = $_POST['date'];
        $duration = $_POST['duration'];
        $image = $_FILES['image'];

        // Création d'un objet movie
        $movie = new Movie(0, $name, $kind, $director, $actor1, $actor2, $actor3, $summary, $creationDate, $duration, "");

        // Validation des données du formulaire en utilisant l'objet movie
        $validateResults = $movie->validation();
        
        // La fonction validation retourne soit un tableau d'errors soit un objet Movie
        // ça permet la vérification, vu que validation retourne soit un tableau soit un objet Movie, cette ligne vérifie le type de l'objet
        if (!($validateResults instanceof Movie)) {
            throw new \Exception('Le tableau est vide');
        }

        $validateImage = $this->UploadFile($image, 'public/images/');
        $movie->image = $validateImage;

        $movieRepository = new MovieRepository();
        $movieRepository->connection = new Database();
        // On a déja un objet Movie on va donc s'en servir pour créer l'objet en base
        $success = $movieRepository->createMovie($movie);
        if (!$success) {
            throw new \Exception('Impossible d\'ajouter le film !');
        } else {
            var_dump($success);
            header("Location: index.php?action=movie&id=$success");
        }
    }
}