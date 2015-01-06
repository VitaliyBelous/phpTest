<?php

include($_SERVER['DOCUMENT_ROOT'] . '/classloader.php');
use Model\Studios as Studios;
$studios = new Studios();
$studio = $studios->getStudio();
?>
<!DOCTYPE html>
<html>
<?php include "view/template/head.php" ?>
<body>
    <div class="wrapper">
        <?php include "view/template/header.php" ?>
        <div class="main">
            <div class="content">
                <h1>Actors and studios</h1>
                <form action="/select.php" method="post">
                    <label for="select1">Select studio:</label>
                    <p><select size="1" name="studio" id="select1">
                            <option></option>
                            <option value="Warner Brothers">Warner Brothers</option>
                            <option value="New Line Cinema">New Line Cinema</option>
                            <option value="Carolco Pictures">Carolco Pictures</option>
                            <option value="Telecinco Cinema">Telecinco Cinema</option>
                        </select></p>
                    <p><input type="submit" value="Go"></p>
                </form>
                <div class="table-main">
                    <div class="table-row">
                        <table border="1">
                            <tr>
                                <th>Studio</th>
                                <th>Full name</th>
                                <th>Films count</th>
                            </tr>
                            <?php if ($studio): ?>
                                <?php while ($row = $studio->fetch(PDO::FETCH_ASSOC)): ?>
                                    <tr>
                                        <td><?php echo $row['studio_name']; ?> </td>
                                        <td><?php echo $row['full_name']; ?> </td>
                                        <td><?php echo $row['films_count'] . "<br />"; ?> </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
                <a href="/act_stud.php" class="link-home">Previous</a>
                <a href="/web/index.php" class="link-home">Home</a>
            </div>
        </div>
        <?php include "view/template/footer.php" ?>
    </div>
</body>
</html>