  
  <?php 
  include "templates/header.php";
    
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
      if (array_key_exists("category", $_GET) & array_key_exists("id", $_GET)){
        $cat_id = $_GET['category'];  
        $art_id = $_GET['id'];
        $views = mysqli_query($link,"UPDATE `articles` SET `views` = `views` + 1  WHERE `id` = '$art_id'");
        include "templates/article_form.php";
      } elseif(!array_key_exists("id", $_GET) && array_key_exists("category", $_GET)) {
        $cat_id = $_GET['category']; 
        include "templates/category_form.php";  
        }
      else {
        // TODO main page
      }
      }
  ?>
<?php include 'templates/footer.php'; ?>

