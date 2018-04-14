<?php
	$page_title = "Add Product";

	include_once('../../includes/header_admin.php');
    $welcome = "";

    if (isset($_POST['add'])){
        
        $pcat = mysqli_real_escape_string($con, $_POST['category']);
        $pcollection = mysqli_real_escape_string($con, $_POST['collection']);
        $pcode = mysqli_real_escape_string($con, $_POST['code']);
        $pname = mysqli_real_escape_string($con, $_POST['pname']);
        $pdesc = mysqli_real_escape_string($con, $_POST['desc']);
        $price = mysqli_real_escape_string($con, $_POST['price']);
        
  
        if (isset($_FILES["image"]["name"])) {

    $name = date('YmdHis-') . $_FILES["image"]["name"];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if (!empty($name)) {
        $location = '../../content/images/products/';
        $newImage = $location.$name;
        if  (move_uploaded_file($tmp_name, $newImage)){
            echo 'Uploaded';
        }

    } else {
        echo 'please choose a file';
    }
}
      
    $sql_add = "INSERT INTO products VALUES ('', '$pcat', '$pcollection', '$pcode', '$pname', '$pdesc', '$name', '$price', 'yes')";
    $con->query($sql_add) or die(mysqli_error($con));
        
//    header('location: details.php?pcode='.$upload);
    }

?>
<?php echo $welcome; ?>"
<script>
$(document).ready(function(){
    
    $('select').material_select();
  $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
    
    document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
    
    
    $("#pname").on("change keyup", function() {
        $("#pnout").html($(this).val());
});
     $("#price").on("change keyup", function() {
        $("#priceout").html($(this).val());
});
      $("#desc").on("change keyup", function() {
        $("#descout").html($(this).val());
});
    
    //end//
});
</script>
 
<main>
    <div class="row" style="padding-left:300px;">
        <div class="col l10 push-l1">
            <div class="card">
                <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col l4">
                            <div class="card">
                                 <div class="card-image" style="max-height:80%;" >
                            <img id="image" src="content/images/products/res/cap1.jpg" onerror="this.src='<?php echo app_path; ?>content/images/Placeholder.png';">
                            
                        </div>
                        <div class="card-content">
                            <span class="card-title" id="pnout">Product Name</span>
                            <span id="priceout">P100.00</span>
                            <p id="descout">I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                        </div>
                                
                            </div>
                        </div>
                        <div class="col l8">
                            <div class="row">
                                <div class="col l6">
                                 <div class="input-field">
                          <input id="pname" name="pname" type="text" class="validate">
                          <label for="pname">Product Name</label>
                        </div>
                                </div>
                                <div class="col l6">
                                <div class="input-field">
                          <input id="code" name="code" type="text" class="validate">
                          <label for="code">Product Code</label>
                        </div>
                                </div>
                            </div>
                            <div class="row">
                             <div class="col l6">
                             <div class="input-field">
                          <input id="price" name="price" type="text" class="validate">
                          <label for="price">Price</label>
                        </div>
                        </div>
                        <div class="col l6">
                             <div class="input-field col s12">
                                <select name="category">
                                  <option value="Apparel">Apparel</option>
                                  <option value="Digital">Digital</option>
                                  <option value="Books">Books</option>
                                  <option value="Portraits">Portraits</option>
                                  <option value="Souvenirs">Souvenirs</option>
                                </select>
                                <label>Category</label>
                              </div>
                        </div>
                            </div>
                            <div class="row">
                                <div class="col l6">
                                    <div class="input-field col s12">
                                      <textarea id="desc" name="desc" class="materialize-textarea"></textarea>
                                      <label for="desc">Description</label>
                                    </div>
                                </div>
                                <div class="col l6">
                                     <div class="input-field">
                                  <input id="collection" name="collection" type="text" class="validate">
                                  <label for="collection">Collection</label>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Image</span>
                                    <input name="image" type="file" id="files">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col l6"></div>
                                <div class="col l6"> <button class="btn col l12 green darken-1 waves-effect waves-light m6 push-m1 s10" type="submit" name="add" tabindex="2">Add
                                
                              </button></div>
                            </div>
                        </div>
                       
                        
                    </div>
                </form> 
            </div>
        </div>
    </div>
</main>
<?php

?>