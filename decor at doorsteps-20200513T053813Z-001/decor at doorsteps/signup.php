<?php include('header.php') ?>
<!-- category -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script >
	function validatePassword() {
        var validator = $("#signupform").validate({
            rules: {
                password: "required",
                cnfpassword: {
                    equalTo: "#password"
                }
            },
            messages: {
                password: " Enter Password",
                cnfpassword: " Enter Confirm Password Same as Password"
            }
        });
        if (validator.form()) {
            alert('Sucess');
        }
    }
	/*function validatePassword() {
		var pwd=document.forms.signup.password;
		var cnfpwd=document.forms.signup.cnfpassword;

	// alert(pwd.value+cnfpassword.value);	
		if(pwd.value !== cnfpwd .value)
		{
                alert("Passwords do not match.");
			// alert("Paasword Does not match !");
			return false;
		}
	}*/

	// $(function () {
 //        $("#signup").click(function () {
 //            var password = $("#password").val();
 //            var confirmPassword = $("#cnfpassword").val();
 //            if (password != confirmPassword) {
 //                alert("Passwords do not match.");
 //                return false;
 //            }
 //            return true;
 //        });
 //    });
	
</script>
<section >
	<div class="page-heading ">
		<div class="container-fluid">
			<div class="row ">
				<div class="col-md-12 ">
					<h1>Sign Up </h1>					
				</div>
			</div>
		</div>
	</div>
	<div class="container">		
		<form class="form-horizontal" name="signupform" id="signup" method="post" action="process.php">
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Full Name:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="fullname" required placeholder="Enter Category name" name="fullname">
				</div>
			</div>			
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Contact no:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="contact" required placeholder="Enter Contact no" name="contact">
				</div>
			</div>			
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">User Type:</label>
				<div class="col-sm-9">
					<select class="form-control" id="sel1" name="usertype">
						<option>Select Option</option>
						<option value="1">Admin</option>						
						<option value="2">Staff</option>						
					</select>
				</div>
			</div>			
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">User Name:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="username" required placeholder="Enter User name" name="username">
				</div>
			</div>			
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Password:</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="password" required placeholder="Enter Password" name="password">
				</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Confirm Password:</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="cnfpassword" required placeholder="Enter Confirm Password" name="cnfpassword" >
				</div>
			</div>			
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Email:</label>
				<div class="col-sm-9">
					<input type="email" class="form-control" id="email" required placeholder="Enter Email" name="email">
				</div>
			</div>			

			<div class="form-group row">        
				<div class="col-sm-9 col-sm-offset-3">
					<button type="submit" class="btn btn-primary" onclick="return validatePassword()" id="signup" name="signup">Submit</button>
					<button type="reset" class="btn btn-danger" >Reset</button>
				</div>				
			</div>
		</form>
	</div>
</section>

</div>
</div>
<?php include('footer.php') ?>