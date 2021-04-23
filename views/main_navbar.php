
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../views/main.php">MCS</a>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" href="men.php">MEN</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="women.php">WOMEN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kids.php">KIDS</a>
      </li> -->
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
      <li class="nav-item"><a href="../actions/logout.php" class="nav-link"><?=$_SESSION['username']?></a></li>
      <li class="nav-item"><a href="../actions/logout.php" class="nav-link">Log Out</a></li>
    </ul>
  </div>
</nav>