<?php
    $pageTitle = 'Home Page';
    include ('head.php');
?>
<body>
    <div class="wrapper">
        <?php include ('header.php'); ?>
        <div class="main">
            <div class="content">
                <h1 align="center">Home page</h1>
                <div class="links">
                    <a href = '<?php echo $this->getFeeUrl()?>'>&lt;&lt;Actors fee</a>
                    <a href = '<?php echo $this->getStudioUrl()?>'>Studios&gt;&gt;</a>
                </div>
            </div>
        </div>
        <?php include ('footer.php'); ?>
    </div>
</body>
