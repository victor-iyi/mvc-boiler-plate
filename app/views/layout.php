<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> <?= $this->title . " &bull; MVC Boiler Plate"; ?> </title>
  <link rel="stylesheet" href="<?= ASSET_PATH . 'css/bootstrap.min.css'; ?>">
  <link rel="stylesheet" href="<?= ASSET_PATH . 'css/bootstrap-reboot.min.css'; ?>">
  <link rel="stylesheet" href="<?= ASSET_PATH . 'css/bootstrap-grid.min.css'; ?>">
  <link rel="stylesheet" href="<?= ASSET_PATH . 'css/style.css'; ?>">
</head>
<body>

  <header>
    <nav>
      <ul>
        <li> <a href="<?= PROJECT_PATH; ?>">Home</a> </li>
        <li> <a href="<?= PROJECT_PATH; ?>dashboard">Dashboard</a> </li>
        <li> <a href="<?= PROJECT_PATH; ?>about">About</a> </li>
        <li> <a href="<?= PROJECT_PATH; ?>login">Login</a> </li>
        <li> <a href="<?= PROJECT_PATH; ?>register">Register</a> </li>
        <li> <a href="<?= PROJECT_PATH; ?>logout"> Logout </a></li>
      </ul>
    </nav>
  </header>

  <div class="container">

    <?php require_once $viewFile;  ?>

  </div>

  <footer class="footer">
    <p> Copyright ©2017. Victor I. Afolabi. All rights reserved.</p>
  </footer>

  <script src="<?= ASSET_PATH . 'js/bootstrap.min.js'; ?>"></script>
  <?php
    if ( isset($this->js) ) {
      foreach ($this->js as $js) {
        echo '<script src="' . PROJECT_PATH . 'app/views/' . $js .'"></script >';
      }
    }
  ?>

</body>
</html>