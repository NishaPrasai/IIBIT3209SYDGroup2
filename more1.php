<?php session_start();?>
<?php 
$active = "active";
$title = "News";
 include 'include/head.inc.php'; 
 ?>
 <section>
 	<div class="container mt-5">
 		<div class="row">
 			<?php
 			include 'include/config.php';
 			$id = $_GET['id'];
 				$sql=("select * from events where id = '$id' ");
 				$res = mysqli_query($db,$sql);

 				$rows = mysqli_fetch_array($res);
 					
 			?>
 				<div class="col-md-8 offset-md-2">
 					<div class="card">
					  <div class="card-body">
					  	<img src="images/events/<?php  echo $rows['image']?>" class="img-fluid">
					    <h5 class="card-title"><b><?php  echo $rows['eventName']?></b></h5>
					    <p class="card-text"><?php echo $rows['description']; ?></p>
					    <ul class="venue">
					    	<li>Date: <?php echo $rows['eventDate']?></li>
					    	<li>
					    		Town: <?php echo $rows['town']?>
					    	</li>
					    	<li>
					    		Venue: <?php echo $rows['venue'] ?>
					    	</li>
					    </ul>
					
					  </div>
					</div>
 				</div>
 				
 			<?php		
 				
 			 ?>
 		</div>
 	</div>
 </section>