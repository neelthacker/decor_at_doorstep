<?php include('header.php');
	if(isset($_SESSION['signup']))
	{
		echo "<script>alert('".$_SESSION['signup']."');</script>";
		unset($_SESSION['signup']);
	}
 ?>
<!-- category -->
<section >
	<div class="page-heading ">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-md-12 ">
					<h1>Login</h1>					
				</div>
			</div>
		</div>
	</div>
	<div class="container">		
		<form class`="form-horizontal" name="login" method="post" action="process.php">
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Enter Username:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="username" required placeholder="Enter User name" name="username">
				</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Password:</label>
				<div class="col-sm-9">
					<input type="Password" class="form-control" id="password" required placeholder="Enter password" name="password">
				</div>
			</div>			

			<div class="form-group row">        
				<div class="col-sm-9 col-sm-offset-3">
					<button type="submit" class="btn btn-primary" id="catsubmit" name="login">Submit</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>				
			</div>
		</form>
	</div>
</section>


</div>
</div>
<?php include('footer.php') ?>