<?php
	
error_reporting(0);
define('ok',1);

mysql_connect("localhost") or die('Error');
mysql_select_db("test");
echo "<table border = '1' cellspacing = '2' cellpadding = '0' style='margin-left:300px; margin-top:70px;'><tr>";
if (isset($_POST['submit'])) 
	{
       if($_POST['tshirt1'])
	   {
	   
	   
			$q = mysql_query("SELECT amount FROM Tshirt WHERE tshirt = 'tshirt1'");//'".mysql_real_escape_string($_POST['tshirt1'])."'");
			
			echo "<td><img  border='0' src='tshirt1.jpg' width='100' height='100'></br><p>Peter England T shirt</br>Size:M</br>Price:Rs400</td> ";
			if (mysql_num_rows($q) == 1) 
			{
					while($row = mysql_fetch_array($q, MYSQL_ASSOC))
					{
				
						$total=$total+$row["amount"];
						//echo $total;
			
					}    
			}
		}		
		 if($_POST['tshirt2'])
		 {
		 
	   
	   
			$q = mysql_query("SELECT amount FROM Tshirt WHERE tshirt = 'tshirt2'");//'".mysql_real_escape_string($_POST['tshirt1'])."'");
			
			
			echo "<td><img  border='0' src='tshirt2.jpg' width='100' height='100'></br><p>Campbell T shirt</br>Size:M</br>Price:Rs450</td> ";
			if (mysql_num_rows($q) == 1) 
			{
				while($row = mysql_fetch_array($q, MYSQL_ASSOC))
				{
					$total=$total+$row["amount"];
					//echo $total;
							
				}    
			}
		}			
		if($_POST['tshirt3'])
		 {
		 
	   
	   
			$q = mysql_query("SELECT amount FROM Tshirt WHERE tshirt = 'tshirt3'");//'".mysql_real_escape_string($_POST['tshirt1'])."'");
			
			
			echo "<td><img  border='0' src='tshirt1.jpg' width='100' height='100'></br><p>Nike T shirt</br>Size:M</br>Price:Rs200</td> ";
			if (mysql_num_rows($q) == 1) 
			{
				while($row = mysql_fetch_array($q, MYSQL_ASSOC))
				{
					$total=$total+$row["amount"];
					//echo $total;
							
				}    
			}
		}
		
		if($_POST['tshirt4'])
		 {
		 
	   
	   
			$q = mysql_query("SELECT amount FROM Tshirt WHERE tshirt = 'tshirt4'");//'".mysql_real_escape_string($_POST['tshirt1'])."'");
			
			
			echo "<td><img  border='0' src='tshirt2.jpg' width='100' height='100'></br><p>Pepe jeans T shirt</br>Size:M</br>Price:Rs300</td> ";
			if (mysql_num_rows($q) == 1) 
			{
				while($row = mysql_fetch_array($q, MYSQL_ASSOC))
				{
					$total=$total+$row["amount"];
					//echo $total;
							
				}    
			}
		}
		
		
		echo "<td><pre><b style='font-size:17px;'> Total</b></pre></br></br><pre><b>  Rs.$total<b></pre></td>";
		echo "</tr></table>";
		
        die();
	}
 

 

 


?>