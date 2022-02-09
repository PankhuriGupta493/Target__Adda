
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="style.css">
	<style>
	/* Style the header */
        .head {
            font-family: Britannic Bold;
            padding: 2px;
            text-align: center;
            color: black;
            background-color: lightpink;
            background-image: url(logo.png);
            background-size: 250px 130px;
            background-position: left bottom, left top;
            background-repeat: no-repeat, repeat;
        }
.navbar {
            overflow: hidden;
            background-color: black;
            font-family: Arial;
            cursor: pointer;
        }
/* Links inside the navbar */
        .navbar a {
            float: left;
            font-size: 20px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            cursor: pointer;
        }
</style>
</head>
<body>
<div class="head">
        <h1>TARGET ADDA</h1>
        <h2>UPSC,SSC,Railway,BANK</h2>
    </div>
<div class="navbar">
        <b> <a href="index.php">Home</a>
            <a href="mcq.php">Study Material</a>
            <a href="Previous Year.html">Previous Year Question Paper</a>
			<a href="sign in.php">Free Test</a>
            <a href="contactus.php">Contact Us</a>
            <a href="team.php">Team Member</a>
</div>
<br>
<div class="header">
	<h2>User Login </h2>
</div>
<form method="post" action="testquiz.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="" required>
		</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Login</button>
	</div>
	<a href="registration.php">New User Click Here</a>
	</form>
</body>
</html>