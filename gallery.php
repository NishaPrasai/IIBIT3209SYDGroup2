<?php session_start();?>
<?php 
$active = "active";
$title = "Rooms";
 include 'include/head.inc.php'; 
 ?>
 <section>
 	<div class="container mt-5">
 		<div class="row">
 			
 			<div class="col-md-12">
 				<h2 >Our Gallery</h2>
 				
 			</div>
 			<hr class="mb-5">
 			<?php
 			include 'include/config.php';
 				$sql="select * from gallery";
 				$res = mysqli_query($db,$sql);

 				while($rows = mysqli_fetch_array($res)){
 			?>
 				
 					<div class="col-md-4 m-auto">
 						
 							<img src="images/uploads/<?php echo $rows['uploads'] ?>" class="img-fluid"> 
 						
 					</div>
 					<hr>
 				
 			<?php		
 				}
 			 ?>
 			 </div>
 			 
 		</div>
 	
 </section>
 <?php include 'include/footer.php' ?>