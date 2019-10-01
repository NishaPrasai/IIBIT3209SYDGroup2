<?php session_start();?>
<?php 
$active = "active";
$title = "News";
 include 'include/head.inc.php'; 
 ?>
 <section>
 	<div class="container mt-5">
 		<div class="row">
 			<div class="col-md-2">
 				<h5>Category</h5>
 				<?php
 			include 'include/config.php';
 				$sql=("select * from category");
 				$res = mysqli_query($db,$sql);

 				while($rows = mysqli_fetch_array($res)){?>
 					<p><a href=""><?php echo $rows['category_name'] ?></a></p>
 				<?php }?>
 			</div>
 			<div class="col-md-8 mb-4 mt-2">
 			<?php
 			include 'include/config.php';
 				$sql=("select * from news");
 				$res = mysqli_query($db,$sql);

 				while($rows = mysqli_fetch_array($res)){
 					$content=substr($rows['content'], 0,255)
 			?>

 			
 				<div class="">
 					<h5 class="card-title"><b><?php  echo $rows['title']?></b></h5>
 					<img class="card-img-top" src="images/news/<?php echo $rows['image']?>" alt="<?php echo $rows['image']?>" height="320px">
 				</div>
 				<div class="">
 					
 					 <p class="card-text"><?php echo $content. "..."?></p>
 					 <p>Posted at: <?php echo $rows['created_date'] ?></p>
					    <a href="more.php?id=<?php echo $rows['id'] ?>" class="btn btn-success">Read More</a>

 				</div>
 			
 				
 				
 			<?php		
 				}
 			 ?>
 			 </div>
 		</div>
 	</div>
 </section>