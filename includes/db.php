
<?php
  
        $link = mysqli_connect("localhost", "root", "", "test_db");
        
        if ($link == false){
            echo "Data-Base connection Error";        
            echo mysqli_connect_error();
            die();
        }

?>