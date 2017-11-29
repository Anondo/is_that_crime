<html>
<head>
	<title>SignUP Page</title>
	<script src = "../js/signup_handler.js"></script>
</head>

<body onload = "addYears()">
	<noscript><h4 style = "color:red;">Enable Javascript in your browser to access all the features of this web page.</h4></noscript>
	<p><a href = 'http://localhost:<?php echo  $_SERVER["SERVER_PORT"];?>/Projects/aiub project/Views/crime_post.php'>Post Crime</a></p>
    <p><a href = 'http://localhost:<?php echo  $_SERVER["SERVER_PORT"];?>/Projects/aiub project/index.php'>Home</a></p>
	<h3>Create an Account</h3>
<?php session_start();?>
 <form name = "signupForm" action = "http://localhost:<?php echo  $_SERVER["SERVER_PORT"];?>/Projects/aiub%20project/Views/action/register_user.php/?js_enabled=false" method = "POST" enctype="multipart/form-data" onsubmit="return validate()">
  <table>
    <tr> <!--First Name Row-->
    	<td>First Name</td> <td>:</td> <td> <input type="text" name="fname" placeholder="First Name..." value = "<?php if(isset($_SESSION["signup_data"]))echo $_SESSION["signup_data"]["fname"];?>" /> </td><!--Checking for returned values -->
    </tr>

    <tr> <!--Last Name Row-->
        <td>Last Name</td> <td>:</td> <td> <input type="text" name="lname" placeholder="Last Name..." value =  "<?php if(isset($_SESSION["signup_data"]))echo $_SESSION["signup_data"]["lname"];?>" /> </td>
    </tr>

    <tr> <!--Birthdate Row-->

        <td>Birthdate </td> <td>:</td> <td>Day<select name="day" >
                                     <option value="1">1 </option>
                                     <option value="2">2 </option>
                                     <option value="3">3 </option>
                                     <option value="4">4 </option>
                                     <option value="5">5 </option>
                                     <option value="6">6 </option>
                                     <option value="7">7 </option>
                                     <option value="8">8 </option>
                                     <option value="9">9 </option>
                                     <option value="10">10 </option>
                                     <option value="11">11 </option>
                                     <option value="12">12 </option>
                                     <option value="13">13 </option>
                                     <option value="14">14 </option>
                                     <option value="15">15 </option>
                                     <option value="16">16 </option>
                                     <option value="17">17 </option>
                                     <option value="18">18 </option>
                                     <option value="19">19 </option>
                                     <option value="20">20 </option>
                                     <option value="21">21 </option>
                                     <option value="22">22 </option>
                                     <option value="23">23 </option>
                                     <option value="24">24 </option>
                                     <option value="25">25 </option>
                                     <option value="26">26 </option>
                                     <option value="27">27 </option>
                                     <option value="28">28 </option>
                                     <option value="29">29 </option>
                                     <option value="30">30 </option>
                                     <option value="31">31 </option>
                                   </select>


        	                    Month
        	   	                   <select name="month">
        	   	                   	  <option value="jan">January</option>
        	   	                   	  <option value="feb">February</option>
        	   	                   	  <option value="mar">March</option>
        	   	                   	  <option value="apr">April</option>
        	   	                   	  <option value="may">May</option>
        	   	                   	  <option value="jun">June</option>
        	   	                   	  <option value="jul">July</option>
        	   	                   	  <option value="aug">August</option>
        	   	                   	  <option value="sep">September</option>
        	   	                   	  <option value="oct">October</option>
        	   	                   	  <option value="nov">November</option>
        	   	                   	  <option value="dec">December</option>
        	   	                   </select>


        	                    Year
        	   	               	   <select name="year">
        	   	               	   </select>
        	   	               </td>
    </tr>

    <tr> <!--User Name Row-->
    	<td>User Name </td> <td>:</td> <td> <input type="text" name="uname" placeholder="User Name..." value =  "<?php if(isset($_SESSION["signup_data"]))echo $_SESSION["signup_data"]["uname"];?>" onkeyup="usernameValidate(this.value)"/><span id="username_error" style="color:red;"></span></td>
	</tr>

    <tr> <!--Email Row-->
    	<td>Your Email Address</td> <td>:</td> <td> <input type="text" name="email" placeholder="xyz@dmail.com..." value =  "<?php if(isset($_SESSION["signup_data"]))echo $_SESSION["signup_data"]["email"];?>" onkeyup="emailValidate(this.value)" /><span id="email_error" style="color:red;"></span> </td>
    </tr>

    <tr> <!--Password Row-->
    	<td>Password </td> <td>:</td> <td> <input type="Password" name="pass" placeholder="password" value =  "<?php if(isset($_SESSION["signup_data"]))echo $_SESSION["signup_data"]["pass"];?>" onkeyup="passwordValidate(this.value , signupForm.cpass.value)"/><span id="password_error" style="color:red;"></span></td>
    </tr>

    <tr> <!--Confirm Password Row-->
        <td>Confirm Password </td> <td>:</td> <td> <input type="Password" name="cpass" placeholder = "RE-type password" value =  "<?php if(isset($_SESSION["signup_data"]))echo $_SESSION["signup_data"]["cpass"];?>"onkeyup="passwordValidate(signupForm.pass.value , this.value)" /></td>
    </tr>

    <tr> <!--Gender Row-->
    	<td>I am </td> <td>:</td> <td>
    		               <select name="gender">
    		               	  <option value="male">Male</option>
    		               	  <option value="female">Female</option>
    		               	  <option value="other">Other</option>
    		               	</select>

    	                 </td>
    </tr>

    <tr>
    	<td>Choose Your Profile Picture</td>
		<td>:</td>
		<td><input type = "file" name = "propic" value =  "<?php if(isset($_SESSION["signup_data"]))echo $_SESSION["signup_data"]["propic"];?>" /></td>
    </tr>

    <tr> <!--Submit button Row-->
        <td> <input type="submit" name="submit" value="Sign UP"> </td>
    </tr>

  </table>
 </form>
 <?php
 	if(isset($_SESSION["signup_data"]))
		session_unset("signup_data");
 ?>
</body>

</html>
