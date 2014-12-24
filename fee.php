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
        <h1>Actors fee</h1>
        <div class="table-main">
            <div class="table-row">
                <div class="table-column-title1">Full name</div>
                <div class="table-column-title2">Fee</div>
            </div>
            <?php
            $mysqli = @new mysqli('localhost', 'Vitalik', '30111987', 'Test');
            if (mysqli_connect_errno()) {
                echo "Подключение невозможно: ".mysqli_connect_error();
            }
            $result_set = $mysqli->query("SELECT CONCAT_WS(' ', a.name, a.last_name) AS full_name, SUM(ma.fee) AS total_fee,
                  floor(datediff(curdate(), a.date_of_birth) / 365.25) AS age
                FROM Actors a
                  JOIN actors_movies ma ON ma.actors_id = a.id
                GROUP BY a.id
                HAVING age BETWEEN 40 and 60;");
            while ($row = $result_set->fetch_assoc()) {
                echo '<div class="table-row">';
                echo '<div class="table-item1">' .$row['full_name']. '</div>';
                echo '<div class="table-item2">' .$row['total_fee']. '</div>';
                echo '</div>';
            }
            $result_set->close();
            $mysqli->close();
            ?>

            <div class="table-row">
                <div class="table-column-title2"></div>
            </div>
        </div>
        <a href="index.php" class="link-home">Home</a>
        <div class="clear-fix"></div>
    </div>
</div>
</body>
</html>
