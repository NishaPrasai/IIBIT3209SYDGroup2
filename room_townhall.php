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
        <h5>Available nearby</h5>
        <h6><a href="room_hurstville.php">Hurstville</a></h6>
        <h6><a href="room_strathfield.php">Strathfield</a></h6>
        <h6><a href="room_rockdale.php">Rockdale</a></h6>
        <h6><a href="room_central.php">Central</a></h6>
        <h6><a href="room_townhall.php">Townhall</a></h6>
 				<?php
	 			include 'include/config.php';
	 				$sql="select * from rooms";
	 				$res = mysqli_query($db,$sql);

	 				while($rows = mysqli_fetch_array($res)){
	 					if($rows['location'] == 1){
	 					?>
	 						<p><a href="#"><?php echo $rows['location']?></a></p>
	 					<?php
	 				}
	 				}
	 			?>
	 			<!--  Full texts 	roomNo 	building 	town 	location -->

 			</div>
 			<hr>
 			<div class="col-md-7">
        <h2 >Cost of living in Townhall</h2>
        <p>AVG Rent= $250/week sharing</p>
        <p>Food=$160/week</p>
      <p>Transportation= $30/week</p>
    <p>Others= $200/week </p>
 				<hr class="mb-5">
 			<?php
 			include 'include/config.php';
 				$sql="select * from rooms WHERE Town = 'townhall'";
 				$res = mysqli_query($db,$sql);

 				while($rows = mysqli_fetch_array($res)){
 			?>

 					<div class="row">
 						<div class="col-md-3">
 							<img src="images/rooms/<?php echo $rows['image'] ?>" width="100%">
 						</div>
 						<div class="col-md-6">
 							<div class="details">
		 						<h4>Building:&nbsp; <span class="title"><?php echo $rows['building'] ?></span></h4>
		 						<b>Town:&nbsp; <span class="title"><?php echo $rows['town'] ?></span> </b><br>
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
