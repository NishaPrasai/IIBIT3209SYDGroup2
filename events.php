<?php session_start();?>
<?php 
$active = "active";
$title = "News";
 include 'include/head.inc.php'; 
 ?>
 <section>
 	<div class="container mt-5">
 		<div class="row">
 			<div class="col-md-8">
 				<h1>Welcome To All Our Upcoming Events</h1>
 			<?php
 			include 'include/config.php';
 				$sql=("select * from events");
 				$res = mysqli_query($db,$sql);

 				while($rows = mysqli_fetch_array($res)){
 					$content=substr($rows['description'], 0,150)
 			?>
 					<div class="row mt-3 event-box">
					  <div class="col-md-4">
					  	<img src="images/events/<?php  echo $rows['image']?>" class="img-fluid">
					  </div>
					  <div class="col-md-8 events">
					  	<a href="more1.php?id=<?php echo $rows['id'] ?>"><h5 class=""><?php  echo $rows['eventName']?></b></h5></a>
					  	<p><?php echo $rows['eventDate']?></p>
					    <p><?php echo $rows['venue']?>,<?php echo $rows['town']?></p>
					    <p><?php 
					    	if($rows['price'] == 0){
					    		echo 'Free';
					    	}else{
					    		echo $rows['price'];
					    	}
					    ?></p>
					  </div>
					   </div>
 			<?php		
 				}
 			 ?>
 			
 		</div>
 	</div>
 </section>