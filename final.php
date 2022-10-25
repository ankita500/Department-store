<?php
if(isset($_POST['bill']))
{
	 $b=$_POST['t2'];
	 $c=$_POST['t3'];
	 $x=mysqli_connect("localhost","root","","store") or die("cannot connect");
     $q1="select * from `transactions1`";
     $e1=mysqli_query($x,$q1);
	 $q2="select * from `transactions1` where trans_no='$b'";
     $e2=mysqli_query($x,$q2);
	 //echo"$b";
	 $z=0;
}
else
{
}
?>
<html>
<head>
</head>
<body>
<p style="text-align:center;color:black;"><b><?php echo"Fortune Department Store";?></b></p>
<p style="text-align:center;color:black;"><?php echo" Phone No:9434567890";?></p>
<p style="text-align:center;color:black;"><?php echo" Customer Name:$c";?></p>
<div align="center" color="purple"><b>Final Bill</b></div>
<?php
if(mysqli_num_rows($e2)>0)
{
echo"<table width='70%' border='1' align='center'>
<tr style='background-color:blue; text-color:white;'>
<th scope='row'><div align='center' class='style1'>name</div></th>
<td><div align='center' class='style1'>quantity</div></td>
<td><div align='center' class='style1'>price</div></td>

</tr>";

while($res=mysqli_fetch_row($e2))
{
echo"<tr>
<th scope='row'>$res[3]</th>
<td>$res[4]</td>
<td>$res[5]</td>

</tr>";
$z=$z+$res[5];
}

echo"</table>";	
}
else
{
	echo"No record found";
}

?>
<p style="text-align:center;color:black;"><I><U><?php echo" Total cost:$z";?></U></I></p>
</body>
</html>