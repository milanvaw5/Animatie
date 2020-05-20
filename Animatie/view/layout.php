<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Netflix shows</title>
</head>
<body>
  <div class="container">
    <h1 class="title"><a class="title__link" href="index.php">Netflix shows</a></h1>
    <main>
      <!-- $content wordt ingevuld door html uit de map view/naamcontroller/naamfunctie.php -->
      <?php echo $content;?>
    </main>
  </div>
  <!-- linken van JavaScript voor client side validatie -->
  <script src="js/validate.js"></script>
</body>
</html>
