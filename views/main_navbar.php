<?php
$subcat_men_list = $prod_obj->getSubCatMen();
$subcat_women_list = $prod_obj->getSubCatWomen();
$subcat_kids_list = $prod_obj->getSubCatKids();
$count_cart = $cart->countCart($_SESSION['id']);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
  <a class="navbar-brand font-weight-bold" href="../views/main.php">MCS</a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="main.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MEN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php
        while($subcat_men_details=$subcat_men_list->fetch_assoc()){
          echo "<a class='dropdown-item' href='men.php?subcat=".$subcat_men_details['subcat_name']."'>".$subcat_men_details['subcat_name']."</a>";
        }
        ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="main.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          WOMEN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php
        while($subcat_women_details=$subcat_women_list->fetch_assoc()){
          echo "<a class='dropdown-item' href='women.php?subcat=".$subcat_women_details['subcat_name']."'>".$subcat_women_details['subcat_name']."</a>";
        }
        ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="main.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          KIDS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
        while($subcat_kids_details=$subcat_kids_list->fetch_assoc()){
          echo "<a class='dropdown-item' href='kids.php?subcat=".$subcat_kids_details['subcat_name']."'>".$subcat_kids_details['subcat_name']."</a>";
        }
        ?>
        </div>
      </li>
    </ul>
  </div>
  <div class="ml-auto" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="../views/cart.php" class="nav-link"><i class="fas fa-shopping-cart"><span class="text-danger"><?=$count_cart['count(*)']?></span></i></a></li>
      <li class="nav-item"><a href="../actions/logout.php" class="nav-link"><?=$_SESSION['username']?></a></li>
      <li class="nav-item"><a href="../actions/logout.php" class="nav-link"><i class="fas fa-user-times"></i></a></li>
    </ul>
  </div>
</nav>