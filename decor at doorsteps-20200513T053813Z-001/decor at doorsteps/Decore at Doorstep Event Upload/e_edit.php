<?php  
 $connect = mysqli_connect("localhost", "root", "", "decor_at_doorstep");
 $ID = $_GET['GetID'];
    $query = " select * from event where e_Id='".$ID."'";
    $result = mysqli_query($connect,$query);


    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['e_Id'];
        $Date= $row['e_upload_date'];
        $Type= $row['e_Type'];
        $Venue= $row['e_Venue'];
        //$Image = $row['name'];
        $Description = $row['e_Description'];
    }

?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Event Edit Form</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Event Edit Form</h3>  
                <br />  
                <form action="e_update.php?ID=<?php echo $ID ?>" method="post">
                      
                      <input type="date" name="date" id="details" placeholder="Date" value="<?php echo $Date ?>">
                     <br/><br/>  
                     <label for="type">Choose Event Category </label>
                     <select id="type" name="type" value="<?php echo $Type ?>">
                        <option value="Birthday Party">Birthday Party</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Baby Shower">Baby Shower</option>
                        <option value="Shop Opening">Shop Opening</option>
                        <option value="Party">Party</option>
                        <option value="Other">Other</option>
                     </select><br/><br/>
                     <input type="input" name="venue" id="venue" placeholder="Venue" value="<?php echo $Venue ?>">
                     <br/><br/>
                    <!-- <input type="file" name="image" id="image" value= "<? //echo '<img src="data:image/jpeg;base64,'.base64_encode($Image ).'" height="200" width="200" class="img-thumnail" '; ?>
                     <br />   -->  
                     <input type="input" name="details" id="details" placeholder="Description" value="<?php echo $Description ?>">
                     <br/><br/>
                     <button class="btn btn-primary" name="update">Update</button>  
                </form>  
                <br />  
                <br />  
                
           </div>  
      </body>  
 </html>