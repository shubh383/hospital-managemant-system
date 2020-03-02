<?php
         $a=$_REQUEST["name"];
	  $b=$_REQUEST["phone"];
	   $c=$_REQUEST["apt"];
  $d=$_REQUEST["address"];
 $con=mysql_connect("localhost","root","");
	  mysql_select_db("hi");
	  mysql_query("insert into info(name,phone,apt,address) values('$a','$b','$c','$d')");
	  echo("Booked Successfully");
	 
	  include("viewdata.php");
	  mysql_close($con);
   ?>
   