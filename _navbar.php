<?php
/**
 * Created by PhpStorm.
 * User: JRL
 * Date: 11/01/18
 * Time: 12:32 AM
 */

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" id="index" href="/_CST-236/Milestone3_V1/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/_CST-236/Milestone3_V1/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Administration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" id="newuser" href="/_CST-236//Milestone3_V1/presentation/views/newUserForm.php">New User</a>
          <a class="dropdown-item" id="newproduct" href="/_CST-236//Milestone3_V1/presentation/views/newProduct.php">New Product</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="adminusers" href="/_CST-236//Milestone3_V1/presentation/views/adminUsers.php">All Users</a>
            <a class="dropdown-item" id="adminproducts" href="/_CST-236//Milestone3_V1/presentation/views/adminProducts.php">All Products</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/_CST-236//Milestone3_V1/presentation/handlers/ProductSearchHandler.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
