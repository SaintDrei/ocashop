                     
<?php 
	$page_title = "Products";
//	include_once('../includes/header_admin.php'); 

include_once('../includes/header.php');
?>

 
    
    
  <main>
      <div class="col l10 m10 s10">
          <div class="row">
            <div class="col l6 push-l3">
                    <div class="row">
                        <div class="col l4">
                        Books
                        </div>
                        <div class="col l4">
                        Books
                        </div>
                        <div class="col l4">
                        Books
                        </div>
                </div>
              </div>
          </div>
            <div class="row">
                <div class="col l3">
                    <div class="card medium" >
                        <div class="card-image">
                            <img src="images/card.jpg" style="max-width: 100%; max-height:100%;">
                            <span class="card-title">Hamilton Card</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                
                    </div>
                </div>
                
          </div>
      </div>
   

    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large blue-grey darken-4 waves-effect waves-light">
        <i class="large material-icons">add</i>
      </a>

      <ul>
        <li>
          <a class="btn-floating"><i class="material-icons medium">note_add</i></a>
          <a href="" class="btn-floating fab-tip">Add a note</a>
        </li>

      </ul>
    </div>
  </main>
    
    <?php
    
	include_once('../includes/footer.php');
    ?>