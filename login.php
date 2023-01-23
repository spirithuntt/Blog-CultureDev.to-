<?php
include ("./controllers/Userimp.php");
include ("./middlewares/isLoggedin.php");
// creating a an instance of the class islogedin
$islogedin = new IslogedIn();
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CultureDev</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
    <main class="row col-12 mx-0">
            <div class="col-12 col-md-12 col-lg-4 col-sm-12 fullheight background px-5 bg-primary">
                <div class="d-flex flex-column justify-content-center sh">
                <?php
                    if(isset($_POST['submit'])){
                    $user = new Userimp;
                    $user->setEmail($_POST['email']);
                    $user->setPassword($_POST['password']);
                    $user->login();
                }
                if(isset($_GET['verify'])){
                    echo "<div class='alert alert-warning'>Please verify your email</div>";
                }
                ?>
                <img src="assets/img/logo.png" alt="logo" class="img-fluid" width="60%">

                    <h4 class="text-start text-white">Log In</h4>
                    <p class="text-white mb-4">Login with your account to access</p>
                <form method="POST">
                <div class="mb-3">
                    <label  class="form-label text-white">Email address</label>
                    <input type="email" class="input form-control border border-dark" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label  class="form-label text-white">Password</label>
                    <input type="password" class="input form-control border border-dark" id="password" name="password">
                </div>
                    <p class="small"><a class="text-primary" href="resetpassword.php">Forgot password?</a></p>
                    <div class="d-grid">
                        <button class="btn btn-primary border" type="submit"name="submit" >Login</button>
                    </div>
                    <div class="mt-3">
                    <p class="mb-0  text-center text-light">Don't have an account? <a href="signup.php"
                            class="text-white fw-bold"> Sign Up</a></p>
                </div>
                </form>
                </div>
            </div>
            <div class="col-8 d-lg-block d-none d-md-none"  style="height: 100vh !important;background-size: cover;background-image: url(assets/img/image.jpg); background-repeat: no-repeat; background-position:center ">
                
            </div>
            </div>
        </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"></script>
    </body>

</html>