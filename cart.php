<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<?php

?>
<section class="cookies container-fluid">
    <div class="row">

        <?php
        // TODO : Display shopping cart items from $_COOKIES here.
        if(isset($_SESSION)){
            $_SESSION[''];
        }
        if(!isset($_SESSION)){
            echo 'you need to log in';
        }
        ?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>

