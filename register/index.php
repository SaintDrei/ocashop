<?php
	$page_title = "Register";
	include_once('../includes/header.php');

    $warning = "";
    
    $alert = '';
if (isset($_POST['email'])){
    
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
		$password= hash('sha256',mysqli_real_escape_string($con, $_POST['password']));
		$cpw= hash('sha256',mysqli_real_escape_string($con, $_POST['cpw']));
        
        $sql_email = "SELECT email from users WHERE email='$email'";
        $qemail = $con->query($sql_email) or die(mysqli_error($con));
    
    
    if(mysqli_num_rows($qemail) > 0){
         $warning = "<script>

  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
    Materialize.toast('Email already registered!', 4000, 'alert');
  });
</script>";
    } else{
        
        $sql_un = "SELECT username from users WHERE username='$username'";
        $qun = $con->query($sql_un) or die(mysqli_error($con));
        if(mysqli_num_rows($qun) > 0){
         $warning = "<script>

  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
    Materialize.toast('Username already registered!', 4000, 'alert');
  });
</script>";
    } else {
            
           if (isset($_POST['cpw'])){
        if ($password == $cpw){
            
            $sql_register = "INSERT INTO users VALUES ('', '$username', '$email', '$password', NOW(), 'active')";//waaaaaat????
            $con->query($sql_register) or die(mysqli_error($con));
		header('location:../login/index.php?reg=1');
        } else {
             $warning = "<script>

  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
    Materialize.toast('Passwords do not match!', 4000, 'alert'); });
</script>";
            $alert= 'style="color:red;"';
    
        }
        
    } 
        }
        
    }
    
    
    
} else{
     $username = '';
        $email = '';
        $password = '';
        $cpw = '';
}


?>

<?php echo $warning;
 ?>

<div class="container">
    <div class="row">
        <div class="col l6 push-l3 m8 push-m2 s12">
            <div class="card">
            
             <div class="card-image">
                    <img id="changing-img" src="../content/images/ocabanner.jpg" height="200em">
                </div>
                <div class="row">
                    <div class="col l10 push-l1 m10 push-m1 s12">
                        <div class="card-content">
                            <form action="index.php" method="post">
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Username</label> 
                                    </div>
                                </div>
                             <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="email" name="email" type="email" class="validate" tabindex="2" required="" value="<?php echo $email;?>">
                                <label for="email">Email</label> 
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1" >
                                        <input id="pw" name="password" type="password" class="validate" tabindex="3" data-error="right" required="" >
                                <label for="pw" <?php echo $alert;?>>Password</label> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="cpw" name="cpw" type="password" class="validate" tabindex="4" required="">
                                <label for="cpw" data-error="wrong"  <?php echo $alert;?>>Confirm Password</label> 
                                    </div>
                                </div>
                              <div class="row">
                            <div class="col s12 m10 push-m1 l12 s10 push-s1">
                                <div class="row">
                                <button class="btn col l10 push-l1 s10 m10 push-m1 green lighten-1 waves-effect waves-ligh" type="submit" name="action" tabindex="5">Signup<i class="material-icons right">send</i>
                                
                              </button>
                                
                                </div>
                                
                            </div>
                        </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php

	include_once('../includes/footer.php');
?>