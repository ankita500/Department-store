<?php
if(isset($_POST['submit']))
{
	
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$x=mysqli_connect("localhost","root","","store") or die("cannot connect");
	
	$q2="select `name` from `products` where name='$b'";
	$e2=mysqli_query($x,$q2);
	if(mysqli_num_rows($e2)>0)
	{
		$msg="product already exist";
	}
	else
	{
	$q1="INSERT INTO `products` (`name`, `price`, `quantity`, `unit`, `type`) VALUES ( '$b', '$c', '$d', '$e', '$f')";
	$res=mysqli_query($x,$q1);
	if($res!=null)
	{
		$msg="added successfully";
	}
	else
	{
		$msg="not successfull";
    }
	}
}
else
{
}
?>
<html>
<head>
</head>

<body>
<p style="text-align:center;color:green;"><?php echo"$msg";?></p>
<div align="center">Add</div>
<form method="post" action="">
<table width="400" border="1" align="center">
    <tr>
      <th scope="row">name</th>
      <td><input type="text" name="t2" required></td>
    </tr>
	 <tr>
      <th scope="row">price</th>
      <td><input type="number" name="t3" required></td>
    </tr>
    <tr>
      <th scope="row">quantity</th>
      <td><input type="number" name="t4" required></td>
    </tr>
	 <tr>
      <th scope="row">unit</th>
      <td><input type="text" name="t5" required></td>
    </tr>
	<tr>
      <th scope="row">type</th>
      <td><input type="text" name="t6" required></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="submit" value="Add"></td>      
    </tr>
	<tr>
           <th scope="row">&nbsp;</th>
           <td><a href="admin1.php"><input type="button" name="back" value="back"></a></td>      
     </tr>
 </table>
</form>
</body>
</html>