<?php 
    $last_upd = mysqli_query($link,"SELECT * from `articles` Order by `pubdate` Desc Limit 4");

       while ($row = mysqli_fetch_assoc($last_upd)){
            foreach($categories as $cat){
                $art_title = false;
                if (!empty($cat['id'])){
                    if($cat['id'] == $row['categorie_id']){
                        $art_title = $cat['title'];
                        break;
                    }
                }
                
            }
                echo ('
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">'.$art_title.'</strong>
                            <h3 class="mb-0">
                            <a class="text-dark" href="/articles.php?category='.$row['categorie_id'].'&id='.$row['id'].'">'.$row['title'].'</a>
                            </h3>
                            <div class="mb-1 text-muted">'.$row['pubdate'].'</div>
                            <p class="card-text mb-auto">'. mb_substr($row['text'],0,100) .' ... </p>
                            <a href="/articles.php?category='.$row['categorie_id'].'&id='.$row['id'].'">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block"  style="width: 200px; height: 250px;" src="static/img/noimg.png" data-holder-rendered="true">
                        </div>
                     </div>
            ');
        }
 ?>
