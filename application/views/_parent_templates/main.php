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
        <!-- navigation -->
        <div class="container">
            <input type="checkbox" id="new" style="display:none;">
            <!--<h1></h1>-->
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Social</a></li>
                </ul>
            </nav>
            <main>
                <label class="toggleMenu" for="new">
                    <span class="bar"></span> 
                    <span class="bar"></span> 
                    <span class="bar"></span> 
                    MENU
                </label>
                <!-- page content -->
                <div class="content-block">
                    <?php echo $child; ?>
                </div>
            </main>
        </div>



    </body>
    <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
    <?php foreach ($js as $code): ?>
    <script src="<?php echo $code; ?>"></script>
    <?php endforeach; ?>
</html>