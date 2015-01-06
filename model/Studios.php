<?php

namespace Model;

include($_SERVER['DOCUMENT_ROOT'] . '/classloader.php');

class Studios extends Database
{

    public function getStudio()
    {
        $query = false;
        if ($_POST && $selectedStudio = $_POST['studio']) {
            $connection = $this->getConnection();
            $sql = "SELECT s.title AS studio_name,
                  CONCAT_WS(' ',a.first_name,a.last_name) AS full_name,
                COUNT(m.id) AS films_count
                FROM studio s
                JOIN movies_studios ms ON ms.studios_id = s.id
                JOIN movies m ON ms.movies_id = m.id
                JOIN actors_movies am ON am.movies_id = m.id
                JOIN actors a ON am.actors_id = a.id
                  WHERE s.title = '$selectedStudio'
                GROUP BY s.id,a.id";
            $query = $connection->query($sql);
        }
        return $query;
    }
}