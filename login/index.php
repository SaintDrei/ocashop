<?php
	$page_title = "Login";
	include_once('../includes/header.php');
    
    
    $sql_scholar = "SELECT username, password,  FROM users";
    $result_scholar = $con->query($sql_scholar);
   
    



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
                            <form>
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="FN" type="text" class="validate" tabindex="0">
                                <label for="UN">Username</label> 
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="input-field col l10 push-l1 m10 push-m1 s10 push-s1">
                                        <input id="FN" type="text" class="validate" tabindex="1">
                                <label for="PW">Password</label> 
                                    </div>
                                </div>
                              <div class="row">
                            <div class="col s12 m8 push-m2 l6 push-l3 s10 push-s1">
                                <div class="row">
                                    
                              <button class="btn col l5 green darken-1 waves-effect waves-light m6 pull-m1 s10 " type="submit" name="action">Signup
                                    
                              </button>
                                <button class="btn col l5 push-l1 cyan darken-1 waves-effect waves-light m6 push-m1 s10" type="submit" name="action">Login
                                
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