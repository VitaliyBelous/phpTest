<?php
    $pageTitle = 'Actors Fee';
    include ('head.php');
?>
<body>
    <div class="wrapper">
        <?php include ('header.php'); ?>
        <div class="main">
            <div class="content">
                <h1>Actors fee</h1>
                <div class="table-row">
                    <table border="1">
                        <?php if ($params): ?>
                            <tr>
                                <th>Full name</th>
                                <th>Fee</th>
                            </tr>
                            <?php foreach ($params as $actor): ?>
                                <tr>
                                    <td><?php echo $actor['full_name'] ?></td>
                                    <td><?php echo $actor['total_fee'] ?></td><br />
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
    <!--                --><?php //$foo = false; ?>
                    </table>
                </div>
                <div class="link-home">
                    <a href = '/'>Home</a>
                </div>
            </div>
        </div>
        <?php include ('footer.php'); ?>
    </div>
</body>
