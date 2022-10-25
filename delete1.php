<?php
if(isset($_POST['submit']))
{
	
	$b=$_POST['t2'];
	$x=mysqli_connect("localhost","root","","store") or die("cannot connect");
	
	
	
		$q1= "delete from `products` where `id`='$b' ";
	    $res=mysqli_query($x,$q1);
		echo"$b";
	   
	
}
else
{
}	
	
?>
<html>
<head>
</head>
<body>

<table width="100" border="1" align="center">
    <tr>
      <th scope="row">Enter id</th>
      <td><input type="number" name="t2" required></td>
    </tr>
	<tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="submit" value="delete"></td>      
    </tr>
	</table>
	<p style="text-align:center;color:green;"><?php echo"$b";?></p>
	</body>
	</html>
	