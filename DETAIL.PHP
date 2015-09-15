<body background=bgglitter51.gif>
<br><br><br><br><br>
<center>
<table border=1>
<form action=result.php method=get>
<tr><td><center><b><font color=greenyellow>ITEM<td><input type=text name=item size=38 value="<?php print $_GET['item'];?>">
<td rowspan=4 ><?php
if(isset($_GET['image']))
{
$a=$_GET['image'];
print"<img src=$a width=300 height=300>";
}
?>
<tr><td><center><b><font color=greenyellow><legend>DESCRIPTION</legend>
<td> 
<textarea cols=31 rows=10><?php print $_GET['desc'];?>
</textarea>
</fieldset>
<tr><td><center><font color=greenyellow><b>UNIT COST<td><input type=text name=ucost size=38 value="<?php print $_GET['ucost'];?>">
<tr><td><center><font color=greenyellow><b>QUANTITY<td><input type=text name=qty size=38><font color=red>*
<tr><td>
<input type=submit value='ORDER NOW' name=submit> 
<td><input type=reset value=CLEAR>
</table>