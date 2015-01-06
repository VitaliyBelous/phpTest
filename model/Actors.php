<?php

namespace Model;

include($_SERVER['DOCUMENT_ROOT'] . '/classloader.php');

class Actors extends Database
{
    /**
     * @return bool|\PDOStatement
     */
    public function getFee()
    {
        $connection = $this->getConnection();
        $query = false;
        $sql = "SELECT CONCAT_WS(' ', a.first_name, a.last_name) AS full_name,
                SUM(ma.fee) AS total_fee,
                  floor(datediff(curdate(), a.date_of_birth) / 365.25) AS age
                FROM actors a
                  JOIN actors_movies ma ON ma.actors_id = a.id
                GROUP BY a.id
                HAVING age BETWEEN 40 and 60";
        if ($connection) {
            $query = $connection->query($sql);
        } else {
            echo "<br />" . "Database connection error. Please contact administrator.";
        }
        return $query;
    }
}