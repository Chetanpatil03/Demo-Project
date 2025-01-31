<?php
    session_start();
    include("connection.php");
    include("function.php");

    if (isset($_POST['signup'])) {
        if ($_POST['password'] === $_POST['re_pass']) {
            // something is posted 
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $number = $_POST['mobile'];

                if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            
                    //save to database
                    
                    $query = "INSERT INTO admin (name, username, password, mobile_no) VALUES ('$name', '$user_name','$password', '$number')";
                    $data = mysqli_query($conn, $query);
                
                    if ($data) {
                        //redirect the user in login page
                        header("location: login.php");
                        die;
                    }
                    else {
                        echo "<script> alert('Failed to create account')</script>";
                    }
    
                }
                else {
                    echo"Please Enter some valid information";
                }
            }
        else{
            echo "<script> alert('Password Does not Matched!')</script>";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="login_signup.css">
</head>
<body>
    <div class="main_signup">
    <form action="#" method="POST">
    <h1>Sign up</h1>
    <hr>
    <input type="text" name="name" id="name" placeholder="Name" required><br>
    <input type="text" name="user_name" id="user_name" placeholder="Username" required><br>
    <input type="number" name="mobile" id="mobile" placeholder="Mobile No" required><br>
    <input type="password" name="password" id="password" placeholder="Password" required><br>
    <input type="password" name="re_pass" id="re_pass" placeholder="Confirm Password"  required><br>
    <input type="submit" value="Signup" id="Signup" name="signup">
    <p> Already have an accout? Click here to <a href="login.php">Login</a></p>
    </form> 

    </div>
   
</body>
</html>