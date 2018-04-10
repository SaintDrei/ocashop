<?php
	$page_title = "Registration";
	include_once('../includes/header.php');
    

    $sql_scholar = "SELECT scholarID, Name, Description FROM scholarship ORDER BY Name";
    $result_scholar = $con->query($sql_scholar);
    $list_scholar = "";
    
	while ($row = mysqli_fetch_array($result_scholar))
	{
        $scholarID = $row['scholarID'];
		$name = $row['Name'];
        $list_scholar .= "<option value='$scholarID'>$name</option>";
	}



?>
<div class="row"></div><div class="row"></div>
    <div class="row">
        <div class="col s12 m10 l8 push-l2 push-m1">
            <div class="card">
                <div class="card-image">
                    <img id="changing-img" src="../content/images/spot/logo.jpg" height="300em">
                </div>
                <div class="row">
                    <div class="card-content">
                        <form class="col s12 m12 l10">
                          <div class="row">
                            <div class="input-field col s12 l6 m6 push-m3 push-l3">
                                <input id="FN" type="text" class="validate" tabindex="3">
                                <label for="FN">Username</label>
                            </div>
                            </div>
                            <div class="row">
                        <div class="input-field col s12 l6 m6 push-l4 push-m3 offset-l3">
                                <input id="LN" type="text" class="validate" tabindex="4">
                                <label for="LN">Password</label>
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

<?php

	include_once('../includes/footer.php');
?>