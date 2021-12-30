<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=".././assets/css/reponsiveLogin.css">

</head>

<body>
    <nav>
        <div class="brand mb-3">

            <img src=".././assets/img/logonav.png" class="img-logo" alt="">
            <h2 class="ms-5">flickr</h2>
        </div>
    </nav>

    <div class="img-sign">
        <img src=".././assets/img/imgsign.jpg" alt="" class="imgbtx">
        <div class="main">
            <form method="POST" class="form" action="process_loginadmin.php">
                <img src=".././assets/img/logonav.png" alt="" class="img-logoform">

                <h6 class="heading mt-1">Log in to Admin Flickr</h6>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <form role="form">

                            <input type="text" class="form-control" id="inputName" name="txtName" placeholder="User" required autofocus />


                            <input type="Password" class="form-control mt-3 mb-2" id="inputPass" name="txtPass" placeholder="Password" required />
                            <?php
                            if (isset($_GET['error'])) {
                                echo "<p style='color:red'> {$_GET['error']} </p>";
                            }
                            ?>
                            <button class="form-submit" name="btnLogin">Submit</button>
                            <hr>

                        </form>
                    </div>
                </div>
            </form>
        </div>

        <div class="  footer ">
            <div class="col-md-5  lag ">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                    English
                </a>
                <ul class="dropdown-menu text-white" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Deutsch</a></li>
                    <li><a class="dropdown-item" href="#">Francais</a></li>
                    <li><a class="dropdown-item" href="#">Tiếng Việt</a></li>
                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                    <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                </ul>
            </div>


            <div class="col-md-7 ft  ">
                <a href="https://www.flickrhelp.com/hc/en-us" class="text-white text-decoration-none  ">Help</a>

                <a href="https://www.flickr.com/help/privacy" class="text-white text-decoration-none ms-3 ">Privacy</a>
                <a href="https://www.flickr.com/help/terms" class="text-white text-decoration-none  ms-3 me-3">Term</a>
            </div>

        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>