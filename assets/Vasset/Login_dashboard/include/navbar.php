<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!--offcanvas trigger-->
    <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--offcanvas trigger-->
    <a class="navbar-brand me-auto" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-auto">
        <div class="input-group my-2 my-lg-0">
          <select class="form-select" aria-label="Default select example"  name="options">
            <option selected>All Products</option>
            <option value="1">Mobiles</option>
            <option value="2">Laptops</option>
            <option value="3">Speakers</option>
            <option value="3">Headphones</option>
            <option value="3">Playstation</option>
            <option value="3">Joysticks</option>
            <option value="3">Gadgets</option>
          </select>
          <input type="text"  name="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
          <button class="btn btn-primary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
        </div>
      </form>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-people"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">About us</a></li>
            <li><a class="dropdown-item" href="#">Contact us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>