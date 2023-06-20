<?php
    session_start();
    class regClass extends config{
    
        public function registerAccounts() {
                
                $firstname = $this->conn->real_escape_string($_POST['firstname']);
                $middlename = $this->conn->real_escape_string($_POST['middlename']);
                $lastname = $this->conn->real_escape_string($_POST['lastname']);
                $password = $this->conn->real_escape_string($_POST['password']);
                $cpassword = $this->conn->real_escape_string($_POST['cpassword']);
                $email = $this->conn->real_escape_string($_POST['email']);
                $usertype = $this->conn->real_escape_string($_POST['usertype']);

                if ($password == $cpassword && $usertype == 'administrator') {
                    $sql = "SELECT * FROM user WHERE email='$email'";
                     $result = $this->conn->query($sql);
                    if (!$result->num_rows > 0) {
                        $sql = "INSERT INTO user(`firstname`,`middlename`,`lastname`,`password`,`email`,`usertype`) 
                        VALUES('$firstname','$middlename','$lastname','$password','$email','$usertype')";
                        $result = $this->conn->query($sql);
                        
                        if ($result) {
                            $_SESSION['status'] = "Good job";
                            $_SESSION['status_text'] = "Wow! User Registration Completed.";
                            $_SESSION['status_code'] = "success";  
                        }
                        else { 
                            $_SESSION['status'] = "Error";
                            $_SESSION['status_text'] = "Your record is not inserted.";
                            $_SESSION['status_code'] = "error";      
                        }
                    }
                    else {
                        $_SESSION['status'] = "Warning";
                        $_SESSION['status_text'] = "Email already exist.";
                        $_SESSION['status_code'] = "warning";
                        
                    }
                }
                else {
                    $_SESSION['status'] = "Error";
                    $_SESSION['status_text'] = "Confirm password does not matched.";
                    $_SESSION['status_code'] = "error";
                    
                }
                
        }
        
    }
    $data = new regClass();
    
    