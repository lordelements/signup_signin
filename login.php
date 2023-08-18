
    <?php
        $pageTitle = "SIGN IN PANEL";
        require_once "private/functions.php";
        
        if (isset($_SESSION['username'])) {
            $rows ['usertype'] == 'administrator';
            $_SESSION['username'] = $rows['username'];
		    $_SESSION['password'] = $rows['password'];
            header("Location: admin/index.php");
            // $_SESSION['alert_msg'] = 'You are authorize to access administrator dashboard!';
            
        }   
        else if (isset($_SESSION['username'])) {
            $rows ['usertype'] == 'staff';
            $_SESSION['username'] = $rows['username'];
		    $_SESSION['password'] = $rows['password'];
            header("Location: index.php");
        }
        
        if (isset($_POST['sigin'])) {
            $data = new loginClass();
            $insLog = $data->login();
        }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  if(isset($pageTitle)) {echo $pageTitle; } else{echo 'SIGN IN_PANEL';}?></title>
    <!-- <link rel="stylesheet" href="./assets/css/login.css"> -->
    <link rel="stylesheet" href="admin/dist/styles.css">
</head>
<body class="h-screen font-sans login bg-cover">

    <!-- <form action="" method="post">
        <div class="card">

            <div class="title">
                <h2>Log in</h2>
            </div>
           
            <div class="input-group">
                <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
                <span id="usernameError" class="error"></span>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="pass" placeholder="Password" autocomplete="off" required>
                <span id="passwordError" class="error"></span>
            </div>
            
            <div class="input-btn">
                <input type="submit" id="btn" name="sigin" value="Log in">
            </div>
            <div class="show-pass-btn">
             <input type="checkbox" onclick="myFunction()">Show password
            </div>
            <a href="#" class="forgot-pass">Forgot password</a>
            <div class="signup-here">
             <p>Don't have account? <a href="register.php">Sign up here</a></p>
            </div>
            
        </div>
    </form> -->

    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post">
                <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
                <div class="">
                <label class="block text-sm text-gray-00" for="username">Username</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" 
                name="username" type="text" required="" placeholder="User Name" aria-label="username">
                </div>
                <div class="mt-2">
                <label class="block text-sm text-gray-600" for="password">Password</label>
                <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" 
                name="password" type="password" required="" placeholder="*******" aria-label="password" autocomplete="off">
                </div>
                <div class="mt-4 items-center justify-between">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="sigin" type="submit">Login</button>
                <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="register.php">
                Don't have account ?
                </a>
            </form>

            </div>
        </div>
    </div>
   
    <script src="./assets/js/sweetalert2.min.js"></script>
    <script src="./assets/js/loginshowpass.js"></script>
   <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

   <?php require_once ("sweetalert_msg.php");?>

    <script>
        

        // validate form
        // const username = document.getElementById("username"),
        //       pass = document.getElementById("pass"),
        //       btn = document.getElementById("btn");

        //     btn.addEventListener("click", (e) => {
        //     e.preventDefault();

        //     if (pass == "" || pass == null) {
        //         alert("Password must be filled out");
        //         return false;
        //     }
        //     if (username == "" || username == null) {
        //         alert("username must be filled out");
        //         return false;
        //     }
        // });
    </script>
    
<style>

</style>
</body>
</html>