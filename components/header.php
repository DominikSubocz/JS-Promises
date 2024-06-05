<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title><?php echo $pageTitle; ?></title>

  <?php

  if (!empty($stylesheets)) {
    foreach ($stylesheets as $sheet) {
      echo "<link rel=\"stylesheet\" href=\"css/$sheet.css\">";
    }
  }

  if (!empty($scripts)) {
    foreach ($scripts as $script) {
      echo "<script src=\"js/$script.js\" defer></script>";
    }
  }

  ?>
</head>
<body>
  <header class="page-header">
    <div class="content-wrapper desktop-header-row">
      <div class="mobile-top">
      <img class="logo" src="icons/icons8-graph-96.png">

        <button class="nav-button" id="nav-button">
          <img src="icons/nav-button.png">
        </button>
      </div>

      <div class="nav-links-left">
        <nav class="page-navigation" id="nav-list">
              <ul class="nav-links">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="discover.php">Discover</a></li>
                  <li><a href="book-list.php">Articles</a></li>
                  <li><a href="about.php">About</a></li>
                  <li class="link-left"><a href="contact.php">Contact</a></li>
              </ul>
        </nav>
      </div>
      <div class="nav-links-right">
        <nav class="page-navigation" id="nav-list">

          <?php
                  if(isset($_SESSION["loggedIn"])) {
                    $user = $_SESSION["username"];
                    if($_SESSION["user_role"] === "Admin") {
                      echo "<li><a href='admin-dashboard.php'>Admin Dashboard</a></li>";
                    }
                    echo "<li><a href='logout.php'>Logout</a></li>";
                  }
                  else{
                    echo "<li class='link-right'> <a class='login-btn button' href='login.php'>Login</a></li>
                        <li class='link-right'> <a class='sign-up-btn button' href='register.php'>Sign up</a></li>";
                  }
            ?>
        </nav>
      </div>
    </div>
  </header>

  <main class="content-wrapper main-content">