<?php
    // session_start();
    class loginClass extends config{
                
            public function validate_input($data) {
                    
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                $data = $this->conn->real_escape_string($data);
                return $data;
            }

            public function login() {
            
                $username = $this->validate_input($_POST['username']);
                $password = $this->validate_input($_POST['password']);

                $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
                $user = $this->conn->query($sql);

                    if (mysqli_num_rows($user) == 1) {  
                        $rows  = mysqli_fetch_assoc($user);
                        if ($rows ['usertype'] == 'administrator') {
                            $_SESSION['user'] = $rows;
                            $_SESSION['status'] = "Good job";
                            $_SESSION['status_text'] = "Welcome to admin Dashboard.";
                            $_SESSION['status_code'] = "success";
                            
                            $_SESSION['usertype'] = $rows['usertype'];
                            $_SESSION['username'] = $rows['username'];
		                    $_SESSION['password'] = $rows['password'];
                            header('location: admin/index.php');		  
                        }
                        else if ($rows ['usertype'] == 'staff') {
                            $_SESSION['user'] = $rows;
                            $_SESSION['status'] = "Good job";
                            $_SESSION['status_text'] = "Welcome to user dashboard";
                            $_SESSION['status_code'] = "success";
                            
                            $_SESSION['usertype'] = $rows['usertype'];
                            $_SESSION['username'] = $rows['username'];
		                    $_SESSION['password'] = $rows['password'];
                            header("Location:  index.php");		  
                        }
                       else {
                        $_SESSION['status_text'] = "Username or Password is wrong";
                       }
                        
                    }
               
        }
    }

    // $data = new loginClass();