<?php
    session_start();
    include("connection.php");
    include("function.php");

    error_reporting(1);

    
    if ($_SERVER['REQUEST_METHOD']== "POST" ) {
        // something is posted 
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            
                //read from the database 
                $query = "SELECT *  FROM admin WHERE username = '$user_name' limit 1 ";
                
                $result = mysqli_query($conn,$query);
    
                if ($result) {
                    if ($result && mysqli_num_rows($result) > 0) {
                    
                        $user_data = mysqli_fetch_assoc($result);
                        
                         if ($user_data['password'] === $password) {
                            
                            $_SESSION['user_id'] = $user_data['id'] ;

                            //redirect the user in home page
                            header("location: index.php");
                            die;                        
                        }
                    }
                }
                echo "<script> alert('Password Does not matched')</script>";
    
    
            }
            else {
                echo"Please Enter some valid information";
            }
        }
  
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login_signup.css">
    <style>
    </style>
</head>
<body>
    <div class="main_login">
    <form action="" method="post">
    <h1>Login</h1>   
    <hr>
    <input type="text" name="user_name" id="user_name" placeholder="Username" required><br>
    <input type="password" name="password" id="password" placeholder="password" required><br>
    <input type="submit" value="Login" id="Login">
    <p>Doesn't have accout? <a href="signup.php">Create one</a></p>
    </form> 

    </div>
   
</body>
</html>