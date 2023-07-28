<?php

namespace App\Controllers\ImageController;

class ImageController
{
    public function uploadFile($file, $dir)
    {
        // On vérifie que le fichier a bien été envoyé et qu'il n'y a pas d'erreur 
        if (!isset($file['name']) || empty($file['name'])) {
            throw new \Exception("Vous devez indiquer une image");
            return false;
        }

        // On vérifie que le dossier existe et on le crée s'il n'existe pas
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        // On récupère l'extension du fichier et on convertit en minuscule
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // On génère un nom aléatoire pour le fichier
        $random = rand(0, 99999) . time() . bin2hex(random_bytes(10)) . uniqid();

        // On crée le chemin du fichier
        $target_file = $dir . $random . "." . $extension;


        // On vérifie que le fichier est une image
        if (!getimagesize($file["tmp_name"])) {
            throw new \Exception("Le fichier n'est pas une image");
            return false;
        }

        // On vérifie que l'extension du fichier est autorisée
        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            throw new \Exception("L'extension du fichier n'est pas autorisée");
            return false;
        }

        // On vérifie que le fichier n'existe pas déjà
        if (file_exists($target_file)) {
            throw new \Exception("Le fichier existe déjà");
            return false;
        }

        // On vérifie que le fichier n'est pas trop gros
        if ($file['size'] > 500000) {
            throw new \Exception("Le fichier est trop volumineux");
            return false;
        }

        // On vérifie que le fichier a bien été uploadé dans le dossier
        if (!move_uploaded_file($file['tmp_name'], $target_file)) {
            throw new \Exception("Une erreur est survenue lors de l'upload du fichier");
            return false;
        } else {
            return ($random . "." . $extension); // On retourne le nom du fichier
        }
    }
}