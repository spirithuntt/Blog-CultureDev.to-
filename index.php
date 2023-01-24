<?php
include('./controllers/Userimp.php');
include('./middlewares/isLoggedin.php');
$islogedin = new IslogedIn();



?>
<!-- hello this is the landing page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>landing page</h3>
                    </div>
                    <div class="card-body">
                        Welcome <br>
                        <?php
                            if(isset($_SESSION['fname'])){
                                echo $_SESSION['fname'];
                            }
                        ?>
                        <br>
                        this is the landing page
                        <a href="./logout.php">logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



