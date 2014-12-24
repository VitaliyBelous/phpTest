<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>PHP_Project</title>
</head>
<body>
<div class="main">
    <div class="content">
        <h1>Actors and studios</h1>
        <div class="table-main">
            <div class="table-row">
                <div class="table-column-title1">Studio</div>
                <div class="table-column-title2">Full Name</div>
                <div class="table-column-title3">Films count</div>
            </div>
            <?php
            $mysqli = @new mysqli('localhost', 'Vitalik', '30111987', 'Test');
            if (mysqli_connect_errno()) {
                echo "Подключение невозможно: ".mysqli_connect_error();
            }
                $result_set = $mysqli->query("SELECT s.title AS studio_name,
                      CONCAT_WS(' ',a.name,a.last_name) AS full_name,
                      COUNT(m.id) AS films_count
                    FROM studio s
                      JOIN movies_studios ms ON ms.studios_id = s.id
                      JOIN movies m ON ms.movies_id = m.id
                      JOIN actors_movies am ON am.movies_id = m.id
                      JOIN actors a ON am.actors_id = a.id
                    WHERE s.title = s.title
                    GROUP BY s.id,a.id");
            while ($row = $result_set->fetch_assoc()) {
                echo '<div class="table-row">';
                echo '<div class="table-item1">' .$row['studio_name']. '</div>';
                echo '<div class="table-item2">' .$row['full_name']. '</div>';
                echo '<div class="table-item3">' .$row['films_count']. '</div>';
                echo '</div>';
            }
            $result_set->close();
            $mysqli->close();
            ?>
        </div>
        <a href="index.php" class="link-home">Home</a>
        <div class="clear-fix"></div>
    </div>
</div>
</body>
</html>