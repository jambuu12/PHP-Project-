<?php

$cur_cat = mysqli_query($link,"SELECT * from `articles` WHERE `categorie_id` = $cat_id");
    print ('<div class="row">');
    if(mysqli_num_rows($cur_cat) > 0){
        while($cat_arr = mysqli_fetch_assoc($cur_cat)){
           print ('
           
           <div class="col-md-4 col-lg-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">              
                <h3 class="mb-0">
                <a class="text-dark" href="/articles.php?category='.$cat_arr['categorie_id'].'&id='.$cat_arr['id'].'">'.$cat_arr['title'].'</a>
                </h3>
                <div class="mb-1 text-muted">'.$cat_arr['pubdate'].'</div>
                <p class="card-text mb-auto">'. mb_substr($cat_arr['text'],0,100) .' ... </p>
                <a href="/articles.php?category='.$cat_arr['categorie_id'].'&id='.$cat_arr['id'].'">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" alt="static/img/noimg.png" style="width: 200px; height: 250px;" src="static/img/noimg.png" data-holder-rendered="true">
            </div>
            </div>
           ');
        }   
    }   else{
        Print ('
            <div>
                <h1><strong> Ooops, this category is empty </strong></h1>
            </div>
        ');
    }
    print ('</div>')
 ?>