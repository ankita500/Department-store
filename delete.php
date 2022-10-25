<?php
if(isset($_POST['submit']))
{
	
	$b=$_POST['t2'];
	$x=mysqli_connect("localhost","root","","store") or die("cannot connect");
	
	$q2="select `name` from `products` where name='$b'";
	$e2=mysqli_query($x,$q2);
	if(mysqli_num_rows($e2)>0)
	{
		$q1= "DELETE FROM `products` WHERE `products`.`name`='$b' ";
	    $res=mysqli_query($x,$q1);
	    if($res!=null)
	  {
		$msg="deleted successfully";
	  }
	else
	  {
		$msg="not successfull";
      }
		
	}
	else
	{
	  $msg="product doesnot exist";
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
<form method="post" action="">
<table width="100" border="1" align="center">
    <tr>
      <th scope="row">Enter name</th>
      <td><input type="text" name="t2" required></td>
    </tr>
	<tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="submit" value="delete"></td>      
    </tr>
	<tr>
           <th scope="row">&nbsp;</th>
           <td><a href="admin1.php"><input type="button" name="back" value="back"></a></td>      
     </tr>
	</table>
	</form>
	<p style="text-align:center;color:green;"><?php echo"$msg";?></p>
	</body>
	</html>
	