<?php
include('./app/bootstrap.php');
$actors = new Vitaly\Model\Actors();

$fee = $actors->getFee();
?>
<!DOCTYPE html>
<html>
<?php include "view/template/head.php" ?>
<body>
    <div class="wrapper">
        <?php include "view/template/header.php" ?>
        <div class="main">
            <div class="content">
                <h1>Actors fee</h1>
                <div class="table-main">
                    <div class="table-row">
                        <table border="1">
                            <tr>
                                <th>Full name</th>
                                <th>Fee</th>
                            </tr>
                            <?php if ($fee): ?>
                                <?php while ($row = $fee->fetch(PDO::FETCH_ASSOC)): ?>
                                    <tr>
                                        <td><?php echo $row['full_name']; ?></td>
                                        <td><?php echo $row['total_fee'] . "<br />"; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </table>
                    </div>
                </div>
                <a href="/web/index.php" class="link-home">Home</a>
            </div>
        </div>
        <?php include "view/template/footer.php" ?>
    </div>
</body>
</html>
