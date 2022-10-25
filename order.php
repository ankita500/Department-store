<?php
if(isset($_POST['submit']))
{
	
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$x=mysqli_connect("localhost","root","","store") or die("cannot connect");
	
	$q2="select `name` from `products` where name='$b'";
	$e2=mysqli_query($x,$q2);
	$q4="select `price` from `products` where name='$b'";
	$e4=mysqli_query($x,$q4);
	$q5="select `quantity` from `products` where name='$b'";
	$e5=mysqli_query($x,$q5);
	if(mysqli_num_rows($e2)>0)
	{   
        $r=mysqli_fetch_row($e5);
		$d=$c+$r[0];
		
		$q1= "UPDATE `products` SET `quantity` = '$d' WHERE `products`.`name` = '$b' ";
	    $res=mysqli_query($x,$q1);
	    if($res!=null)
	  {
		$msg="updated successfully";
		$z=mysqli_fetch_row($e4);
	     		
		$y=$c*$z[0];
		
		$q3="INSERT INTO `transactions` ( `name`, `quantity`, `price`) VALUES ( '$b', '$c', '$y')";
		$e3=mysqli_query($x,$q3);
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
      <th scope="row">Enter quantity</th>
      <td><input type="number" name="t3" required></td>
    </tr>
	<tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="submit" value="order"></td>      
    </tr>
	<tr>
           <th scope="row">&nbsp;</th>
           <td><a href="admin1.php"><input type="button" name="back" value="back"></a></td>      
     </tr>
	</table>
	</form>
	<p style="text-align:center;color:green;"><?php echo"$msg";?></p>
	<p style="text-align:center;color:green;"><?php echo"transaction:$y";?></p>
	</body>
	</html>
	