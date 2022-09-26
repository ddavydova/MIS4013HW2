<?php

$bg_color = htmlspecialchars($_GET['bg']);
$text = htmlspecialchars($_GET['text']);

?>

<html>
  <body style="background: <?php echo $bg_color ?>">
    <h1><?php echo $text ?></h1>
  </body>
</html>
