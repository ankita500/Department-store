<?php
if(isset($_POST['check']))
{
	 $b=$_POST['t2'];
	 
	 $x=mysqli_connect("localhost","root","","store") or die("cannot connect");
     $q1="select * from `transactions1`";
     $e1=mysqli_query($x,$q1);
	 $q2="select `trans_no` from `transactions1` where name='$b'";
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

<div align="center" color="purple"><b><?php echo" Assosiated items of '$b'";?></b></div>
<?php
if(mysqli_num_rows($e2)>0)
{
	
echo"<table width='70%' border='1' align='center'>
<tr style='background-color:blue; text-color:white;'>
<th scope='row'><div align='center' class='style1'>name</div></th>
<td><div align='center' class='style1'>quantity</div></td>
<td><div align='center' class='style1'>price per item</div></td>

</tr>";

while($res=mysqli_fetch_row($e2))
{
$q3="select * from `transactions1` where trans_no='$res[0]'";
$e3=mysqli_query($x,$q3);
if(mysqli_num_rows($e3)>0)
{	
while($res1=mysqli_fetch_row($e3))
{
$z=$res1[5]/$res1[4];
if($res1[3]!=$b)
{	
echo"<tr>
<th scope='row'>$res1[3]</th>
<td>$res1[4]</td>
<td>$z</td>

</tr>";
}
//$z=$z+$res[5];
}
}

else
{
	echo"No record found";
}
}

echo"</table>";	
}
else
{
	echo"No record found";
}

?>

</body>
</html>