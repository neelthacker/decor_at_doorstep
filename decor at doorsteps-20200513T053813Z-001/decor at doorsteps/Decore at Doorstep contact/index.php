

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
table, th, td {
  border: 1px solid black;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery.min.js"></script>  
    <link rel="stylesheet" href="bootstrap.min.css" />  
    <script src="bootstrap.min.js"></script>   
    <title>Registration Form</title>
</head>
<body class="bg-dark">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <center>
                            <h3 class="bg-success text-white text-center py-3"> Registration Form in PHP</h3>
                        </center>
                        </div>
                        <div class="card-body">
                            <center>
                            <form action="c_insert.php"  method="post" >
                                <input type="text" class="form-control mb-2" placeholder=" Full Name " name="name"><br/><br/>
                                <input type="email" class="form-control mb-2" placeholder=" Your Email " name="email"><br/><br/>
                                <input type="text" class="form-control mb-2" placeholder=" Your Number " name="number"><br/><br/>
                                <input type="text" class="form-control mb-2" placeholder=" Description " name="description"><br/><br/>
                                <button class="btn btn-primary" name="submit">Submit</button><br/><br/>
                                <a href="c_view.php">View Records</a>
                            </form>
                            
                        </center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>