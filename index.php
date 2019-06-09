<?php

include "templates/header.php";
include "templates/top_view.php"; ?>
        
        <!-- asdasd -->
        <div class="row mb-2">
        <?php include "templates/last_upd.php"; ?>
         </div>                          

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h2 class="pb-3 mb-4 font-italic border-bottom">
            About
          </h2>
          <div class="p-3 mb-3 bg-light rounded">
            <p class="mb-0"> It's a simple written blog called <em>Manuscript</em>. Created in 25-06-2018</p>
            <p class="mb-0"> and bla bla bla </p>
          </div>
        </div><!-- /.blog-main -->

        <!-- SIDE BAR -->
        <aside class="col-md-4 blog-sidebar">
        <h2 class="pb-3 mb-4 font-italic border-bottom">Elsewhere</h2>
          <div class="p-3 mb-2 bg-light rounded">
            <ol class="list-unstyled">
              <li><a href="https://github.com/jambuu12" target="_blank">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="https://www.facebook.com/why.areU.surfing.my.page" target="_blank">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <?php include 'templates/footer.php' ?>