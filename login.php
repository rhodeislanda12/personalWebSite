<!--Created by HTA David Bloom, 11/27/06, for CS0002
 * This is the login and registration page.
 * It includes a form for registering a new user of your page
 * as well as the ability to login.  
 * There is no PHP in this page, only two HTML forms that call
 * other php pages.  You may and should add your own HTML to this page
 * that changes it stylistically, while leaving the forms intact.
 -->

<html>
<head>
<title>Login Page</title>
</head>
<body>

<center>
<body bgcolor="000000">

<font color="48D1CC">

<H3>Please Login:</H3>
<FORM METHOD="POST" ACTION="logincheck.php"> 
Username:
<INPUT TYPE="text" NAME="login_username" SIZE="30">
<br>
Password:
<INPUT TYPE="text" NAME="login_password" SIZE="30">
<br>
<INPUT TYPE="submit" name = "submit" value="Login">
<INPUT TYPE="reset">
</FORM>
<br/>
<br/>
<br/>
<h3>To Register:</h3>
<FORM METHOD="POST" ACTION="register.php"> 
Username:
<INPUT TYPE="text" NAME="register_username" SIZE="30">
<br>
Password:
<INPUT TYPE="text" NAME="register_password" SIZE="30">
<br>
<INPUT TYPE="submit" name = "submit" value="Register">
<INPUT TYPE="reset">
</FORM>
</body>
</center>
</font>
</html>