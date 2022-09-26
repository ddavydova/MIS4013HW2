<?php include("header.php");?>

<?php include("links.php");?>
<br>
<br>
<div class="container display-6">
      <?php include("getfunction.php");?>
      </div>

<form action="welcome.php" method="get">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form> 
Welcome <?php echo $_GET["name"]; ?>.<br />
You are <?php echo $_GET["age"]; ?> years old!

<br>
<?php include("footer.php");?>

