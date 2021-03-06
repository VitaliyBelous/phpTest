<?php

namespace Vitaly\Controller;

class Index
{
    public function indexAction()
    {
        // render response here
        <!DOCTYPE html>
        <html>
        <?php include "view/template/head.php" ?>
        <body>
        <div class="wrapper">
            <?php include "view/template/header.php"?>
            <div class="main">
                <div class="content">
                    <h1 align="center">Movies, Actors, Studios.</h1>
                    <div class="links">
                        <a href="/fee.php">&lt; Actors fee</a>
                        <a href="/act_stud.php">Studios and actors &gt;</a>
                    </div>
                </div>
            </div>
            <?php include "view/template/footer.php"?>
        </div>
        </body>
        </html>
    }
}