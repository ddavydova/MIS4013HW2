<!DOCTYPE html>
<html>
<head> <?php include("header.php");?></head>
<body>

<?php include("links.php");?>

<div class="container display-5">

<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>

</div>

<?php include("footer.php");?>

</body>
</html>
