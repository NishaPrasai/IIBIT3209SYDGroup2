
<html>
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


<body>

  <?php
  session_start();
  include("db.php");
  include 'include/config.php';

  if(isset($_POST['Submit']))
  {
   $oldpass=($_POST['opwd']);
   $useremail=($_POST['uname']);
   $newpassword=($_POST['npwd']);
  $sql=mysqli_query($db,"SELECT password FROM register where email='$useremail' AND phone='$oldpass'");
  $num=mysqli_fetch_array($sql);
  if($num>0)
  {
   $db=mysqli_query($db,"update register set password='$newpassword' where email='$useremail'");
   $_SESSION['msg1']="Password Changed Successfully";?>
   <p style="color:red; text-align: center;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
   <?php
  }
  else
  {
  $_SESSION['msg1'] = "Username and Phone Number is incorrect";?>
  <p style="color:red; text-align: center;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
  <?php
  }
  }
  ?>

  <script type="text/javascript">
  function valid()
  {
  if(document.chngpwd.opwd.value=="")
  {
  alert("Phone Number Filed is Empty !!");
  document.chngpwd.opwd.focus();
  return false;
  }
  else if(document.chngpwd.npwd.value=="")
  {
  alert("New Password Filed is Empty !!");
  document.chngpwd.npwd.focus();
  return false;
  }
  else if(document.chngpwd.cpwd.value=="")
  {
  alert("Confirm Password Filed is Empty !!");
  document.chngpwd.cpwd.focus();
  return false;
  }
  else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
  {
  alert("Password and Confirm Password Field do not match  !!");
  document.chngpwd.cpwd.focus();
  return false;
  }
  return true;
  }
  </script>



              <div class="col-lg-12 text-center">
                  <h1>Change your Password</h1>


               <form name="chngpwd" action="" method="post" onSubmit="return valid();">
                <table align="center">
                  <tr height="50">
          			  <td>Username :</td>
          			  <td><input type="username" name="uname" id="uname"></td>
          			  </tr>
  			  <tr height="50">
  			  <td>Phone No :</td>
  			  <td><input type="password" name="opwd" id="opwd"></td>
  			  </tr>
  		  <tr height="50">
  			  <td>New Password :</td>
  			  <td><input type="password" name="npwd" id="npwd"></td>
  			  </tr>
  		  <tr height="50">
  			  <td>Confirm Password :</td>
  			  <td><input type="password" name="cpwd" id="cpwd"></td>
  			  </tr>
  			  <tr>
  			  <td><a href="index.php">Back to login Page</a></td>
  			  <td><input type="submit" name="Submit" value="Change Passowrd" /></td>
  			  </tr>
                  <tr>
                <td></td>
                <td></td>
                </tr>
  			  </table>
  			  </form>
              </div>

      <!-- jQuery Version 1.11.1 -->
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>






</body>
</html>
