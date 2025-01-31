<?php

    error_reporting(0);

    
    function check_login($conn){
        if (isset($_SESSION['user_id'])) {
            
            $id= $_SESSION['user_id'];
            $query = "SELECT * FROM admin WHERE id = '$id' limit 1";
 
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                
                $user_data = mysqli_fetch_assoc($result);

                return $user_data;
            }

        }
        // redirect to login 
        header("location: login.php");
        die;
    }

    