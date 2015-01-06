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
                <a href="/web/index.php" class="link-home">Home</a>
            </div>
        </div>
        <?php include "view/template/footer.php" ?>
    </div>
</body>
</html>