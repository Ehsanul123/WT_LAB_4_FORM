<?php
    $name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confpass="";
	$err_confpass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$date="";
	$err_date="";
	$gender="";
	$err_gender="";
	$where="";
	$err_where="";
	$bio="";
	$err_bio="";

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["Submit"]))
	 {
		 if(empty($_POST["name"]))
		 {
			 $err_name="[ NAME REQUIRED ]";
		 }
		 if(empty($_POST["uname"]))
		 {
			 $err_uname="[ USERNAME REQUIRED ]";
		 }
		 elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[ USERNAME SHOULD CONTAIN ATLEAST 6 CHARACTERS OR MORE ]";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="[ USERNAME SHOULD NOT CONTAIN SPACE ]";
		 }
		 else
		 {
			 $uname=$_POST["uname"];
		 }
		 if(is_numeric($_POST["pass"]))
		 {
			 $err_pass="[ PASSWORD REQUIRED ]";
		 }
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[ PASSWORD SHOULD NOT CONTAIN SPACE ]";
		 }
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		 if(empty($_POST["confpass"]))
		 {
			 $err_confpass="[ CONFIRM YOUR PASSWORD ]";
		 }
		  if(empty($_POST["email"]))
		 {
			 $err_email="[ EMAIL REQUIRED ]";
		 }
		 if(empty($_POST["phone"]))
		 {
			 $err_phone="[ PHONE NUMBER REQUIRED ]";
		 }
		 if(empty($_POST["address"]))
		 {
			 $err_address="[ ADDRESS REQUIRED ]";
		 }
		 if(empty($_POST["date"]))
		 {
			 $err_date="[ SELECT DATE OF BIRTH REQUIRED ]";
		 }
		 
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[PLEASE SELECT GENDER]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(!isset($_POST["where"]))
		 {
			 $err_where="[PLEASE SELECT ONE OPTION]";
		 }
		 else
		 {
			 $where=$_POST["where"];
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[ PLEASE PROVIDE YOUR BIO ]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
      
	 }
		?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset style="width:800px">
          <legend><h1>Club Member Registration</h1></legend>
			<table>
			    <tr>
					<td><span><b>Name</b></span></td>
					<td>:  <input type="text" name="name" value="<?php echo $name;?>">
					<span><?php echo $err_name;?></span></td>

				</tr>
				<tr>
					<td><span><b>Username</b></span></td>
					<td>:  <input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td>

				</tr>
				<tr>
					<td><span><b>Password</b></span></td>
					<td>:  <input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b></span></td>
					<td>:  <input type="password" name="confpass" value="<?php echo $confpass;?>">
					<span><?php echo $err_confpass;?></span></td>
				</tr>
				 <tr>
					<td><span><b>Email</b></span></td>
					<td>:  <input type="text" name="email" value="<?php echo $email;?>">
					<span><?php echo $err_email;?></span></td>

				</tr>
				<tr>
					<td><span><b>Phone</b></span></td>
					<td>:  <input type="text" name="phone" value="<?php echo $phone;?>">
					<span><?php echo $err_phone;?></span></td>

				</tr>
				<tr>
					<td><span><b>Address</b></span></td>
					<td>:  <input type="text" name="address" value="<?php echo $address;?>">
					<span><?php echo $err_address;?></span></td>

				</tr>
				<tr>
					<td><span><b>Date Of Birth</b></span></td>
					<td>:  <input type="text" name="date" value="<?php echo $date;?>">
					<span><?php echo $err_date;?></span></td>

				</tr>
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:  <input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Where Did You Hear From Us </b></span></td>
					<td>:  <input type="radio" name="where" value="A Friend"><span>A Friend</span>
					    <input type="radio" name="where" value="Google"><span>Google</span>
						<input type="radio" name="where" value="Blog Post"><span>Blog Post</span>
					    <input type="radio" name="where" value="Article"><span>Article</span>	
						<span><?php echo "&nbsp ".$err_where;?></span></td>
				</tr>
			
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:  <textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
			</table>
			<br>
			<input type="Submit" name="Submit" value="Registration">
		  </fieldset>
		</form>
	</body>
</html>