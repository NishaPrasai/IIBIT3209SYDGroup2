
<?php session_start();
    if (!isset($_SESSION['login_user']) || (trim($_SESSION['login_user']) == '')) {
    header("location:login.php");
    exit();
}
?>
<?php
$title = "home";
 include 'include/head.inc.php';

 include 'include/config.php';

 $email = $_SESSION['login_user'];
 $sql = mysqli_query($db, "SELECT * FROM register where email = '$email'");
 $rows = mysqli_fetch_array($sql);
 $username = $rows['fname']. " ". $rows['lname'];
if(isset($_POST['submit'])){
     include 'include/db.php';
     $post = $_POST['post'];
    $image = $_FILES['image']['name'];
    // $check = getimagesize($_FILES["image"]["tmp_name"]);
    // if(!$check){
    //   $errors[]= "the file is not an image";
    // }
    if(!empty($image)){
         $path = "images/posts/".basename($image);
         $move = move_uploaded_file($_FILES['image']['tmp_name'], $path);
    }
       $query = mysqli_query($db, "INSERT INTO posts(content, image, email, username) values('$post', '$image', '$email', '$username')");

}


 ?>

 <style type="text/css">
     body{
        background-color: #eee;
     }
 </style>
 <section>
    <div class="container pl-3">

        <div class="row">
            <div class="tweet-box col-md-8 p-4 bg-light">
                <h3>Create a Post</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <textarea class="form-control col-md-7" name="post"></textarea>
                    <div class="form-group">
                        <input type="file" name="image" class="col-md-2 mt-3">
                        <button name="submit" class="btn btn-info col-md-3">Post</button>
                    </div>
                </form>
                <hr>
                <div class="post pl-2">
            <?php
                $query = mysqli_query($db, "SELECT * FROM posts ORDER BY id DESC");
                while($rows = mysqli_fetch_array($query)){
                    ?>
                    <div class="">
                        <div class="col-md-8 bg-light p-3 mt-3">
                            <h4><?php echo $rows['username'] ?></h4>
                            <p class="text-right text-danger"><?php echo $rows['created_at']?></p>
                            <p>
                                <?php echo $rows['content'] ?>
                            </p>
                            <?php
                            if($rows['image'] != null){
                                ?>
                                <img src="images/posts/<?php echo $rows['image']?>" class="img-fluid">
                                <?php
                            }
                            ?>
                        </div>
                       <p><a href="count.php?id=<?php echo $rows['id']?>"> Like &nbsp;<i class="fa fa-hand-o-right"></i></a> <?php echo $rows['likes']?></p>
                    </div>
                    <hr>
                    <?php
                }
            ?>
        </div>
            </div>

            <div class="col-md-4">
                <h1 class="text-center">Latest News</h1>
                    <hr>
                    <div class="row m-auto">

                        <?php
                            include 'include/config.php';
                            $sql = mysqli_query($db,"SELECT * FROM news LIMIT 6");
                            while($rows = mysqli_fetch_array($sql)){
                                ?>
                                <div class="col-md-8 offset-md-2 m-auto mt-3">
                                    <li><a class="text-dark mt-4" href="more.php?id=<?php echo $rows['id'] ?>"><?php echo $rows['title'] ?></a></li>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container pl-3">

    </div>
<!-- <div class="container content">
      <div class="img">
        <img src="images/design.png" width="100%">
      </div>
       <h2>Welcome to IIBIT student site</h2>
        <p>Welcome to student portal for IIBIT student, the portal is meant to unite new student with existing student. The platform lot of features, it allows student to book rooms, share jobs and organize events.</p>

        <p>The website is about to assist international students finding rooms, jobs in Sydney and local suburbs. It will also help to maintain various group communications and build relationships to reduce newcomers stress. The website will help students to organize events such as birthday celebration, ceremonies, cultural programs and other entertainment functions.</p>
    </div> -->
    <div class="container mt-5">
    	<h1 class="text-center">Upcoming Events</h1>
    	<hr>
    	<div class="row m-auto">

    	<?php
    		include 'include/config.php';
    		$sql = mysqli_query($db,"SELECT * FROM events LIMIT 6");
    		while($rows = mysqli_fetch_array($sql)){
    			?>
    			<div class="col-md-6 m-auto  event-box">
    				<div class="row">
    					<div class="col-md-5">
    						<img src="images/events/<?php echo $rows['image'] ?>" class="img-fluid">
    					</div>
    					<div class="col-md-7">
    						<b><a href="more.php?id=<?php echo $rows['id'] ?>"><?php echo $rows['eventName'] ?></a></b>
    						<p><?php echo $rows['eventDate'] ?></p>
    						<p><?php echo $rows['venue'] ?></p>
    						<p><?php
    						if($rows['price'] == 0){
    							echo "Free";
    						}else{
    							echo $rows['price'];
    						}

    						 ?></p>

    					</div>
    				</div>
    			</div>
    			<?php
    		}
    	?>
    </div>
    </div>

 </section>
<?php include 'include/footer.php' ?>
