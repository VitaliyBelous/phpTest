<?php
$pageTitle = 'Studios';
include ('head.php');
?>
<body>
<div class="wrapper">
    <?php include ('header.php'); ?>
    <div class="main">
        <div class="content">
            <h1>Studios and actors</h1>
            <form action="/studios/actors" method="post">
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
            <div class="table-row">
                <table border="1">
                    <?php if ($params): ?>
                        <tr>
                            <th>Studio name</th>
                            <th>Full name</th>
                            <th>Films count</th>
                        </tr>
                        <?php foreach ($params as $actor): ?>
                            <tr>
                                <td><?php echo $actor['studio_name'] ?></td>
                                <td><?php echo $actor['full_name'] ?></td>
                                <td><?php echo $actor['films_count'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
        <!--        --><?php //$foo = false; ?>
                </table>
            </div>
            <div class="links">
                <a href = '/'>Home</a>
            </div>
        </div>
    </div>
    <?php include ('footer.php'); ?>
</div>
</body>
