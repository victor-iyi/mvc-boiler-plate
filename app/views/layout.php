<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> <?= isset($title) && !empty($title) ? $title : 'MVC Boiler Plate'; ?> </title>
  <link rel="stylesheet" href="<?= ASSET_PATH . 'css/style.css'; ?>">
</head>
<body>

  <?php require_once $viewFile;  ?>

</body>
</html>