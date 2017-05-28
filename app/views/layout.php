<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> <?= isset($title) && !empty($title) ? $title : 'MVC Boiler Plate'; ?> </title>
  <link rel="stylesheet" href="<?= ASSET_PATH . 'css/style.css'; ?>">
</head>
<body>

  <header>
    <nav>
      <ul>
        <li> <a href="<?= PROJECT_PATH; ?>">Home</a> </li>
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
</body>
</html>