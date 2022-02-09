<!DOCTYPE html>
<html>

<head>
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h2>User Register </h2>
    </div>
    <form method="post" action="connection.php">

        <div class="input-group">
            <label>First Name:</label>
            <input id="first_name" type="text" name="username" value="" placeholder="first name" required>
        </div>
        <div class="input-group">
            <label>Last Name:</label>
            <input id="last_name" type="text" name="lastname" placeholder="last name" value="">
        </div>
        <div class="input-group">
            <label>Email:</label>
            <input id="email" type="email" name="email" placeholder="email" required>
        </div>
        <div class="input-group">
            <label>Mobile:</label>
            <input id="mobile" type="text" name="mobile" placeholder="mobile no.">
        </div>
        <div class="input-group">
            <label>State:</label>
            <input id="State" type="text" name="state" placeholder="state name" required>
        </div>
        <div class="input-group">
            <label>Password:</label>
            <input id="password" type="password" name="password" placeholder="password" required>
        </div>
        <div class="input-group">
            <label>Confirm-Password</label>
            <input id="confirm_password" type="password" name="confirmpassword" placeholder="confirm-password" required>
        </div>
        <div class="input-group">
            <button onclick="register()" type="submit" class="btn" name="register_btn">Register</button>
        </div>


    </form>
</body>
</html>
<script>
    function register(){
        let first_name = document.getElementById("first_name").value;
        let last_name = document.getElementById("last_name").value;
        let email = document.getElementById("email").value;
        let mobile = document.getElementById("mobile").value;
        var state = document.getElementById("State").value;
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("confirm_password").value;

       if(first_name.length<3){
           alert("Please Fill Correct First Name")
           return false;
        }else  if (last_name.length < 3) {
           alert("Please Fill Correct Last Name")
           return false;
        }else if(!email.includes('@')&&!email.includes('.')){
            alert("Please Fill Correct Email")
            return false;
        }else if(mobile.length!==10){
            alert("Please Fill Correct Mobile No");
            return false;
        }else if(state.length<5){
            alert("Please Fill Correct State Name");
            return false;
        }else if(password.length<8){
            alert("You Need make password more than 8 digit");
            return false;
        }else if(password!==repassword){
            alert("Please Fill Correct password");
            return false;
        }else{
            alert("Congrats");
        }
    }
</script>