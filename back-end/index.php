<?php
  // Create database connection
  $db = mysqli_connect('localhost', 'root', '', 'ecomm');

  // Initialize message variable
  $msg = '';

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
      // Get image name
      $image = $_FILES['image']['name'];
      // Get text
      $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
      $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
      $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
      $product_category = mysqli_real_escape_string($db,$_POST['category_name']);
      // image file directory
      $target = 'images/'.basename($image);

      $sql = "INSERT INTO images (image, image_text,product_name,quantity,category_name) 
      VALUES ('{$image}', '{$image_text}','{$product_name}','{$quantity}','{$product_category}')";
      // execute query
      mysqli_query($db, $sql);

      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg = 'Image uploaded successfully';
      } else {
          $msg = 'Failed to upload image';
      }
  }
    $result = mysqli_query($db, 'SELECT * FROM images');
    $cat = mysqli_query($db, 'SELECT * FROM category');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Image Upload</title>
    <style type="text/css">
      #content {
        width: 50%;
        margin: 20px auto;
        border: 1px solid #cbcbcb;
      }
      form {
        width: 50%;
        margin: 20px auto;
      }
      form div {
        margin-top: 5px;
      }
      #img_div {
        width: 80%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid #cbcbcb;
      }
      #img_div:after {
        content: "";
        display: block;
        clear: both;
      }
      img {
        float: left;
        margin: 5px;
        width: 300px;
        height: 140px;
      }
    </style>
  </head>
  <body>
    <div id="content">
      <?php
    /* while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>"; echo "<img src='images/".$row['image']."' >";
      echo "
      <p>".$row['image_text']."</p>
      "; echo "
    </div>
    "; }  while ($row = mysqli_fetch_array($cat)) {
        echo '
    <p>'.$row['category_name'].'</p>
    ';
    } */?>
    <form method="POST" action="index.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000" />
      <div>
        <input type="file" name="image" />
      </div>
      <div>
        <input
          id="text"
          cols="40"
          rows="4"
          name="image_text"
          placeholder="Description"
        />
      </div>
      <div>
        <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7 pl-0">
          <div class="input-group">
            <input
              id="quantity"
              name="quantity"
              class="touchspin"
              type="text"
              value="1"
            />
          </div>
        </fieldset>
      </div>
      <div class="form-group row">
                            <label class="col-xl-3 col-sm-4"                         for="product_name"
                              >Price :</label
                            >
                            <div
                              class="col-xl-8 col-sm-7 pl-0 description-sm"
                            >
                            <input
                            class="form-control col-xl-8 col-sm-7"
                            id="product_name"
                            name="product_name"
                            type="number"
                            required=""
                          />
                              
                            </div>
                          </div>
                          <!-- <div class="form-group row">
                            <label class="col-xl-3 col-sm-4"                         for="category_name"
                              >Price :</label
                            >
                            <div
                              class="col-xl-8 col-sm-7 pl-0 description-sm"
                            >
                            <input
                            class="form-control col-xl-8 col-sm-7"
                            id="category_name"
                            name="category_name"
                            type="text"
                            required=""
                          />
                              
                            </div>
                          </div> -->
                          <div class="form">
                            <div class="form-group row">
                              <label
                                for="category_name"
                                class="col-xl-3 col-sm-4 mb-0"
                                >Select Category :</label
                              >
                              <div class="valid-feedback">Looks good!</div>
                              <select
                                class="form-control digits col-xl-8 col-sm-7"
                                id="category_name" name="category_name"
                              >
                              <?php  
                              while ($row = mysqli_fetch_array($cat)){
                                echo "<option>".$row['category_name']."</option>";
                              }
                                     ?>   
                                
                              </select>
                             
                            </div>
                          

      <div>
        <button type="submit" name="upload">POST</button>
      </div>
    </form>
  </body>
</html>
