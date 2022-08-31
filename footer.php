<div class="footer">

<?php
echo "The time is " . date("h:i:sa");
?>
  
  
<?php
$d1=strtotime("December 25");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until Christmas!";
?>
  
</div>
