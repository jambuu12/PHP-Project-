
<?php
include "includes/db.php";
if(!isset($_SESSION)) {
    session_start();
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Manuscript</title>

    <!-- Bootstrap core CSS -->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="design/css/header.css">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>
<body>
    <div class="container">
        
    <header class="blog-header py-3 "  style="height:50px">
            <div class="row flex-nowrap justify-content-between align-items-center">

                <div class="col-2 pt-1">
                <a class="blog-header-logo text-dark" href="/">Home</a>
                </div>
                <div class="col-2 pt-1">
                <a class="text-dark" href="" id="AboutMe">About Me </a>    
                </div>
                
                <div class="col-2 pt-1">
                <a class="text-info text-center"   id="Category" href="#"> Categories </a>
                </div>

                <div class="col-2 pt-1">
                <a class="text-dark"href="" id="AllArt">All Articles</a> 
                </div>

                <div class="col-2 d-flex justify-content-end align-items-center">
                      <?php  
                        if (isset($_SESSION['user'])) {
                            print('                          
                                <div class="dropdown">                  
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hello '. $_SESSION['user']['username'] .'
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="addArticle.php">Add Article</a>
                                    <a class="dropdown-item" href="logout.php">Log Out</a>
                                </div>
                                </div>  
                                ');
                            } else {
                                Print ('
                                <a class="btn btn-sm btn-outline-secondary" href="login.php">Sign up/Log in</a>
                                ');
                            } 
                      ?>
                </div>
            </div>
    </header>
    
    <hr>
    <div class="nav-scroller  mb-3"  id="Categories" style="display: none">
            <nav class="nav d-flex justify-content-between">
                <?php                   
                    $category_q = mysqli_query($link,"SELECT * FROM `articles_categories`");   
                    $categories[] = array();
                    while ($row = mysqli_fetch_assoc($category_q)) {
                        $categories[] = $row;
                        echo '<a class="p-2 text-dark cat-field" href="articles.php?category='.$row['id'].'">';
                        echo trim($row['title']);
                        echo '</a>';
                    }
                    ?>        
            </nav>
    </div>
    <hr>
       
