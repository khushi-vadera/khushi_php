<?php
$unm=$_GET['unm'];
$pwd=$_GET['pwd'];
$nm=$_GET['nm'];
$add=$_GET['add'];
$country=$_GET['country'];
$zip=$_GET['zip'];
$email=$_GET['email'];
$sx=$_GET['sx'];
$lg=$_GET['lg'];
$ab=$_GET["ab"];
echo"<table bgcolor='#ffd7b5'>
      <tr>
      <th colspan='2'> Registration form </th>
	  </tr>
	  <tr>
	  <td>Username:</td>
	  <td>$unm</td>
      </tr>
      <tr>
	  <td>password:</td>
	  <td>$pwd</td>
      </tr>
      <tr>
	  <td>Name:</td>
	  <td>$nm</td>
      </tr>
      </tr>
      <tr>
	  <td>Address:</td>
	  <td>$add</td>
      </tr>
      </tr>
      <tr>
	  <td>Country:</td>
	  <td>$country</td>
      </tr>
	  <tr>
	  <td>ZIP code:</td>
	  <td>$zip</td>
	  </tr>
	  <tr>
	  <td>Email:</td>
	  <td>$email</td>
	  </tr>
      <tr>
	  <td>Sex:</td>
	  <td>$sx</td>
	  </tr>
      <tr>
	  <td>language:</td>
	  <td>$lg</td>
	  </tr>
	  <tr>
	  <td>About:</td>
	  <td>$ab</td>
	  </tr> 
</table>"
?>