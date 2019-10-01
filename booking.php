<?php session_start();?>
<?php
$error = array();
$email = $_SESSION['login_user'];
	if(isset($_POST['book'])){
		$entrace = $_POST['edate'];
		$exit = $_POST['ldate'];
		$roomno = $_GET['id'];
		$build = $_GET['build'];
		$email=$_SESSION['login_user'];
		$now = date('m/d/Y');

		$diff = abs(strtotime($exit )- strtotime($entrace));
		

		if(strtotime($now) > strtotime($entrace)){
			$error[] = 'date has passed';
		}elseif(strtotime($entrace) > strtotime($exit)){
			$error[] = 'exit date must be greater than entrace date';
		}
		else{
			include 'include/config.php';

				$sql = mysqli_query($db,"INSERT INTO bookings(roomNo,building,s_email,entrace_date,exit_date) values('$roomno','$build','$email','$entrace','$exit')");
				if($sql==1){
					$sql = "UPDATE rooms set status = 'booked' where roomNo = '$roomno'";
					$res = mysqli_query($db,$sql);
					$success = "Data was added succesful added";
					include('mail2.php');
				}
				else{
					$error[] = "failed".mysqli_error($db);
				}
		}

		
				
			}
	
 ?>
<?php 
$title="book room";
include 'include/head.inc.php'; ?>

	<div class="container-fluid p-0">
		<div class="row">
			
			<!-- body section -->
			<div class="col-md-8 offset-md-2 p-0">
				
				     <div class="container mt-5">
				         <div class="text-center"><h2>Book room</h2></div>
				          <div class="row">
						    <div class="col-md-2"></div>
						      <div class="col-md-8">
							<form method="post" action="" class="form">
								<?php 
									foreach($error as $errors){
										?>
										<div class="alert alert-danger">
											<?php 
												echo $errors;
											?>
										</div>
										<?php
									}
								?>
								<div class="form-group">
									<label class="">Entrace Date</label>
									<input type="date" name="edate" placeholder="first name" class="form-control" required="">
								</div>
								<div class="form-group">
									<label class="">Exit Date</label>
									<input type="date" name="ldate" placeholder="last name" class="form-control" required="">
								</div>
								
								<div class="form-group">
									<input type="submit" name="book"  class="btn btn-success" value="Book">
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<!-- body section -->
		
	</div>
				
	
	

<!-- js scripts -->
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>