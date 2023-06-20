<?php
    require_once "../private/functions.php";
    if (isset($_POST['submit'])) {
        $insT = $data->registerAccounts();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./assets/css/register.css">
</head>
<body>

    <?php require "sweetalert_msg.php";?>
    <form action="" method="post" name="myForm" onsubmit="return validateForm()" >
        <div class="card">
            <!-- <div class="alert" style="background-color: #; color:azure;">
                <?php echo $_SESSION['status_text'];?>
            </div> -->
            <div class="profile-img">
                <img src="" alt="" id="img">
            </div>
            <div class="title">
                <h2>Create account</h2>
            </div>

            <div class="input-group">
              <input type="file" name="img" id="img-file">
            </div>
            <div class="input-group">
                <input type="text" name="firstname" id="firstname" placeholder="First Name" autocomplete="off">
            </div>
            <div class="input-group">
                <input type="text" name="middlename" id="middlename" placeholder="Middle Name" autocomplete="off">
            </div>
            <div class="input-group">
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" autocomplete="off">
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
            </div>
            <div class="input-group">
                <input type="password" name="password" id="pass" placeholder="Password" autocomplete="off">
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" id="cpass" placeholder="Confirm Password" autocomplete="off">
            </div>
            <div class="show-pass-btn">
             <input type="checkbox" onclick="myFunction()">Show password
            </div>
            <div class="input-btn">
                <input type="submit" name="submit" value="Create account">
            </div>
            <div class="signin-here">
             <p>Already have an account?<a href="login.php"> Sign in here</a></p>
            </div>
            <!-- <p class="signin-here">Already have an account?<a href="login.php"> Sign in here</a></p> -->
                <input id="usertype" type="hidden" name="usertype" value="administrator"/>
             
        </div>
    </form>

<!-- <script src="assets/js/validate.js"></script> -->
<script src="./assets/js/sweetalert2.min.js"></script>
<script src="assets/js/passshow.js"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    swal("Here's the title!", "...and here's the text!");
    </script> -->

    <script>
        function validateForm() {
            let fname = document.documentElementByid["myForm"]["firstname"].value;
            let mname = document.documentElementByid["myForm"]["middletname"].value;
            let lname = document.documentElementByid["myForm"]["lastname"].value;
            let pass = document.documentElementByid["myForm"]["password"].value;
            let cpass = document.documentElementByid["myForm"]["cpassword"].value;
            let email = document.documentElementByid["myForm"]["email"].value;
            
            if (fname == "") {
                window.alert("First Name must be filled out");
                return false;
            }
            if (mname == "") {
                window.alert("Middle Initial must be filled out");
                return false;
            }
            if (lname == "") {
                window.alert("Last Name must be filled out");
                return false;
            }
            if (pass == "") {
                window.alert("Password must be filled out");
                return false;
            }
            if (cpass == "") {
                window.alert("Confirmed Password must be filled out");
                return false;
            }
            if (email == "") {
                window.alert("Email must be filled out");
                return false;
            }
            }

            // profile 
            const image = document.getElementById("img"),
                  img_file = document.getElementById("img-file");

                  img_file.addEventListener("change", (e) => {
                    e.preventDefault();
                    img.src = URL.createObjectURL(img_file.files[0]);
                  });
    </script>
</body>
</html>

<style>

</style>