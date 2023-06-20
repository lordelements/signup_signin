<?php
    // session_start();
    class loginClass extends config{
        
            public function login() {
            
                $email = $this->conn->real_escape_string($_POST['email']);
                $password = $this->conn->real_escape_string($_POST['password']);

                $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";
                $user = $this->conn->query($sql);

                // var_dump($user);
                
                if (mysqli_num_rows($user) == 1) {  
                    $rows  = mysqli_fetch_assoc($user);
                    if ($rows ['usertype'] == 'administrator') {
                        $_SESSION['user'] = $rows;
                        $_SESSION['success']  = "Welcome to Admin Dashboard";
                        header('location: index.php');		  
                    }
                    if ($rows ['usertype'] == 'staff') {
                        $_SESSION['user'] = $rows;
                        $_SESSION['success']  = "Welcome to user dashboard";
                        header("Location: userindex.php");		  
                    }
                    if ($rows (empty($email))) {
                        $_SESSION['user'] = $rows;
                        $_SESSION['success']  = "email is required";
                        header('location: login.php');		
                    }
                    if ($rows (empty($password))) {
                        $_SESSION['user'] = $rows;
                        $_SESSION['success']  = "Password is required";
                        header('location: login.php');		
                    }
                    
                }
        }
    }

    // $data = new loginClass();