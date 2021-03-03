<?php
include_once('connection.php');

$update=false;
$specid=0;
$categoryname="";	
$description="";	
$parameter="";	

if(isset($_POST['login']))
{
	session_start();
	$uname =$_POST["username"]; 
	$pwd =$_POST["password"];
	$row=0; 
	// echo "<script>alert('$uname'+'$pwd');</script>";

	$_SESSION['msg_type']="success";

	$query="select * from employee where username = '$uname' AND password = '$pwd'";
	$result=mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result))
	{
		$uname= $row['name'];
	}

	if(mysqli_num_rows($result))
	{		
		$_SESSION['login']="Loged in Suceessfully..";
		$_SESSION['username']=$uname;
		// echo "<script>alert('Login Suceessfull');</script>";		
		header('location:index.php');	
	}else{
		echo "<script>alert('Login Unuceessfull');</script>";		

		// header('location:login.php');	
		// die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['signup']))
{
	$fname =$_POST["fullname"]; 
	$contact =$_POST["contact"]; 
	$usertype =$_POST["usertype"]; 
	$username =$_POST["username"]; 
	$password =$_POST["password"]; 
	$email =$_POST["email"]; 
	// echo "<script>alert('$fname'+'$contact'+'$usertype'+'$username'+'$password'+'$email');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into employee(name,contactno,type,username,password,email) VALUES('$fname','$contact','$usertype','$username','$password','$email')";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{	

		$_SESSION['signup']="You Suceessfully Registered..";
		// echo "<script>alert('inserted');</script>";		
		header('location:login.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['insert_category']))
{
	$categoryname =$_POST["categoryname"]; 
	// echo "<script>alert('$categoryname');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into categoryinfo(name) VALUES('$categoryname')";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('inserted');</script>";		
		header('location:add_catspec.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}



if(isset($_POST['insert_specname']))
{
	$catid =$_POST["catid"]; 
	$desc =$_POST["desc"]; 
	$param =$_POST["param"]; 
	// echo "<script>alert('$catid'+'$desc'+'$param');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into specname(catid,description,parameter) VALUES('$catid','$desc','$param')";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('inserted');</script>";		
		header('location:add_catspec.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['insert_specvalue']))
{
	
	$pid =$_POST["productname"]; 
	$specid =$_POST["specname"]; 
	$value =$_POST["value"]; 
	
	// echo "<script>alert('$pid'+'$specid'+'$value');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into specvalue(pid,specid,value) VALUES('$pid','$specid','$value')";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('inserted');</script>";		
		header('location:add_catspec.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['insert_lab']))
{
	
	$labno =$_POST["labno"]; 
	$block =$_POST["block"]; 
	$floor =$_POST["floor"]; 
	$clc =$_POST["clc"]; 
	$labname =$_POST["labname"]; 
	$dept =$_POST["dept"]; 
	$aw =$_POST["areaw"]; 
	$ah =$_POST["areah"]; 
	
	echo "<script>alert('$labno'+'$block'+'$floor'+'$clc'+'$labname'+'$dept'+'$aw'+'$ah');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into labinfo(labno,block,floor,type,labname,department,areaw,areah) VALUES('$labno','$block','$floor','$clc','$labname','$dept','$aw','$ah')";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('inserted');</script>";		
		header('location:add_labcabin.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['insert_cabin']))
{
	
	$labno =$_POST["labno"]; 
	$inchargeid =$_POST["inchargeid"]; 
	$assistantid =$_POST["assistantid"]; 

	// echo "<script>alert('$labno'+'$inchargeid'+'$assistantid');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into cabininfo(labno,inchargeid,assistantid) VALUES('$labno','$inchargeid','$assistantid')";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('inserted');</script>";		
		header('location:add_labcabin.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['insert_equip']))
{
	
	$pid =$_POST["productid"]; 
	$labno =$_POST["labno"]; 
	$uniqueno =$_POST["uniqueno"]; 
	$remarks =$_POST["remarks"]; 

	// echo "<script>alert('$pid'+'$labno'+'$uniqueno');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into equipmentinfo(pid,labno,uniqueno,remarks) VALUES('$pid','$labno','$uniqueno','$remarks')";
	$row=mysqli_query($con,$query);
	echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('inserted');</script>";		
		header('location:add_equipment.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['insert_product']))
{
	
	$pid =$_POST["billno"]; 
	$catid =$_POST["catid"]; 
	$date =$_POST["date"]; 
	$price =$_POST["price"]; 
	$qty =$_POST["qty"]; 
	$purchase =$_POST["purchase"]; 
	$maker=$_POST["maker"]; 
	$model =$_POST["model"]; 
	
	echo "<script>alert('$pid'+'$catid'+'$date'+'$price'+'$qty'+'$purchase'+'$maker'+'$model');</script>";
	
	$_SESSION['message']="Record has been saved!..";
	$_SESSION['msg_type']="success";

	$query="INSERT into productinfo(pid,catid,date,price,qty,purchase,make,model) VALUES('$pid','$catid','$date','$price','$qty','$purchase','$maker','$model')";
	$row=mysqli_query($con,$query);
	if(isset($row))
	{		
		echo "$row";
		echo "<script>alert('inserted');</script>";		
		header('location:add_product.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}


if(isset($_POST['update_specname']))
{
	$catid =$_POST["catid"]; 
	$desc =$_POST["desc"]; 
	$param =$_POST["param"]; 
	$specid =$_POST["specid"]; 

	echo "<script>alert('$catid+$desc+$param+$specid');</script>";

	$query="update  specname set catid='$catid',description='$desc',parameter='$param' where specid ='$specid'";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('Updated Suceessfully');</script>";		
		header('location:add_catspec.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}

}

if(isset($_POST['update_specvalue']))
{
	echo "alert('val');";
	$pid =$_POST["productname"]; 
	$specid =$_POST["specname"]; 
	$value =$_POST["value"]; 

	echo "<script>alert('$pid+$specid+$value');</script>";

	$query="update specvalue set value='$value' where pid='$pid' and specid ='$specid'";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('Updated Suceessfully');</script>";		
		header('location:add_catspec.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}

}


if(isset($_POST['update_equip']))
{
	// echo "<script>alert('Hiren');</script>";
	$pid =$_POST["productid"]; 
	$labno =$_POST["labno"]; 
	$uniqueno =$_POST["uniqueno"]; 
	$remarks =$_POST["remarks"]; 
	$equid =$_POST["equid"]; 

	// echo "<script>alert('$pid+$labno+$uniqueno+$remarks+$equid');</script>";

	$query="update equipmentinfo set pid='$pid',labno='$labno',uniqueno='$uniqueno',remarks='$remarks' where equid ='$equid'";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('Updated Suceessfully');</script>";		
		header('location:add_equipment.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}

if(isset($_POST['update_product']))
{
	echo "<script>alert('Hiren');</script>";
	$pid =$_POST["billno"]; 
	$catid =$_POST["catid"]; 
	$date =$_POST["date"]; 
	$price =$_POST["price"]; 
	$qty =$_POST["qty"]; 
	$purchase =$_POST["purchase"]; 
	$maker=$_POST["maker"]; 
	$model =$_POST["model"]; 

	echo "<script>alert('".$maker."');</script>";
	

	$query="update productinfo set catid='catid', date='$date', price='$price' ,qty='$qty',purchase='$purchase',make='$make',model='$model' where pid='$pid' ";
	$row=mysqli_query($con,$query);
	// echo "$row";
	if(isset($row))
	{		
		echo "<script>alert('Updated Suceessfully');</script>";		
		header('location:add_product.php');	
	}else{
		die('Could not Insert: '. mysql_error());		
	}
}
?>