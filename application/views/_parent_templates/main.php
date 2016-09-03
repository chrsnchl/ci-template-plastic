<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            if (isset($title)):
                echo $title;
            endif;
            ?>
        </title>
        <?php foreach ($css as $stylesheet): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo $stylesheet; ?>">
        <?php endforeach; ?>

    </head>
    <body>

        <!-- page content -->
        <?php echo $child; ?>

    </body>
</html>