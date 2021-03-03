<?php 

    require_once("c_connection.php");
    $query = "SELECT * FROM user_contact ORDER BY User_ID DESC";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
    <center>

        <div class="container" style="width:500px;">
            <div style = "position:relative; top:80px;">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> User ID </td>
                                <td> User Name </td>
                                <td> User Email </td>
                                <td> User Number </td>
                                <td> User Description </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['User_ID'];
                                        $UserName = $row['User_Name'];
                                        $UserEmail = $row['User_Email'];
                                        $UserNumber = $row['User_Number'];
                                        $UserDescription = $row['User_Description'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $UserName ?></td>
                                        <td><?php echo $UserEmail ?></td>
                                        <td><?php echo $UserNumber ?></td>
                                        <td><?php echo $UserDescription ?></td>
                                        <td><a class="btn btn-warning bt-xs update" href="c_edit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                                        <td><a class="btn btn-danger bt-xs delete" href="c_delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                        <br/><a class="btn btn-warning bt-xs create" href="index.php">Insert</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>