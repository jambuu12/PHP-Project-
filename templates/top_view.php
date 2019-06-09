<!-- TOP VIEW ARTICLE -->
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <?php

            $result = mysqli_query($link,"SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 1");  
            $row = mysqli_fetch_assoc($result);
           
                echo('
                <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">' . $row['title'] . '</h1>               
                <p class="lead my-3">' . mb_substr($row['text'],0,200) . ' ... </p>
                <p class="lead mb-0"><a href="/articles.php?category='.$row['categorie_id'].'&id='.$row['id'].'" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
                
                <div class="col-md-4">

                </div>
                ');
            ?>
                    
    </div>
    <!-- TOP VIEW ARTICLE -->