<?php
if(isset($_POST['order']))
			{
			    $b=$_POST['t2'];
				$c=$_POST['t3'];
				$d=$_POST['t4'];
				$x=mysqli_connect("localhost","root","","store") or die("cannot connect");
				$q2="select `name` from `products` where name='$c'";
	            $e2=mysqli_query($x,$q2);
				$q4="select `price` from `products` where name='$c'";
	            $e4=mysqli_query($x,$q4);
	            $q5="select `quantity` from `products` where name='$c'";
	            $e5=mysqli_query($x,$q5);
				$q6="select `id` from `products` where name='$c'";
	            $e6=mysqli_query($x,$q6);
				
				
          
				
				
				
	           
	            if(mysqli_num_rows($e2)>0)
	            {
					$p=mysqli_fetch_row($e2);
					$q=mysqli_fetch_row($e4);
					$r=mysqli_fetch_row($e5);
					$s=mysqli_fetch_row($e6);
					
					
					
					
					$t=$d*$q[0];
					$u=$r[0]-$d;
					 if($u>0)
				  {
					  $q7= "UPDATE `products` SET `quantity` = '$u' WHERE `products`.`name` = '$c' ";
	                  $e7=mysqli_query($x,$q7);
					  $q1= "INSERT INTO `transactions1`(`trans_no.`, `item_no.`, `name`, `quantity`, `price`) VALUES ('$b', '$s[0]', '$p[0]', '$d', '$t'); ";
	                   $res=mysqli_query($x,$q1);
					   
				  }
				  else
				  {
					  $msg="out of stock";
				  }
					
		          
	              if($res!=null)
	              {
		         

				  $msg="updated successfully";
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
           <th scope="row">Enter trans_no of items</th>
           <td><input type="number" name="t2" required></td>
          </tr>
          <tr>
           <th scope="row">Enter name of items</th>
           <td><input type="text" name="t3" required></td>
          </tr>
		  <tr>
           <th scope="row">Enter quantity of items</th>
           <td><input type="number" name="t4" required></td>
          </tr>
		  
		  <tr>
           <th scope="row">&nbsp;</th>
           <td><input type="submit" name="order" value="order"></td>      
           </tr>
		   <tr>
           <th scope="row">&nbsp;</th>
           <td><a href="billing.php"><input type="button" name="bill" value="bill"></a></td>      
           </tr>
	       </table>
	        </form>
           <p style="text-align:center;color:green;"><?php echo"$msg";?></p>
	        
	       
			</body>
			</html>
			
			