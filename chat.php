<?php session_start();?>
<?php 
$active = "active";
$title = "Chat";
 include 'include/head.inc.php'; 
 ?>
 

<div id="container mt-5">
	<div class="row">
		<div class="col-md-6 offset-md-3 mt-5">
			<div id="chat_box">
				<form method="post" action=""> 
					<input type="text" name="name" placeholder="Enter Name: " class="form-control col-md-6 mb-2" /> 
					<textarea name="msg" placeholder="Enter Message" class="form-control col-md-4"></textarea> 
					<input type="submit" name="submit" value="Send!" class="btn btn-info col-md-4 mt-2" /> 
				</form> 
				<?php 
				include 'include/config.php';
				$query = "SELECT * FROM chat ORDER BY id"; 
				$run = $db->query($query); 
				while($row = $run->fetch_array()){
				?>

				<div id="chat_data"> 
				<span style="color:green;"><?php echo $row['name']?></span> 
				<span style="color:brown;"><?php echo $row['msg']?></span> 
				<span style="float:right;"><?php echo $row['time']?></span> 
				</div> 
				<?php 
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php 
	if(isset($_POST['submit'])){ 
		$name = $_POST['name']; 
		$msg = $_POST['msg']; 

		include 'include/config.php';
		$query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')"; 
		$run = $db->query($query);
		if($run==1){
			header("location:chat.php");
		}

 	} 
?>




