
    <?php
        require_once "../private/functions.php";
        if (isset($_POST['submit'])) {
            $data = new loginClass();
            $insLog = $data->login();
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>

    <?php require "sweetalert_msg.php";?>

    <form action="" method="post" name="formValidate" id="registrationForm" onsubmit="validateForm(event)">
        <div class="card">
            <div class="title">
                <h2>Log in</h2>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
                <span id="emailError" class="error"></span>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="pass" placeholder="Password" autocomplete="off">
                <span id="passwordError" class="error"></span>
            </div>
            
            <div class="input-btn">
                <input type="submit" name="submit" value="Log in">
            </div>
            <div class="show-pass-btn">
             <input type="checkbox" onclick="myFunction()">Show password
            </div>
            <a href="#" class="forgot-pass">Forgot password</a>
            <div class="signup-here">
             <p>Don't have account? <a href="register.php">Sign up here</a></p>
            </div>
            
        </div>
    </form>

    <script src="assets/js/sweetalert2.min.js"></script>
    <script>
        // show and hide password
        function myFunction() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    // validate form
    function validateForm(event) {
      event.preventDefault(); // Prevent form submission

      // Reset error messages
      document.getElementById("emailError").textContent = "";
      document.getElementById("passwordError").textContent = "";

      // Get form values
      var email = document.getElementById("email").value.trim();
      var password = document.getElementById("pass").value;

      
      // Validate email field
      if (email == "" || email == null) {
        document.getElementById("emailError").textContent = window.alert("Email is required.");
        return;
      }

      // Validate password field
      if (password == "" || password == null) {
        document.getElementById("passwordError").textContent = window.alert("Password is required.");
        return;
      }
      if (password.length < 6) {
        document.getElementById("passwordError").textContent = window.alert("Password length must be 8 characters long.");
        return;
      }

      // Proceed with form submission
      document.getElementById("registrationForm").submit();
    }
    </script>
    
<style>

</style>
</body>
</html>