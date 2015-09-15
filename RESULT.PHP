<body background=golden-glitters-backgrounds.jpg>
<br><br><br><br><br><br><br><br><br><br>
<?php
$i=$_GET['item'];
$u=$_GET['ucost'];
$q=$_GET['qty'];
$a=$u*$q;
print"<center><table border=1>
<tr><td>ITEM<td>$i
<tr><td>UNIT COST<td>$u
<tr><td>QUANTITY<td>$q
<tr><td>AMOUNT<td>$a";
?>
<tr><td colspan=2>
<a href=order.htm>ORDER ANOTHER</a>
<tr><td colspan=2>
<a href=index.php>FINISH TO ORDER</a>