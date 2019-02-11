<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beauty vs. Usefulness</title>


  </head>

  <body>


<nav id="navChg" class="navbar-dark bg-dark fixed-top">
  <div class="navtext">
    <a class="" href="<?php echo $subFolders; ?>index.php">Home</a>
    <a class="nav-item" href="<?php echo $subFolders; ?>pages/beauty.php">Beauty</a>
    <a class="nav-item" href="<?php echo $subFolders; ?>pages/function.php">Usefulness</a>
    <a class="nav-item" href="<?php echo $subFolders; ?>pages/conclusion.php">Conclusion</a>

  </div>
</nav>
      
  <nav id="sideNavChg" class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
          <li class="nav-item">
              <a class="nav-link <?= $title == "Home" ? "active" : "" ?>" href="<?php echo $subFolders; ?>index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Beauty" ? "active" : "" ?>" href="<?php echo $subFolders; ?>pages/beauty.php">Beauty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Function" ? "active" : "" ?>" href="<?php echo $subFolders; ?>pages/function.php">Usefulness</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $title == "Conclusion" ? "active" : "" ?>" href="<?php echo $subFolders; ?>pages/conclusion.php">Conclusion</a>
            </li>
          </ul>

        </nav>