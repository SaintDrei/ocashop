<?php
	$page_title = "Login";
	include_once('../includes/header.php');
    
    
    $sql_scholar = "SELECT username, password,  FROM users";
    $result_scholar = $con->query($sql_scholar);
   
    



?>
<div class="container">
    <div class="row">
        <div class="col l6 push-l3">
            <div class="card">
            
             <div class="card-image">
                    <img id="changing-img" src="../content/images/spot/logo.jpg" height="300em">
                </div>
                <div class="row">
                    <div class="col l10 push-l1">
                        <div class="card-content">
                            <form>
                                <div class="row">
                                    <div class="input-field col l10 push-l1 ">
                                        <input id="FN" type="text" class="validate" tabindex="0">
                                <label for="UN">Username</label> 
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="input-field col l10 push-l1 ">
                                        <input id="FN" type="text" class="validate" tabindex="1">
                                <label for="PW">Password</label> 
                                    </div>
                                </div>
                              <div class="row">
                            <div class="input-field col s12 m6 push-m3 l6 push-l3">
                              <button class="btn red lighten-1 waves-effect waves-light offset-m1 offset-l1" type="submit" name="action">Reset password
                                    
                              </button>
                                <button class="btn cyan lighten-1 waves-effect waves-light right" type="submit" name="action">Login
                                
                              </button>
                                
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