<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>
	<?php


		$FirstName= "";
		$LastName = "";
		$Gender = "";
		$DOB = "";
		$Religion = "";
		$PresentAddress = "";
		$ParmanentAddress = "";
		$Phone = "";
		$PersonalWebsitelink = "";
		$Email = "";
		$UserName = "";
		$Password = "";
		$RecoveryEmail = "";
		$FirstNameErr= "";
		$LastNameErr = "";
		$DOBErr = "";
		$ReligionErr = "";
		$PresentAddressErr = "";
		$ParmanentAddressErr = "";
		$PhoneErr = "";
		$PersonalWebsitelinkErr = "";
		$GenderErr = "";
		$EmailErr = "";
		$UserNameErr = "";
		$PasswordErr = "";
		$RecoveryEmailErr = "";


?>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST['fname'])){
		 $FirstNameErr = "Blank"; 
	}
	else{

		$FirstName = $_POST['fname'];

	}
		if(empty($_POST['lname'])){
		$LastNameErr = "Blank"; 
	}
	else{

		$LastName = $_POST['lname'];

	}
		if(empty($_POST['gender'])){
		$GenderErr = "Blank"; 
	}
	else{

		$Gender = $_POST['gender'];

	}
		if(empty($_POST['email'])){
		$EmailErr = "Blank"; 
	}
	else{

		$Email = $_POST['email'];

	}
		if(empty($_POST['username'])){
		$UserNameErr = "please fill up this properly"; 
	}
	else{

		$UserName = $_POST['username'];

	}


		if(empty($_POST['dob'])){
		$DOBErr = "Blank"; 
	}
	else{

		$DOB = $_POST['dob'];

	}

		if(empty($_POST['religion'])){
		$ReligionErr = "Blank"; 
	}
	else{

		$Religion = $_POST['religion'];

	}

		if(empty($_POST['present address'])){
		$PresentAddressErr = "Blank"; 
	}
	else{

		$PresentAddress = $_POST['present address'];

	}
		if(empty($_POST['parmanent address'])){
		$ParmanentAddressErr = "Blank"; 
	}
	else{

		$ParmanentAddress = $_POST['parmanent address'];

	}
		if(empty($_POST['phone'])){
		$PhoneErr = "Blank"; 
	}
	else{

		$Phone = $_POST['phone'];

	}
		if(empty($_POST['personal website link'])){
		$PersonalWebsitelinkErr = "Blank"; 
	}
	else{

		$PersonalWebsitelink = $_POST['personal website link'];

	}

		if(empty($_POST['password'])){
		$PasswordErr = "Blank"; 
	}
	else{

		$Password = $_POST['password'];

	}
		if(empty($_POST['remail'])){
		$RecoveryEmailErr = "Blank"; 
	}
	else{

		$RecoveryEmail = $_POST['remail'];

	}

}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="POST">
	<label for = "fname"> Enter your first name </label>
<input type="text" name="fname" id="fname">
<p> <?php echo $FirstNameErr; ?> </p>

<br>

<label for = "lname"> Enter your last name </label>
<input type="text" name="lname" id="lname">
<p> <?php echo $LastNameErr; ?> </p>
<br>

<label for = "gender"> Gender </label>
<input type="radio" name="gender" id="male" value="male">
<label for = "male"> Male </label>
<input type="radio" name="gender" id="female" value="female">
<label for = "female"> Female </label>
<p> <?php echo $GenderErr; ?> </p>
<br>

<label for = "ageDate"> DOB </label>
<input type="date" name="ageDate" id="ageDate">
<p> <?php echo $DOBErr; ?> </p>
<br>

<label for = "religion"> Religion </label>
<select id= "religion" name="religion">
	<option value= "Islam">Islam</option>
	<option value= "Hindu">Hindu</option>
	<option value= "Christian">Christian</option>
	<option value= "Other">Other</option>
</select>
<p> <?php echo $ReligionErr; ?> </p>
<br>



<label for = "presentaddress"> Present Address </label>
<input type="text" name="presentaddress" id="presentaddress">
<p> <?php echo $PresentAddressErr; ?> </p>
<br>

<label for = "parmanentaddress"> Parmanent Address </label>
<input type="text" name="parmanentaddress" id="parmanentaddress">
<p> <?php echo $ParmanentAddressErr; ?> </p>
<br>

<label for = "phone"> Phone </label>
<input type="tel" name="phone" id="phone" >
<p> <?php echo $PhoneErr; ?> </p>
<br>

<label for = "website"> Personal Website link </label>
<input type="url" name="website" id="website">
<p> <?php echo $PersonalWebsitelinkErr; ?> </p>
<br>


<label for = "email"> Email </label>
<input type="email" name="email" id="email">
<p> <?php echo $EmailErr; ?> </p>
<br>


<hr>
<h3>Account Information</h3>
<label for = "username"> User Name/User ID </label>
<input type="text" name="username" id="username">
<p> <?php echo $UserNameErr; ?> </p>
<br>

<label for = "password"> Password </label>
<input type="password" name="password" id="password">
<p> <?php echo $PasswordErr; ?> </p>
<br>

<label for = "remail"> Recovery Email Address </label>
<input type="email" name="remail" id="remail">
<p> <?php echo $RecoveryEmailErr; ?> </p>

<input type="submit" value="Submit">
</form>


<br>
<?php
    	echo "First Name: $FirstName Last Name: $LastName  Gender: $Gender Email: $Email ";

	
        $f = fopen("text.txt","a");
        fwrite($f, "First Name= ".$FirstName ."\n");
        fwrite($f, "Last Name= ".$LastName ."\n");
        fwrite($f, "User Name=".$UserName. "\n");
         fwrite($f, "DOB=".$DOB. "\n");
        fwrite($f, "Religion=".$Religion. "\n");
        fwrite($f, "Present Address=".$PresentAddress. "\n");
        fwrite($f, "Parmanent Address=".$ParmanentAddress. "\n");
        fwrite($f, "Phone=".$Phone. "\n");
        fwrite($f, "Personal Website link=".$PersonalWebsitelink. "\n");
        fwrite($f, "Email= ".$Email. "\n");
        fwrite($f, "Password=".$Password. "\n");
        fwrite($f, "Recovery Email=".$RecoveryEmail. "\n");
        fwrite($f, "Gender= ".$Gender ."\n\n");

        fclose($f);

?>


</body>
</html>