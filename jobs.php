
<?php session_start();?>
<?php
$active = "active";
$title = "jobs";
 include 'include/head.inc.php';
 ?>
 <section>
 	<div class="container mt-5">
 		<div class="row">
 			<div class="col-md-4"></div>
 			<div class="col-xs-12">
 				<?php
	 			include 'include/config.php';
	 				$sql=("select * from jobs");
	 				$res = mysqli_query($db,$sql);

	 				while($rows = mysqli_fetch_array($res)){
	 			?>
	 				<div class="job">
	 					<h1 class="title">job reference number:&nbsp; <?php  echo $rows['jobId'] ?></h1>
	 					<div class="job-details">
	 						<h2><?php echo $rows['title'] ?></h2>
	 						<p><?php echo $rows['description'] ?> </p>
	 						<b>Company Name:&nbsp;<span class="title"><?php  echo $rows['company'] ?></span></b><br>
	 						<b>Town:&nbsp;<span class="title"><?php  echo $rows['town'] ?></span></b><br>
	 						<p><?php echo $rows['experience'] ?></p>
	 						<a href="applicationform.php?id=<?php echo $rows['jobId']?>"><button class="apply">Apply JOB</button></a>
	 						<p>Visit Company link to apply:<a href="<?php echo $rows['link']?>"><?php echo $rows['link']?></a></p>
	 					</div>
	 					<hr>
	 				</div>

	 			<?php
	 				}
	 			 ?>
 			</div>

 		</div>
 	</div>
 </section>
