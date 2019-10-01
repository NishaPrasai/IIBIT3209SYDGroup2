<?php session_start();?>
<?php 
$active = "active";
$title = "Chat";
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
 			<?php
 			$id =$_GET['id'];
 			include 'include/config.php';
 				$sql=("select * from news where id= '$id'");
 				$res = mysqli_query($db,$sql);

 				$rows = mysqli_fetch_array($res);
 				$content=$rows['content'];
 			?>
 				
 				<div class="col-md-8">
 					<div class="card">
					  <img class="card-img-top" src="images/news/<?php echo $rows['image']?>" alt="<?php echo $rows['image']?>">
					  <div class="card-body">
					    <h3 class="card-title"><b><?php  echo $rows['title']?></b></h3>
					    <p class="card-text"><?php echo $content?></p>
					    <p>
					    	<b>Date: &nbsp;<?php echo $rows['created_date']?></b>
					    </p>
					  </div>
					</div>
 				</div>
 				
 			<?php		
 			
 			 ?>
 		</div>
 	</div>
 </section>