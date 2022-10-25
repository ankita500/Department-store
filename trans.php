<?php
$x=mysqli_connect("localhost","root","","store") or die("cannot connect");
$q1="select * from `transactions1`";
$e1=mysqli_query($x,$q1);
$msg="";
?>
<html>
<head>
</head>
<body>

<div align="center" color="purple"><b>Transaction List</b></div>
<?php
if(mysqli_num_rows($e1)>0)
{
echo"<table width='100%' border='1'>
<tr style='background-color:blue; text-color:white;'>
<th scope='row'><div align='center' class='style1'>sl_no</div></th>
<td><div align='center' class='style1'>trans_no</div></td>
<td><div align='center' class='style1'>item_no</div></td>
<td><div align='center' class='style1'>name</div></td>
<td><div align='center' class='style1'>quantity</div></td>
<td><div align='center' class='style1'>price</div></td>
</tr>";

while($res=mysqli_fetch_row($e1))
{
echo"<tr>
<th scope='row'>$res[0]</th>
<td>$res[1]</td>
<td>$res[2]</td>
<td>$res[3]</td>
<td>$res[4]</td>
<td>$res[5]</td>
</tr>";
}
echo"</table>";	
}
else
{
	$msg="No record found";
}

?>
<p style="text-align:center;color:green;"><?php echo"$msg";?></p>

</body>
</html>