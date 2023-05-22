<?php
$activeNavname = substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],'/') + 1);
?>

<div class="l-navbar" id="nav-bar">
        <nav class="nav">
          <div>
            <a href="admin.php" class="nav_logo">
              <i class="bx bx-layer nav_logo-icon"></i>
              <span class="nav_logo-name">Ezyshop</span>
            </a>
            <div class="nav_list">
              <a href="admin.php" class="nav_link <?= $activeNavname == 'admin.php'?'active text-primary':'' ?>">
                <i class="bx bx-grid-alt nav_icon"></i>
                <span class="nav_name">Dashboard</span>
              </a>
              <a href="categories.php" class="nav_link <?= $activeNavname == 'categories.php'?'active text-primary':'' ?>">
                <i class="bx bx-user nav_icon"></i>
                <span class="nav_name">Catagories View</span>
              </a>
              <a href="addcategories.php" class="nav_link <?= $activeNavname == 'addcategories.php'?'active text-primary':'' ?>">
                <i class="bx bx-plus-circle nav_icon"></i>
                <span class="nav_name">Add Catagories</span>
              </a>
              <a href="products.php" class="nav_link <?= $activeNavname == 'products.php'?'active text-primary':'' ?>">
                <i class="bx bx-message-square-detail nav_icon"></i>
                <span class="nav_name">Products View</span>
              </a>
              <a href="addproducts.php" class="nav_link <?= $activeNavname == 'addproducts.php'?'active text-primary':'' ?>">
                <i class="bx bx-cart nav_icon"></i>
                <span class="nav_name">Add Products</span>
              </a>
              <a href="#" class="nav_link <?= $activeNavname == '#'?'active text-primary':'' ?>">
                <i class="bx bx-bookmark nav_icon"></i>
                <span class="nav_name">Orders</span>
              </a>
              <a href="#" class="nav_link <?= $activeNavname == '#'?'active text-primary':'' ?>">
                <i class="bx bx-folder nav_icon"></i>
                <span class="nav_name">Brands</span>
              </a>
              <a href="#" class="nav_link <?= $activeNavname == '#'?'active text-primary':'' ?>">
                <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
                <span class="nav_name">UserList</span>
              </a>
            </div>
          </div>
          <a href="../logout.php" class="nav_link <?= $activeNavname == '#'?'active text-primary':'' ?>">
            <i class="bx bx-log-out nav_icon"></i>
            <span class="nav_name">SignOut</span>
          </a>
        </nav>
      </div>