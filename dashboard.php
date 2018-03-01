
<?php 
	$page_title = "Dashboard";
	include_once('../includes/header_admin.php');
    
?>



  <main>
      <div class="row">
      
      </div>
    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>User Management</b>
            </div>
          </div>

          <div class="row">
            <a href="./accounts/index.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                 
               <i class="material-icons large">account_box</i><br>
                <span class="blue-text text-lighten-1"><h5>Account Management</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/people_2_knqa3y.png" class="responsive-img" /><br>
                <span class="blue-text text-lighten-1"><h5>Task Assignment</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Product Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989970/product_mdq6fq.png" class="responsive-img" /><br>
                <span class="blue-text text-lighten-1"><h5>Product</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">

                  <i class="material-icons large">event</i>
                  <br>
                <span class="blue-text text-lighten-1"><h5>Events</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Staff Management</b>
            </div>
          </div>

          <div class="row">
            <a href="./task/add.php">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <i class="material-icons large">person_add</i><br>
                <span class="blue-text text-lighten-1"><h5>Task Assignment</h5></span>
              </div>
            </a>

            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                 <i class="material-icons large">contacts</i>
                <span class="blue-text text-lighten-1"><h5>Contacts</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
          <div class="row">
            <div class="left card-title">
              <b>Category Management</b>
            </div>
          </div>
          <div class="row">
            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/squares_dylwo9.png" class="responsive-img" /><br>
                <span class="blue-text text-lighten-1"><h5>Category</h5></span>
              </div>
            </a>
            <div class="col s1">&nbsp;</div>
            <div class="col s1">&nbsp;</div>

            <a href="#!">
              <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                <img src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989969/squares_dylwo9.png" class="responsive-img" /><br>
                <span class="truncate blue-text text-lighten-1"><h5>Sub Category</h5></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
<ul class="left">
         
        </ul>
    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large pink waves-effect waves-light">
        <i class="large material-icons">add</i>
      </a>

      <ul>
        <li>
          <a class="btn-floating red"><i class="material-icons medium">note_add</i></a>
          <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

      </ul>
    </div>
  </main>

  
    <?php
    
	include_once('../includes/footclean.php');
    ?>