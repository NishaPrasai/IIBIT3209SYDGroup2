<?php session_start();?>
<?php 
$active = "active";
$title = "Rooms";
 include 'include/head.inc.php'; 
 ?>
 <section>
 	<div class="container mt-5">
 		<div class="row">
 			<div class="col-md-3">
 			</div>
 			
 			<div class="col-md-7">
 				<h2>Search Result</h2>
 				<hr>
 			<?php
 			include 'include/config.php';
 			    $search = $_POST['rooms'];
 				$sql="select * from rooms WHERE rentalPrice = '$search' || location ='$search' ";
 				$res = mysqli_query($db,$sql);
 				if(mysqli_num_rows($res) < 1){
 					echo '<h1>No result found</h1>';
 				}

 				while($rows = mysqli_fetch_array($res)){
 			?>
 				
 					<div class="row">
 						<div class="col-md-3">
 							<img src="images/rooms/<?php echo $rows['image'] ?>" width="100%"> 
 						</div>
 						<div class="col-md-6">
 							<div class="details">
		 						<h4>Building:&nbsp; <span class="title"><?php echo $rows['building'] ?></span></h4>
		 						<i>Town:&nbsp; <span class="title"><?php echo $rows['location'] .','.$rows['town'] ?></span> </i><br>
		 						<p><?php echo $rows['description'] ?></p>
		 						
		 					</div>
		 					<?php if(!isset($_SESSION['login_user'])){
		 					?>
		 					<a href="login.php"><button class="apply">Book Room</button></a>
		 					<?php
		 					}else{
		 						?>
		 						<a href="booking.php?id=<?php echo $rows['roomNo']?>&build=<?php echo $rows['building'] ?>"><button class="apply">Book Room</button></a>
		 					<?php
		 					}
		 					 ?>
 						</div>
 						<div class="col-md-2">
 							<b>Price:&nbsp;$<span class="title"><?php echo $rows['rentalPrice'] ?></span>/m</b>
 						</div>
 					</div>
 					<hr>
 				
 			<?php		
 				}
 			 ?>
 			 </div>
 			 <div class="col-md-2"></div>
 		</div>
 	</div>
 </section>
 <?php include 'include/footer.php' ?>