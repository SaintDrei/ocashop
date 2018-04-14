<?php
	$page_title = "Edit User";
	include_once('../../../includes/header_admin.php');
    

    
?>

<div class="row"></div><div class="row"></div>
    <div class="row">
        <div class="col s12 m10 l8 push-l2 push-m1">
            <div class="card">
                <div class="card-image">
                    <img id="changing-img" src="../content/images/<?php echo $gid;?>/logo.jpg " onerror="this.src='../content/images/OCA/logo.jpg'" height="300em">
                </div>
                <div class="row">
                <div class="card-content">
                    <form method="post" class="col s12 m12 l10" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12 m6 l6 push-l1">
                                <select value="<?php echo $groupID; ?>" id="artgroup" name="groupID" class="icons" tabindex="1">
                                    <?php echo $list_group;?>
                                </select>
                                <label>Artist Group</label>
                            </div>
                            <div class="input-field col s12 m6 l6 push-l1">
                                <select value="<?php echo $subCat; ?>"class="icons" tabindex="2" name="subCat" id="subgroup">
                                  <option disabled selected>Choose your option</option>
                                  <?php echo $list_sub ?>
                                    
                                </select>
                                <label>Sub Group</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input  value="<?php echo $firstName; ?>" id="firstName" name="firstName" type="text" class="validate" tabindex="3">
                                <label for="firstName">First Name</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $lastName; ?>" id="lastName" name="lastName" type="text" class="validate" tabindex="4">
                                <label for="lastName">Last Name</label>
                            </div>
                        </div> 
                       
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $middleName; ?>" id="middleName" name="middleName" type="text" class="validate" tabindex="5">
                                <label for="middleName">Middle Name</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                              <select class="icons" name="gender" value="<?php echo $gender; ?>">
      <option value="R" disabled selected>Choose your gender</option>
      <option value="M" data-icon="../content/images/gender/male.jpg" class="left circle">Male</option>
                                  <option value="F" data-icon="../content/images/gender/female.jpg" class="left circle">Female</option>
      <option value="H" data-icon="../content/images/gender/heli.jpg" class="left circle">Attack Helicopter</option>
    </select>
    <label>Gender</label>
                            </div>
                        </div>
                         <div class="row">
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $religion; ?>" id="religion" name="religion" type="text" class="validate" tabindex="5">
                                <label for="religion">Religion</label>
                            </div>
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $nickname; ?>" id="nickname" name="nickname" type="text" class="validate" tabindex="6">
                                <label for="nickname">Nickname</label>
                            </div>
                        </div> 
                       
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $username; ?>" id="username" name="username" type="text" class="validate" tabindex="5" autocomplete="off" disabled>
                                <label for="username" id="unlabel">Username</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $password; ?>" id="password" name="password" type="password" class="validate" tabindex="6" autocomplete="off">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $email; ?>" id="email" name="email" type="email" class="validate" tabindex="7">
                                <label for="email">E-Mail</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $schoolID; ?>" id="schoolID" name="schoolID" type="number" class="validate" maxlength="11"  tabindex="8">
                                <label for="schoolID">School ID</label>
                            </div>
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l12 m12 push-l1">
                                <input value="<?php echo $cityAddress; ?>" id="cityAddress" name="cityAddress" type="text" class="validate" tabindex="11">
                                <label for="cityAddress">City Address</label>
                            </div>
                                                  
                        </div>
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $cmobile; ?>" id="cmobile" type="number" name="cmobile" class="validate" maxlength="11" tabindex="9">
                                <label for="cmobile">Mobile</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $clandline; ?>" id="clandline" type="number" name="clandline" class="validate" maxlength="7" tabindex="10">
                                <label for="clandline">Landline</label>
                            </div>
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l12 m12 push-l1">
                                <input value="<?php echo $provincialAddress; ?>" id="provincialAddress" name="provincialAddress" type="text" class="validate" tabindex="11">
                                <label for="provincialAddress">Provincial Address</label>
                            </div>
                                                  
                        </div>
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $pmobile; ?>" id="pmobile" name="pmobile" type="number" class="validate" maxlength="11" tabindex="9">
                                <label for="pmobile">Mobile</label>
                            </div>
                            <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $plandline; ?>" id="plandline" type="number" class="validate" maxlength="7" tabindex="10" name="plandline">
                                <label for="plandline">Landline</label>
                            </div>
                        </div>
                     
                     <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                                <input value="<?php echo $zip; ?>"id="zip" type="text" class="validate" tabindex="12" name="zip">
                                <label for="zip">Zip</label>
                            </div>
                          <div class="input-field col s12 m6 l6 push-l1">
                                <select value="<?php echo $cityID; ?>" class="icons" tabindex="2" name="ctID">
                                  <option value="" disabled selected>Choose your City</option>
                                  <?php echo $list_city ?>
                                    
                                </select>
                                <label>City</label>
                            </div>
                            
                        </div>
                      <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                             <input value="<?php echo $birthDate; ?>" type="text" class="datepicker" id="birthDate" name="birthDate" tabindex="14">
                            <label for="birthDate">Birthday</label>
                            </div>
                         <div class="input-field col s12 m6 l6 push-l1">
                                <select value="<?php echo $scholarID; ?>" tabindex="15" name="scholarID">
                                    <option value="" disabled selected>Scholarship</option>
                                    <?php echo $list_scholar; ?> 
                             </select>
                         </div>
                            
                        </div> 
                        <div class="row">    
                        <div class="input-field col s12 l6 m6 push-l1">
                             <input value="<?php echo $joinDate; ?>" type="text" class="datepicker" id="joindate" name="joindate" tabindex="14">
                            <label for="joindate">Join Date</label>
                            </div>
                        
                            
                        </div>
                     <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="add">Submit
                                <i class="tiny material-icons right">send</i>
                              </button>
                                
                            </div>
                        </div>
                        <div class="row"></div>
                    
                    </form>
                </div>
                </div>
                
            </div>
        </div>

    </div>

</script>
<?php

	include_once(app_path.'/includes/footer.php');
?>