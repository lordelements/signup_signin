
    <?php
        $pageTitle = "SIGN UP PANEL";
        require_once "private/functions.php";
        
        if (isset($_POST['signup'])) {
            $data = new regClass();
            $insT = $data->registerAccounts();
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  if(isset($pageTitle)) {echo $pageTitle; } else{echo 'SIGN UP_PANEL';}?></title>
    <!-- <link rel="stylesheet" href="./assets/css/register.css"> -->
    <link rel="stylesheet" href="admin/dist/styles.css">
</head>
<body class="h-screen font-sans login bg-cover">

    <!-- <form action="" method="post" name="myForm" enctype="multipart/form-data">
        <div class="card">
            <div class="profile-img">
                <img src="" alt="" id="img">
            </div>
            <div class="title">
                <h2>Create account</h2>
            </div>
            
            <div class="input-group">
              <input type="file" name="image" id="img-file">
            </div>
            <div class="input-group">
                <input type="username" name="username" id="username" placeholder="Username" autocomplete="off" required>
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="pass" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" id="cpass" placeholder="Confirm Password" autocomplete="off" required>
            </div>

            <div class="show-pass-btn">
             <input type="checkbox" onclick="myFunction()"> Show password
            </div>
            
            <div class="input-btn">
                <input type="submit" id="submit" name="signup" value="Create account">
            </div>
            <div class="signin-here">
             <p>Already have an account?<a href="login.php"> Sign in here</a></p>
            </div>
                <input id="usertype" type="hidden" name="usertype" value="administrator"/>
        </div>
    </form> -->

    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post" enctype="multipart/form-data">
                <p class="text-gray-800 font-medium text-center text-lg font-bold">Create account</p>
                <div class="flex justify-center">
                    <img class="object-cover mt-6 h-12 w-12 rounded-full" src="./assets/img/bg.jpeg" alt="" id="img">
                </div>
                <div class="">
                    <label class="block text-sm text-gray-00" for="username">Username</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" 
                    name="username" type="text" required="" placeholder="User Name" aria-label="username">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Email</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" 
                    name="email" type="email" required="" placeholder="Email" aria-label="email" autocomplete="off">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Password</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" 
                    name="password" type="password" required="" placeholder="*******" aria-label="password" autocomplete="off">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Confirm Password</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" 
                    name="cpassword" type="password" required="" placeholder="*******" aria-label="password" autocomplete="off">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="profilepic">Your picture</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded"
                     name="image" id="img-file" type="file" required=""aria-label="profilepic" autocomplete="off">
                </div>
                <div class="mt-4 items-center justify-between">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                type="submit" id="submit" name="signup" >Sign up</button>

                <input id="usertype" type="hidden" name="usertype" value="administrator"/>
                <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="login.php">
                Don't have account ?
                </a>
            </form>

            </div>
        </div>
    </div>

    <script src="./assets/js/validate.js"></script>
    <script src="./assets/js/sweetalert2.min.js"></script>
    <script src="assets/js/passshow.js"></script>
    <script src="assets/js/imageshow.js"></script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <!-- <script>
       swal("Here's the title!", "...and here's the text!");
    </script> -->
<?php require_once ("sweetalert_msg.php");?>
</body>
</html>

<style>
  
    /* form {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form .card {
        background-color: #ccc;
        border-radius: 4px;
        box-shadow:  0 5px 9px rgba(0, 0, 0, 0.90);
        padding: 2rem;
        max-width: 90rem;
        margin: 10px 20px 10px 20px;
    }
   
    .input-group,
    .input-group-wide,
    .input-btn {
        margin: 2px auto;
        padding: 10px;
        max-width: 50rem;
        width: 100%;
    }
    input[type="email"],
    input[type="username"],
    input[type="password"] {
        width: 23.5em;
        margin: 2px auto;
    }
  
    input {
        padding: 13px;
        height: 10px;
        width: 14.9em;
        max-width: 50em;
        border-radius: 4px;
        outline: none;
        overflow: hidden;
    }

    .input-btn input[type="submit"] {
        background-color: #fff;
        font-weight: 300;
        font-size: 13px;
        padding: 10px;
        max-width: 50rem;
        height: 3em;
        width: 200px;
        text-transform: uppercase;

}

.signin-here a {
    text-decoration: none;
    color: #0A6EBD;
    text-align: left;
} */
</style>