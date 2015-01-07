<?php

namespace Vitaly\Model;
use Vitaly\Db\Model;

class Studios extends Model
{
    /**
     * @param $selectedStudio
     * @return bool
     */
    public function getStudio($selectedStudio)
    {
        $result = false;
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
        if ($connection) {
            $query = $connection->query($sql);
            foreach ($query as $row) {
                $result[] = array(
                    'studio_name' => $row['studio_name'],
                    'full_name' => $row['full_name'],
                    'films_count' => $row['films_count']
                );
            }
        } else {
            echo "<br />" . "Database connection error. Please contact administrator.";
        }
        return $result;
    }
}