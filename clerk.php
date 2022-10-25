<?php
if(isset($_POST['login']))
{
$x=$_POST['t1'];
$y=$_POST['t2'];
$z=$_POST['t3'];
if($x=="abc" and $y=="abc@gmail.com" and $z=="abcd")
{$m1="right";
}
else
{$m1="wrong user";
}
}	
else
{$m1="";
}
?>
<html>
<body>
<p style="text-align:center;color:red;"><?php echo"$m1";?></p>
<?php
if($m1=="right")
{
	header("Location:clerk1.php");
	exit;
	
	
}
?>
<form method="post" action="">
<table width="400" border="1" align="center">
    <tr>
      <th scope="row">Username</th>
      <td><input type="text" name="t1" required></td>
      <td id="m1">&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td><input type="email" name="t2" required></td>
      <td id="m2">&nbsp;</td>
    </tr>
	 <tr>
      <th scope="row">Password</th>
      <td><input type="password" name="t3" required></td>
      <td id="m3">&nbsp;</td>
    </tr>
   <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="login" value="login"></td>
      <td>&nbsp;</td>
    </tr>
 </table>
</form>
</body>
</html>
