<?php

require_once "Classes/User.php";



if($_SERVER['REQUEST_METHOD'] === "GET") {
    include 'templates/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3"> 
            <div class="col-md-4 offset-4">
                 <h1 class="text-muted"> Sign Up </h1>    
            </div>
           
            <hr>
                <form method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="namelabel">Username</label>
                                <input name="username" id="namelabel" type="text" class="form-control" placeholder="Username" required>
                            </div>                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Retype Password</label>
                        <input name="passwordConfirm" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>

                    <div class="col-md-4 offset-4">
                     <button type="submit" class="btn btn-primary">Submit</button>               
                </div>  
                <div class="col-md-4 offset-2">         
                     <a class="btn text-muted" href="/login.php">Already have account? Sign In ^_^ </a>
                </div>  
                </form>
          </div>
    </div>

 
 <!--  ================================================== -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
   <script>

        $(document).ready(function(){
            $("#Category").click(function(){
                $("#Categories").slideToggle("slow");
            });
        $("#AboutMe").click(function(){
            alert("mmMM, so curious ;)");
        });

        $("#AllArt").click(function(){
            alert("Too Curious ^^ ");
        });
        
        });
    </script>
<?php

}

elseif($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['passwordConfirm'];

            if( $password == $password2){
                User::register($username,$password,$email);
            } else{
                print("PASSWORD-RETYPE INCORRECT");
            }
        
}
else {
    die("Method not allowed");
}
