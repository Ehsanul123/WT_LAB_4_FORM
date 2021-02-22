<?php
    $name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$gender="";
	$err_gender="";
	$Hobbies="";
	$err_Hobbies="";
	$profession="";
	$err_profession="";
	$bio="";
	$err_bio="";

	 error_reporting(E_ALL & E_STRICT); ini_set('display_errors', '1');
	 ini_set('log_errors', '0'); ini_set('error_log', './');
	 if(isset($_POST["submit"]))
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
		 if(empty($_POST["pass"]))
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
		 if(!isset($_POST["gender"]))
		 {
			 $err_gender="[PLEASE SELECT GENDER]";
		 }
		 else
		 {
			 $gender=$_POST["gender"];
		 }
		 if(!isset($_POST["Hobbies"]))
		 {
			 $err_Hobbies="[ CHOOSE AT LEAST TWO OPTION ]";
		 }
		 elseif(count($_POST["Hobbies"])<2)
		 {
			 $err_Hobbies="[ CHOOSE AT LEAST TWO HOBBIES ]";
		 }
		 else
		 {
			
			 $Hobbies=$_POST["Hobbies"];
		 }
		 if(!isset($_POST["profession"]))
		 {
			 $err_profession="[ PLEASE SELECT PROFESSION ]";
		 }
		 else
		 {
			 $profession=$_POST["profession"];
		 }
		 if(empty($_POST["bio"]))
		 {
			 $err_bio="[ PLEASE PROVIDE YOUR BIO ]";
		 }
		 else
		 {
			 $bio=$_POST["bio"];
		 
         }
         /*if(isset($_POST["submit"]))
         {
            echo "Username: ".$_POST["uname"]."<br>";
            echo "Password: ".$_POST["pass"]."<br>";
            echo "Gender: ".$_POST["gender"]."<br>";
            echo "Profession: ".$_POST["profession"]."<br>";
            echo "Biography: ".$_POST["bio"]."<br>";
            echo "Date: ".$_POST["date"]."<br>";
            echo "E-Mail: ".$_POST["email"]."<br>";
            //echo "Salary: ".$_POST["salary"]."<br>";
            $var = $_POST["Hobbies"];
            echo "Hobbies: ";
            count($var);
            for($i=0;$i<count($var);$i++)
            {
                echo $var[$i].", ";
            }
         }*/
	 }
		?>
<html>
	<head></head>
	<body>
		<form action="" method="post">
		<fieldset>
          <legend><h1>User Registration</h1></legend>
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
					<td>:  <input type="password" name="pass" value="<?php echo $pass;?>">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:  <input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo "&nbsp ".$err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Hobbies</b></span></td>
					<td>:  <input type="checkbox" name="Hobbies[]" value="Movies"><span>Movies</span>
					    <input type="checkbox" name="Hobbies[]" value="Music"><span>Music</span>
						<input type="checkbox" name="Hobbies[]" value="Games"><span>Games</span>
						<input type="checkbox" name="Hobbies[]" value="Sports"><span>Sports</span>
						<span><?php echo "&nbsp  ".$err_Hobbies;?></span></td>
				</tr>
				<tr>
					<td><span><b>Profession</b></span></td>
					<td>: 
						<select name="profession">
							<option disabled selected>Choose One</option>
							<option>Teaching</option>
							<option>Service</option>
							<option>Business</option>
							<option>others</option>
						</select>
						<span><?php echo "&nbsp".$err_profession;?></span>
					</td>
				</tr>
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:  <textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo "&nbsp".$err_bio;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b></span></td>
					<td>:  <input type="email" name="email"></td>
				</tr>
				<tr>
					<td><span><b>Mobile/Phone</b></span></td>
					<td>:  <input type="tel" name="phone_no"></td>
				</tr>
				<tr>
					<td><span><b>Date</b></span></td>
					<td>:  <input type="date" name="date"></td>
				</tr>
			</table>
			<br>
			<input type="Submit" name="Registration" value="submit">
		  <fieldset>
		</form>
	</body>
</html>