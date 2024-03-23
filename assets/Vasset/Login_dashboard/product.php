<?php include_once './include/header.php' ?>
<?php include_once './include/navbar.php' ?>
<?php include_once './include/sidebar.php' ?>

<?php
    require('connect.php');
    ?>

<div class="content">

<?php

// Prepare a SELECT statement
$sql = "SELECT * FROM product_p";
$result = $db->query($sql);

if (!$result) {
    die("Invalid query:" . $db->error);
}

// Fetch the results
while ($row = $result->fetch_assoc()) {

?>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= $row['p_image']; ?>" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p><h2><?= ucfirst($row['product_name']); ?></h2></p>
                <!--<p class="text-muted">Category: <?= $row['Category']; ?></p>-->
                <p><h5>Description:</h5> <?= $row['Description']; ?> </p>
                <p><h5>Price:</h5> $ <?= $row['p_discount_rate']; ?></p>
                <p><h5>Price:</h5> $ <?= $row['p_rate']; ?></p>
            </div>
        </div>

        <?php
        }

        ?>
       
    </div>
</div>