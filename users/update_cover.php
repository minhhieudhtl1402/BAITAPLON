<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/style.css">
    <link rel="stylesheet" href=".././assets/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header class="  container-fluid p-0 mt-0 top-0">
      
        <nav class="navbar navbar-expand-lg navbar-dark header-row bg-white mt-0">
            <a class="navbar-brand nav-link " href="">
                <div class="logo">
                    <img src=".././assets/img/logo2.png" alt="" class="img-logo2 " style="width: 80px;">
                  
                </div>
            </a>
            <a href="" class="nav-item ">
                <h2 class= "mt-3 "style="font-size: 15px; font-weight: 700;"><a href="" class="text-secondary text-decoration-none">Your Photostream</a></h2>
            </a>
            <a href="" class="nav-item ">
                <h2 class= "mt-3  ms-3"style="font-size: 15px; font-weight: 700;"><a href="" class="text-secondary text-decoration-none ">Create</a></h2>
            </a>
           
            <a href="" class="nav-item  navb ">
                <p class= "mt-4 text-end"style="font-size: 15px; font-weight: 200;"><a href="" class="text-secondary text-decoration-none">Old Uploadr</a></p>
            </a>
            <a href="" class="nav-item ">
                <p class= "mt-4 ms-3 text-end "style="font-size: 15px; font-weight: 200; "><a href="" class="text-secondary text-decoration-none">New Here?</a></p>
            </a>
            <div class="img">
                <img src=".././assets/img/avtimg.jfif" alt="" class=" img-user1 ">
            </div>
        



        </nav>
    </header>
   
    
    <div class="container-fluid   main-up">
        
        <div class="row " >
            <div class="col-md-4"></div>
           
            <div class="col-md-4 " >
                <form role="form " style="margin-top: 250px;" action="process_update_cover.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label fs-3 text-white">Choose Image</label>
                        <input name="file" class="form-control" type="file"  multiple>
                      </div>
                    
                      <!-- <input class="form-control form-control-lg" type="text" placeholder="Title Image" aria-label=".form-control-lg example" name="title"> -->
                    <button type="submit" class="btn btn-primary  mt-3" name="submit">
                        upload
                    </button>
                </form>
            </div>
             <div class="col-md-4"></div>
        </div>
    </div>



    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>
