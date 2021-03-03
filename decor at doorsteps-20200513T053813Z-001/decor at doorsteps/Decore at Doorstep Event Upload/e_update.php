<?php 

    $connect = mysqli_connect("localhost", "root", "", "decor_at_doorstep");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $Date = $_POST['date'];
        $Type = $_POST['type'];
        // $Image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $Venue= $_POST['venue'];
        $Description = $_POST['details'];

        $query = " update event set e_upload_date='".$Date."',e_Type='".$Type."',e_Venue='".$Venue."', e_Description='".$Description."' where e_Id='".$ID."'";
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