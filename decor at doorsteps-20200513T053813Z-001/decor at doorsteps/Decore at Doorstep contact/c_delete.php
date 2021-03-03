<?php 

        require_once("c_connection.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from user_contact where User_ID = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:c_view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:c_view.php");
        }

?>
