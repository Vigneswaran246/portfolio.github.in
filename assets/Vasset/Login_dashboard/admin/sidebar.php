<?php include_once './header.php' ?>
<?php include_once './navbar.php' ?>

<!--offcanvas start-->
<div class="offcanvas offcanvas-start  sidebar-nav" style="background-color: #e3f2fd;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

    <div class="offcanvas-body mt-1">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="a-sidebar" style="text-align: center;">
                        <a href="index.php">Home</a>
                        <br>
                        <hr>
                        <a href="product.php">Products</a>
                        <br>
                        <hr>
                        <a href="order.php">Your orders</a>
                        <br>
                        <hr>
                        <a href="cart.php">Cart</a>
                        <br>
                        <hr>
                        <a href="sub.php">Subscription</a>
                        <br>
                        <hr>
                        <a href="logout.php"><i class="bi bi-box-arrow-left"></i>Logout</a>
                        <br>
                        <hr>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php include_once './footer.php' ?>