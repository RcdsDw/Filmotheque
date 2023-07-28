<?php

namespace App\Models\Movie;

require_once('lib/database.php');

use App\Lib\Database\Database;

class Movie
{

    public int $identifier;
    public string $name;
    public string $kind;
    public string $director;
    public string $actor1;
    public string $actor2;
    public string $actor3;
    public string $summary;
    public string $creationDate;
    public string $duration;
    public string $image;

    public function __construct($identifier, $name, $kind, $director, $actor1, $actor2, $actor3, $summary, $creationDate, $duration, $image)
    {
        $this->identifier = $identifier;
        $this->name = $name;
        $this->kind = $kind;
        $this->director = $director;
        $this->actor1 = $actor1;
        $this->actor2 = $actor2;
        $this->actor3 = $actor3;
        $this->summary = $summary;
        $this->creationDate = $creationDate;
        $this->duration = $duration;
        $this->image = $image;
    }

    public function validation()
    {

        $errors = [];

        if (empty($this->name)) {
            $errors['name'] = 'Veuillez rentrer le nom du film !';
        } elseif (empty($this->kind)) {
            $errors['kind'] = 'Veuillez rentrer le genre du film !';
        } elseif (empty($this->director)) {
            $errors['director'] = 'Veuillez rentrer le réalisateur du film !';
        } elseif (empty($this->actor1)) {
            $errors['actor_1'] = 'Veuillez rentrer un acteur !';
        } elseif (empty($this->summary)) {
            $errors['summary'] = 'Veuillez rentrer le résumé du film !';
        } elseif (empty($this->duration)) {
            $errors['duration'] = 'Veuillez rentrer la durée du film !';
        } elseif (empty($this->creationDate)) {
            $errors['creation_date'] = 'Veuillez rentrer la date de sortie !';
        }

        if (empty($errors)) {
            return $this;
        } else {
            return $errors;
        }
    }
}

class MovieRepository
{

    public Database $connection;

    public string $table = 'movies';

    public function getMovies(): array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM $this->table ORDER BY SUBSTRING(movie_name, 1, 1) ASC"
        );
        $statement->execute();

        $movies = [];
        while (($row = $statement->fetch())) {
            $movie = new Movie($row['id'], $row['movie_name'], $row['kind'], $row['director'], $row['actor_1'], $row['actor_2'], $row['actor_3'], $row['summary'], $row['creation_date'], $row['duration'], $row['image']);
            $movies[] = $movie;
        }

        return $movies;
    }


    public function getMovie($identifier): Movie
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM $this->table WHERE id = ?"
        );
        $statement->execute([$identifier]);

        $row = $statement->fetch();
        $movie = new Movie($row['id'], $row['movie_name'], $row['kind'], $row['director'], $row['actor_1'], $row['actor_2'], $row['actor_3'], $row['summary'], $row['creation_date'], $row['duration'], $row['image']);

        return $movie;
    }

    public function createMovie(Movie $movie)
    {
        $statement = $this->connection->getConnection()->prepare(
            "INSERT INTO $this->table(movie_name, kind, director, actor_1, actor_2, actor_3, summary, duration, creation_date, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        $affectedLines = $statement->execute([$movie->name, $movie->kind, $movie->director, $movie->actor1, $movie->actor2, $movie->actor3, $movie->summary, $movie->duration, $movie->creationDate, $movie->image]);

        $lastId = $this->connection->getConnection()->lastInsertId();

        if ($affectedLines > 0) {
            return $lastId;
        } else {
            return false;
        }
    }

    // TODO : Utiliser un objet Movie, Done!
    public function updateMovie(Movie $movie): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            "UPDATE movies SET movie_name = ?, kind = ?, director = ?, actor_1 = ?, actor_2 = ?, actor_3 = ?, summary = ?, duration = ?, creation_date = ?, image = ? WHERE id = ?"
        );
        $affectedLines = $statement->execute([$movie->name, $movie->kind, $movie->director, $movie->actor1, $movie->actor2, $movie->actor3, $movie->summary, $movie->duration, $movie->creationDate, $movie->image, $movie->identifier]);

        return ($affectedLines > 0);
    }

    public function deleteMovie($identifier)
    {
        $statement = $this->connection->getConnection()->prepare(
            "DELETE FROM movies WHERE id = ?"
        );
        $affectedLines = $statement->execute([$identifier]);

        return ($affectedLines > 0);
    }
}
