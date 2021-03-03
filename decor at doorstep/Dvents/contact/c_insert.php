<?php

    $con = mysqli_connect("localhost", "root", "", "decor_at_doorstep");

    if(isset($_POST['submit']))
    {
        
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserNumber = $_POST['number'];
            $UserDescription = $_POST['description'];

            $query = " insert into user_contact (User_Name, User_Email,User_Number,User_Description) values('$UserName','$UserEmail','$UserNumber','$UserDescription')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:index.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        
    }
    else
    {
        header("location:index.php");
    }

?>
