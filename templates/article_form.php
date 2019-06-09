<?php
 $cur_art = mysqli_query($link,"SELECT * from `articles` WHERE `id` = $art_id");
    if(mysqli_num_rows($cur_art) > 0){
      $cur_art_arr = mysqli_fetch_assoc($cur_art);
       $new_date = date('Y-m-d', strtotime($cur_art_arr['pubdate']));

       print('
        <div class="blog-post">
            <h2 class="blog-post-title">'.$cur_art_arr['title'].'</h2>
            <p class="blog-post-meta">'. $new_date.' by <a href="#">'.$cur_art_arr['user'].'</a></p>
            <p class="blog-post-meta"> '.$cur_art_arr['views'].' views </a></p>
            <hr>
              <div class="row">
                <div class="col-md-6 cold-lg-8">
                  <p>
                  '.$cur_art_arr['text'].'
                  </p>
                </div>    
                  <div class="col-md-4">
                    <img src="static/img/noimg.png" srcset="./static/img/noimg.png">
                  </div>
                </div>
            </div>
        
        ');
    }
 ?>
