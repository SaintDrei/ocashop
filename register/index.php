<?php
	$page_title = "Register";
	include_once('../includes/header.php');
    
    
    $sql_scholar = "SELECT username, password,  FROM users";
    $result_scholar = $con->query($sql_scholar);
    
    if (isset($_POST['cpw']))
    {}
        


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
                                        <input id="UN" name="username" type="text" class="validate" tabindex="0">
                                <label for="UN">Username</label> 
                                    </div>
                                </div>
                             <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="email" name="email" type="text" class="validate" tabindex="0">
                                <label for="email">Email</label> 
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="pw" name="password" type="text" class="validate" tabindex="1">
                                <label for="pw">Password</label> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="cpw" name="cpw" type="text" class="validate" tabindex="1">
                                <label for="cpw">Confirm Password</label> 
                                    </div>
                                </div>
                              <div class="row">
                            <div class="col s12 m10 push-m1 l12 s10 push-s1">
                                <div class="row">
                                <button class="btn col l10 push-l1 s10 m10 push-m1 green lighten-1 waves-effect waves-ligh" type="submit" name="action">Signup<i class="material-icons right">send</i>
                                
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