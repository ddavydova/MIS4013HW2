<?php include("header.php");?>

<?php include("links.php");?>
<br>
<br>
<div class="container display-6">
      <?php include("getfunction.php");?>
      </div>

Welcome <?php echo $_GET["name"]; ?>.<br />
You are <?php echo $_GET["age"]; ?> years old!

<br>
<?php include("footer.php");?>

