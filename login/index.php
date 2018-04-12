<?php
	$page_title = "Login";
	include_once('../includes/header.php');
   
    $welcome = '';
    if(isset($_GET['reg'])){
        $reg = $_GET['reg'];
        if($reg == '1'){
            $welcome = "<script>
            $(document).ready(function(){
            $('.tooltipped').tooltip({delay: 50});
            Materialize.toast('Registration successful!', 4000,);});
            </script>";}} else{
        if (isset($_POST['username']))
        {
           session_destroy();
            session_start();

            $username = mysqli_real_escape_string($con, $_POST['username']);
    //        $pw =  hash('sha256', mysqli_real_escape_string($con, $_POST['pw']));
            $pass = mysqli_real_escape_string($con, $_POST['password']);
            $pw = hash('sha256', $pass);
            $sql_login = "SELECT username, password FROM users
                WHERE username='$username' AND password='$pw'";
            $result_login = $con->query($sql_login) or die(mysqli_error($con));

            if (mysqli_num_rows($result_login) > 0)
            {
                while ($row = mysqli_fetch_array($result_login))
                {
                    $_SESSION['userid'] = $row['username'];
                 
                }
                if($username != 'admin'){
                header('location: ../index.php');
                } else {
                header('location: ../e/index.php');
                }
            } else { echo mysqli_error($con);}

        }
    }
    
    

?>
<?php echo $welcome; ?>
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
                                        <input id="UN" name="username" type="text" class="validate" tabindex="0">
                                <label for="UN">Username</label> 
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="PW" name="password" type="password" class="validate" tabindex="1">
                                <label for="PW">Password</label> 
                                    </div>
                                </div>
                              <div class="row">
                            <div class="col s12 m8 push-m2 l6 push-l3 s10 push-s1">
                                <div class="row">
                                    
                              <button class="btn col l5 green darken-1 waves-effect waves-light m6 pull-m1 s10 " type="submit" name="action">Signup
                                    
                              </button>
                                <button class="btn col l5 push-l1 cyan darken-1 waves-effect waves-light m6 push-m1 s10" type="submit" name="login">Login
                                
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