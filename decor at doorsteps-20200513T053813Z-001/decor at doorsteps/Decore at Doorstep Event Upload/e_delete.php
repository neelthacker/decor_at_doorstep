<?php 
        $connect = mysqli_connect("localhost", "root", "", "decor_at_doorstep");

        if(isset($_GET['Del']))
        {
            $ID = $_GET['Del'];
            $query = " delete from event where e_id = '".$ID."'";
            $result = mysqli_query($connect,$query);

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