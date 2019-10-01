<?php include 'processlogin.php'?>
<?php
 $title = "login";
 include 'include/head.inc.php';

?>
<style type="text/css">
    body{
        color: #fff;
        background: #63738a;
        font-family: 'Roboto', sans-serif;
    }

</style>
</head>
<body>
<div class="signup-form">
    <form action="" method="post" autocomplete="off">
        <h2> Login</h2>
        <p class="hint-text">Welcome Back</p>
        <?php
     foreach ($error as $errors) {
        ?>
        <div class="alert alert-danger">
            <?php echo $errors ?>
        </div>
        <?php
     }
     ?>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" >
        </div>

        <div class="form-group">
            <button type="submit" name="login" class="btn btn-info btn-lg btn-block">Log In</button>
        </div>
        <p>Login as administrator,<a href="admin/">Click here</a></p>
        <p>Click <a href="recovery.php">here</a> with you have forgotten your password</p>
    </form>

    <div class="text-center">Dont have an account? <a href="signup.php" class="">Sign Up</a></div>
</div>
</body>
</html>
