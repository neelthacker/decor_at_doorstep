<?php  
 $connect = mysqli_connect("localhost", "root", "", "decor_at_doorstep");  
 if(isset($_POST["insert"]))  
 {  
      $Date=$_POST['date'];
      $Type=$_POST['type'];
      $Image1 = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
      $Image2 = addslashes(file_get_contents($_FILES["image2"]["tmp_name"]));
      $Image3 = addslashes(file_get_contents($_FILES["image3"]["tmp_name"]));
      $Venue=$_POST['venue']; 
      $Description = $_POST['details'];
      $query = "INSERT INTO event(e_upload_date,e_Type,e_Picture1,e_Picture2,e_Picture3,e_Venue,e_Description) VALUES ('$Date','$Type','$Image1','$Image2','$Image3','$Venue','$Description')";  
      if(mysqli_query($connect, $query))  
      {  
           echo 'your data is inserted';  
      }  
 }  
?>  

 <!DOCTYPE html>  
 <html>  
      <head> 
             
           <title>Event upload</title>  
             <script src="jquery.min.js"></script>  
             <link rel="stylesheet" href="bootstrap.min.css" />  
             <script src="bootstrap.min.js"></script>   
            
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Event Upload</h3>  
                <br />  
                
                <form method="post" enctype="multipart/form-data">  
                     
                     
                     <input type="file" name="image1" id="image1" />  
                     <br />  
                     <input type="file" name="image2" id="image2" />  
                     <br />  
                     <input type="file" name="image3" id="image3" />  
                     <br />
                     <label for="date">Upload Date:</label>
                     <input type="date" id="date" name="date"><br/><br/>
                     <label for="type">Choose Event Category </label>
                     <select id="type" name="type">
                        <option value="Birthday Party">Birthday Party</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Baby Shower">Baby Shower</option>
                        <option value="Shop Opening">Shop Opening</option>
                        <option value="Party">Party</option>
                        <option value="Other">Other</option>
                     </select><br/><br/>  
                     <input type="input" name="venue" id="venue" placeholder="Venue">
                     <br/><br/>
                     <input type="input" name="details" id="details" placeholder="Description">
                     <br/>
                     <br/>
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
  
                <br />  
                <br />  
                <div style = "position:relative;  left:-340px; ">
                <table align="left" class="table table-bordered">  
                     <tr> 
                          <th>ID</th>
                          <th>Image1</th>
                          <th>Image2</th>
                          <th>Image3</th>   
                          <th>Date</th>
                          <th>Type</th>
                          <th>Venue</th>
                          <th>Description</th>  
                          <th>Edit</th>
                          <th>Delete</th>
                     </tr>  
                <?php  
                $query = "SELECT * FROM event ORDER BY e_Id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                    ?>
                      
                      <?php
                      echo"<tr>";
                      $ID = $row['e_Id'];
                      $Date=$row['e_upload_date'];
                      $Type=$row['e_Type'];
                      $Picture1=$row['e_Picture1'];
                      $Picture2=$row['e_Picture2'];
                      $Picture3=$row['e_Picture3'];
                      $Venue=$row['e_Venue'];
                      $Description=$row['e_Description'];
                      echo"<td>" .$ID. "</td>";
                      echo '    
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($Picture1 ).'" height="200" width="200" class="img-thumnail" />  
                               </td>    
                     ';
                     echo '    
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($Picture2 ).'" height="200" width="200" class="img-thumnail" />  
                               </td>    
                     ';
                     echo '    
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($Picture3 ).'" height="200" width="200" class="img-thumnail" />  
                               </td>    
                     ';   
                     echo"<td>" .$Date. "</td>";
                      echo"<td>" .$Type. "</td>";
                      echo"<td>".$Venue."</td>";
                     echo"<td>" .$Description. "</td>";
                   ?>
                   
                    <td><a class="btn btn-warning bt-xs update" href="e_edit.php?GetID=<?php echo $ID ?>">Edit</a></td>
                    <td><a class="btn btn-danger bt-xs delete" href="e_delete.php?Del=<?php echo $ID ?>">Delete</a></td> 
                 <?php
                 echo"</tr>";
               }
               ?>
                </table>
               </div>
           </div>  
      </body>  
 </html>  
 <script>
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  