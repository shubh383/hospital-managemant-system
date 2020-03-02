<?php include ("head.php")
?>
<body>
<div class="register">
<form action="connect.php" method="post"/>
<center>
<br /><br /><br />
Username:<input type="text" size="40" name="name" />
<br /><br /><br />
phone:<input type="number" size="10" name="phone"/>
<br /><br /><br />
appointmenttype:<select name="apt">
<option value="call">call</option>
<option value="online">online</option>
<option value="direct">direct</option>
</select>
<br/><br/>
address:<input type="text" size="30" name="address"/>
<br/><br/>
<input type="submit" value="BOOK"/>
</center>
</form>
</div>
</body>
<?php include("foot.php")
?>