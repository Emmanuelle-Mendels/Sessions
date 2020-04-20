<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php';
if(empty($_SESSION['loginname'])){
header("Location: /index");
exit();
}
?>

<section class="cookies container-fluid">
    <p>Votre Panier</p>
    <div class="row">

<?php foreach ($_SESSION['cart'] as $cookie => $name){
            foreach ($name as $item){
                echo $item."<br/>";
            }
}
?>

    </div>
</section>
<?php require 'inc/foot.php'; ?>

