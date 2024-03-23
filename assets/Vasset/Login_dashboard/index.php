<?php include_once './include/header.php' ?>
<?php include_once './include/navbar.php' ?>
<?php include_once './include/sidebar.php' ?>

<div class="content">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" width="100%" height="350px" class="d-block w-100" alt="Nature">
            </div>
            <div class="carousel-item">
                <img src="https://magictoolbox.sirv.com/images/magicslideshow/03/image-slideshow-04.jpg" width="100%" height="350px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.w3schools.com/howto/img_lights_wide.jpg" width="100%" height="350px" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <?php
    require('connect.php');
    ?>

    <div class="row ms-0">

        <?php

        // Prepare a SELECT statement
        $sql = "SELECT * FROM index_p";
        $result = $db->query($sql);

        if (!$result) {
            die("Invalid query:" . $db->error);
        }

        // Fetch the results
        while ($row = $result->fetch_assoc()) {

        ?>
            <div class="card mt-2 ms-2" style="width: 18rem;">
                <img src="<?= $row['p_image']; ?>" class="card-img-top" alt="..." height="250rem">
                <div class="card-body">
                    <p><?= ucfirst($row['product_name']); ?></p>
                    <p>Price: $ <?= $row['p_discount_rate']; ?></p>
                    <p>Price: $ <?= $row['p_rate']; ?></p>
                </div>
            </div>

        <?php
        }   

        ?>

    </div>
</div>

<?php include_once './include/footer.php' ?>