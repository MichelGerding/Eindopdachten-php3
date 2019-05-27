<?php
  include_once "./php/classes/screen.php";
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/master.css">
    <title>eindopdracht 2 | php 3</title>
  </head>
  <body>
    <div class="container">
      <?php
      try {
        $screen = new Screen();
        $screen->show();
      } catch (\Exception $e) { echo $e;}

      ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./js/app.js" charset="utf-8"></script>
  </body>
</html>
