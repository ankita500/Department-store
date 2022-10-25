<?php
?>
<html>
<head>
</head>

<body>
<div align="center">Product List</div>
<form method="post" action="">
<table width="400" border="1" align="center">
    <tr>
      <th scope="row">id</th>
      <td><input type="number" name="t1" ></td>
    </tr>
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
      <td><input type="submit" name="submit" value="Submit"></td>      
    </tr>
 </table>
</form>
</body>
</html>