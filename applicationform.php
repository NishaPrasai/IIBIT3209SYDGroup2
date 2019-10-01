<?php session_start();?>
<?php
	if(isset($_POST['add'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$town =$_POST['town'];
		$street = $_POST['street'];
		$file = $_FILES['file']['name'];
		$jobid = $_GET['id'];
		
		$path = "images/cv/".basename($file);
		$move = move_uploaded_file($_FILES['file']['tmp_name'], $path);
			if(!$move){
				$errors[] = "error uploading file";
				exit;
			}else{
				include 'include/config.php';

				$sql = mysqli_query($db,"INSERT INTO applications(jobNo,fname,lname,town,street,file) values('$jobid','$fname','$lname','$town','$street','$file')");
				if($sql==1){

					$success = "Data was added succesful added";
				}
				else{
					echo "failed".mysqli_error($db);
				}
			}
	}
 ?>
<?php include 'include/head.inc.php'; ?>

	<div class="container-fluid p-0">
		<div class="row">
			
			<!-- body section -->
			<div class="col-md-8 offset-md-2 p-0">
				     <div class="container mt-5">
				         <div class="text-center"><h2>Apply for the position</h2></div>
				          <div class="row">
						    <div class="col-md-2"></div>
						      <div class="col-md-8">
							<form method="post" action="" class="form" enctype="multipart/form-data">
								<div class="form-group">
									<label class="">First Name</label>
									<input type="text" name="fname" placeholder="first name" class="form-control" required="">
								</div>
								<div class="form-group">
									<label class="">last Name</label>
									<input type="text" name="lname" placeholder="last name" class="form-control" required="">
								</div>
								<div class="form-group">
									<label class="">Town</label>
									<input type="text" name="town" placeholder="town" class="form-control" required="">
								</div>
								<div class="form-group">
									<label class="">street</label>
									<input type="text" name="street" placeholder="street" class="form-control" required="">
								</div>
								<div class="form-group">
									<label class="">CV</label>
									<input type="file" name="file" class="form-control" required="">
								</div>
								<div class="form-group">
									<input type="submit" name="add"  class="btn btn-success" value="Apply">
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