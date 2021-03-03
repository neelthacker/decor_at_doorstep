<?php 

    require_once("c_connection.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserNumber = $_POST['number'];
        $UserDescription = $_POST['description'];

        $query = " update user_contact set User_Name = '".$UserName."', User_Email='".$UserEmail."',User_Number='".$UserNumber."',User_Description='".$UserDescription."' where User_ID='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:index.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:index.php");
    }


?>