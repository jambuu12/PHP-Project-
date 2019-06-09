<?php include 'templates/header.php'  ?>

<form method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="Text" class="form-control" id="exampleFormControlInput1" name="title" required="True">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Choose Category</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category">
        <?php
            foreach ($categories as $cats) {
                if($cats != Null){
                echo ('<option>');
                echo $cats['title'];
                echo ('</option>');   
                }
            }        
        ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" required="True"></textarea>
  </div>
  <button type="Submit" class="btn btn-lg btn-outline-secondary">Post Article</button>
</form>

<?php include 'templates/footer.php';?>
<?php 

            if($_SERVER['REQUEST_METHOD'] === "POST"){
                $cat = $_POST['category'];
                $category = mysqli_query($link,
                "SELECT `id` from `articles_categories` WHERE `title` = '$cat' ");              
                $arr = mysqli_fetch_assoc($category);
                $res_cat = $arr['id'];
                $pubdate = date("Y-m-d h:m:s");
                $article = array(
                    "user" => $_SESSION['user']['username'],
                    "title" => $_POST['title'],
                    "category" => $res_cat,
                    "text" => $_POST['text']
                );

                $myErr = False;
                
                foreach ($article as $art) {
                   if(empty($art)){
                    $myErr = True;
                    break;
                   }
                }

               if($myErr){
                    echo('
                    smthing is going wrong,fill the field
                    ');
                }else{
                    $user = $article['user'];
                    $title = $article['title'];
                    $categorie = $res_cat;
                    $text = $article['text'];
                    $addTitle = mysqli_query($link,
                    "INSERT INTO `articles` (user,title,categorie_id,text,pubdate)
                    VALUES('$user','$title','$res_cat','$text','$pubdate')");
               }

            }