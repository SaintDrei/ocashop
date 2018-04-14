<?php
	$page_title = "Customer Info";
	include_once('includes/header.php');

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
<script>  $(document).ready(function(){
          $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
    container: undefined, // ex. 'body' will append picker to body
  });
    });
</script>
<main>


    <div class="row">
        <div class="col l10 push-l1 m8 push-m2 s12">
            <div class="card"><form action="index.php" method="post">
                <div class="row">
                    <div class="col l6">
                         <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">First Name</label> 
                                    </div>
                    </div>
                    <div class="col l6">
                        <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Last Name</label> 
                                    </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col l6">
                         <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                         <input type="text" class="datepicker">
                                <label for="UN">Birthdate</label> 
                                    </div>
                    </div>
                    <div class="col l6">
                        <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Town</label> 
                                    </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col l6">
                         <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Province</label> 
                                    </div>
                    </div>
                    <div class="col l6">
                        <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Zip</label> 
                                    </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col l6">
                         <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Telephone</label> 
                                    </div>
                    </div>
                    <div class="col l6">
                        <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Mobile</label> 
                                    </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col l6">
                         <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Email</label> 
                                    </div>
                    </div>
                    <div class="col l6">
                        <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="UN" name="username" type="text" class="validate" tabindex="1" required="" value="<?php echo $username?>">
                                <label for="UN">Shipping Address</label> 
                                    </div>
                    </div>
                </div>   
              <div class="row">
                            <div class="col s12 m10 push-m1 l12 s10 push-s1">
                                <div class="row">
                                <button class="btn col l10 push-l1 s10 m10 push-m1 green lighten-1 waves-effect waves-ligh" type="submit" name="action" tabindex="5">Continue<i class="material-icons right">send</i>
                                
                              </button>
                                
                                </div>
                                
                            </div>
                        </div>
                  
                    </form>
                </div>
                
            </div>
        </div>
</main>

<?php

	include_once('includes/footer.php');
?>