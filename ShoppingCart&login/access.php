<?php
	
error_reporting(0);
define('ok',1);

mysql_connect("localhost") or die('Error');
mysql_select_db("test");
session_start();
$_SESSION['views']=1;
 
if (isset($_POST['submit'])) {
        $q = mysql_query("SELECT * FROM record WHERE Name = '".mysql_real_escape_string($_POST['name'])."' AND password = '".mysql_real_escape_string($_POST['password'])."'");
        if (mysql_num_rows($q) == 0) {
                echo '<h1>Wrong login or password!</h1>';
        } else {
                setcookie('auth', base64_encode($_POST['name'].'|'.$_POST['password']));
               header("location:page2.php");
			   exit();
				
        }
        die();
}
 
if(isset($_SESSION['views']))
  unset($_SESSION['views']);

?>