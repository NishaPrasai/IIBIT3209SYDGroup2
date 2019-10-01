
<?php
include 'db.php';
$data = new Databases;
$msg = array();
$error=array();

$extra = '';

function select($table_name, $extra_query){
	
}

	if(isset($_POST['submit'])){
		$str=rand(); 
		$result = md5($str); 
		$fname = $_POST['fname'];
		$lname =$_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$pass = $_POST['password'];
		$c_pass = $_POST['c_pass'];
		if(empty($fname) || empty($lname)){
			$error[] = 'Provide full name';
		}elseif(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error[] = 'Invalid Email';
		}elseif(empty($phone) || strlen($phone)< 10){
			$error[] = 'Invalid Mobile Number';
		}elseif(empty($pass)){
			$error[] = 'password required';
		}
		elseif($pass != $c_pass){
			$error[] = 'Password do not match';
		}
		else{
			$insert_data = array(
			'fname' => mysqli_real_escape_string($data->con,$_POST['fname']),
			'lname' => mysqli_real_escape_string($data->con,$_POST['lname']),
			'email' => mysqli_real_escape_string($data->con,$_POST['email']),
			'phone' => mysqli_real_escape_string($data->con,$_POST['phone']),
			'password' => mysqli_real_escape_string($data->con,$_POST['password']),
			'token' => mysqli_real_escape_string($data->con,$result)
		);
		 if($data->insert('register', $insert_data)){
		 	$msg[] = "user registered successful";
		 	include 'mail.php';
		 }
		}
		
		
	}
	
 ?>
<?php 
$active = "active";
$title = "register";
 include 'include/head.inc.php'; 
 ?>
 <style type="text/css">
    body{
        color: #fff;
        background: #63738a;
        font-family: 'Roboto', sans-serif;
    }
    
</style>
</head>
<body>
 <div class="container mt-3 text-center">
 	
 	<div class="signup-form" style="width: 28em; margin: auto; padding:10px">
 		<form method="post" action="" autocomplete="off">
 			 <h2> Sign Up</h2>
		        <p class="hint-text">Welcome</p>
		        <?php 
		     foreach ($error as $errors) {
		        ?>
		        <div class="alert alert-danger">
		            <?php echo $errors ?>
		        </div>
		        <?php
		     }
		     ?>
		     <?php 
		     	foreach($msg as $message){
		     	?>
		     	<div class="alert alert-success">
		     		<?php echo $message; ?>
		     	</div>
		     	<?php
		     	}
		     ?>
 			<div class="form-group">
 				<input type="text" name="fname" class="form-control" placeholder="First Name">
 			</div>
 			<div class="form-group">
 				<input type="text" name="lname"  class="form-control" placeholder="Last Name">
 			</div>
 			<div class="form-group">
 					<input type="text" name="email" class="form-control" placeholder="Email">
 			</div>
 			<div class="form-group">
 				<input type="text" name="phone" class="form-control" placeholder="Mobile">
 			</div>
 			<div class="form-group">
 				<input type="password" name="password" class="form-control" placeholder="Password">
 			</div>
 			<div class="form-group">
 				<input type="password" name="c_pass" class="form-control" placeholder="Confirm Password">
 			</div>
 			<div class="form-group">
 				<button type="submit" name="submit" class="btn btn-info btn-lg btn-block">Register</button>
 			</div>
 		</form>
 		<div class="text-center">Already have an account? <a href="login.php" class="">Login</a></div>
 	</div>
 </div>