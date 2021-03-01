<?php
include 'php-partials/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Document</title>
</head>
<body>

  <header>
    <div class="container">
      <img src="dist/img/logo.png" alt="Logo">
    </div>
  </header>

  <main>
    <div class="container">
      <?php foreach ($cds as $cd) { ?>
        <div class="box">
          <img src="<?php echo $cd['img'] ?>" alt="<?php echo $cd['title'] ?>">
          <div class="title"><?php echo $cd['title'] ?></div>
          <div class="author"><?php echo $cd['author'] ?></div>
          <div class="year"><?php echo $cd['year'] ?></div>
        </div>
      <?php } ?>
    </div>
  </main>

  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>
