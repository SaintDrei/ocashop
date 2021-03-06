<?php
	$page_title = "Edit Product";

	include_once('../../includes/header_admin.php');
    $welcome = "";
    if (isset($_REQUEST['pcode'])){
        $pcode=$_REQUEST['pcode'];
        $sql_product = "SELECT product_cat, product_collection, product_code, product_name, product_desc, product_img_name, price from products where product_code='$pcode'";
        $result_product = $con->query($sql_product);
//        $result_product = $con->query($sql_product) or die(mysql_error($con));
        
        while ($row = mysqli_fetch_array($result_product))
        {
             $pcat = $row['product_cat'];
            $pcollection = $row['product_collection'];
            $pcode = $row['product_code'];
            $pname = $row['product_name'];
            $pdesc = $row['product_desc'];
            $pimg = $row['product_img_name'];
            $dimg = app_path.'/content/images/products/'.$pimg;
            $price = $row['price'];
                
           
        }
        
    } else {
        header('location:index.php');
    }
    if (isset($_POST['update'])){
        
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
        if(empty($tmp_name)){
             $sql_add = "UPDATE products set product_cat='$pcat', product_code='$pcode', product_name='$pname', product_desc='$pdesc', price='$price' WHERE product_code='$pcode'";
        } else{
             $sql_add = "UPDATE products set product_cat='$pcat', product_code='$pcode', product_name='$pname', product_desc='$pdesc', product_img_name='$name', price='$price' WHERE product_code='$pcode'";
        }
     
      $con->query($sql_add) or die(mysqli_error($con));
        
        header('location: details.php?pcode='.$pcode);
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
                <form action="details.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col l4">
                            <div class="card">
                                 <div class="card-image" style="max-height:80%;" >
                            <img id="image" src="<?php echo $dimg;?>" onerror="this.src='<?php echo app_path; ?>content/images/Placeholder.png';">
                            
                        </div>
                        <div class="card-content">
                            <span class="card-title" id="pnout"><?php echo $pname;?></span>
                            <span id="priceout">P<?php echo $price;?></span>
                            <p id="descout"><?php echo $pdesc;?></p>
                        </div>
                                
                            </div>
                        </div>
                        <div class="col l8">
                            <div class="row">
                                <div class="col l6">
                                 <div class="input-field">
                          <input id="pname" name="pname" type="text" class="validate" value="<?php echo $pname;?>">
                          <label for="pname">Product Name</label>
                        </div>
                                </div>
                                <div class="col l6">
                                <div class="input-field">
                          <input id="code" name="code" type="text" class="validate" value="<?php echo $pcode;?>">
                          <label for="code">Product Code</label>
                        </div>
                                </div>
                            </div>
                            <div class="row">
                             <div class="col l6">
                             <div class="input-field">
                          <input id="price" name="price" type="text" class="validate" value="<?php echo $price;?>">
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
                                      <textarea id="desc" name="desc" class="materialize-textarea" value=""><?php echo $pdesc;?>    </textarea>
                                      <label for="desc">Description</label>
                                    </div>
                                </div>
                                <div class="col l6">
                                     <div class="input-field">
                                  <input id="collection" name="collection" type="text" class="validate" value="<?php echo $pcollection;?>">
                                  <label for="collection">Collection</label>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="file-field input-field">
                                  <div class="btn">
                                    <span>Image</span>
                                    <input name="image" type="file" id="files" value="<?php echo $pimg;?>">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" >
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col l6"></div>
                                <div class="col l6"> <button class="btn col l12 green darken-1 waves-effect waves-light m6 push-m1 s10" type="submit" name="update" tabindex="2">Update
                                
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