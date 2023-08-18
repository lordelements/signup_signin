<?php
    // session_start();
    class regClass extends config{
                
       public function validate_input($data) {
            
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = $this->conn->real_escape_string($data);
            return $data;
        }
        public function registerAccounts() {
                $username = $this->validate_input($_POST['username']);
                $password = $this->validate_input($_POST['password']);
                $cpassword = $this->validate_input($_POST['cpassword']);
                $email = $this->validate_input($_POST['email']);
                $usertype = $this->validate_input($_POST['usertype']);

                            
                $filename = $_FILES["image"]["name"];
                $tempname = $_FILES["image"]["tmp_name"];
                $img_size = $_FILES['image']['size'];
                $folder = "./image_upload/" . $filename;

              
                // Check if file already exists
                if (file_exists($folder)) {
                    $_SESSION['status'] = "Error";
                    $_SESSION['status_text'] = "Sorry, file already exists.";
                    $_SESSION['status_code'] = "error";
                // Check file size
                    if ($img_size > 500000) {
                        $_SESSION['status'] = "Error";
                        $_SESSION['status_text'] = "Sorry, your file is too large.";
                        $_SESSION['status_code'] = "error";
                    }
                }
                            
                if ($password == $cpassword && $usertype == 'administrator') {
                    $sql = "SELECT * FROM user WHERE email='$email'";
                     $result = $this->conn->query($sql);
                    
                    if (!$result->num_rows > 0) {
                        $sql = "INSERT INTO user(`image`,`username`,`password`,`email`,`usertype`) 
                        VALUES('$filename','$username','$password','$email','$usertype')";
                        move_uploaded_file($tempname, $folder);
                        $result = $this->conn->query($sql);
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";

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
    // $data = new regClass();
    
    