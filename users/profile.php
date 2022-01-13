<?php session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login.php");
}
?>
<?php


$id = $_GET['id'];
include 'dbConfig.php';

$query = "SELECT * FROM users WHERE  users_id ='$id'";
$result = mysqli_query($db, $query);
$rs = mysqli_fetch_array($result);

mysqli_close($db);

$email = $rs['email'];
$name = $rs['first_name'] . ' ' . $rs['last_name'];
$describe=$rs['users_describe'];
$registation_date=$rs['registation_date'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> You|Flickr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/you_style.css">
    <link rel="stylesheet" href=".././assets/css/reponsive.css">
    <link rel="stylesheet" href=".././assets/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/you_responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../assets/js/you1.js"></script>
</head>

<body>
    <header class="  container-fluid bg-black">

        <nav class="navbar navbar-expand-lg navbar-dark header-row bg-black container">


            <a class="navbar-brand nav-link " href="index.php">
                <div class="logo">
                    <img src=".././assets/img/logo3.png" alt="" class="img-logo">
                    <h2>flickr</h2>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-mb" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown nav-item-mb">
                        <a class="nav-link ms-3 " href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="you.php " class="text-white ms-3" style="text-decoration: none;">You</a>
                        </a>
                        <ul class="  dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">About</a></li>
                            <li><a class="dropdown-item" href="#">Photostream</a></li>
                            <li><a class="dropdown-item" href="#">Albums</a></li>
                            <li><a class="dropdown-item" href="#">Faves</a></li>
                            <li><a class="dropdown-item" href="#">Galleries</a></li>
                            <li><a class="dropdown-item" href="#">Group</a></li>
                            <li><a class="dropdown-item" href="#">Camera Roll</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Recent Activity</a></li>
                            <li><a class="dropdown-item" href="#">People</a></li>
                            <li><a class="dropdown-item" href="#">Organize</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-item-mb">
                        <a class="nav-link ms-3" href="explore.php" id="navbarDropdownnn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="explore.php " class="text-white ms-3" style="text-decoration: none;">Explores</a>
                        </a>
                        <ul class=" dropdown-menu" aria-labelledby="navbarDropdownnn">
                            <li><a class="dropdown-item" href="explore.php">Recent Photos</a></li>
                            <li><a class="dropdown-item" href="explore.php">Trending</a></li>
                            <li><a class="dropdown-item" href="explore.php">Events</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/commons">The Commons</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/photos/flickr/galleries">Flickr
                                    Galleries</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/map">World Map</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/cameras">Camera Finder</a></li>
                            <li><a class="dropdown-item" href="https://blog.flickr.net/en">Flickr Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-item-mb ">
                        <a class="nav-link ms-3" href="#" id="navbarDropdownn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="prints.php " class="text-white ms-3" style="text-decoration: none;">Prints</a>
                        </a>
                        <ul class=" dropdown-menu" aria-labelledby="navbarDropdownn">
                            <li><a class="dropdown-item" href="#">Prints & Wall Art</a></li>
                            <li><a class="dropdown-item" href="#">Photo Books</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item text-secondary" href="#">View Cart (0)</a></li>
                        </ul>
                    </li>
                    <a href="" class="nav-link ps-4  nav-item-mb">Get Pro</a>

                </ul>
                <form class=" nav-item d-flex nav-item-mb">
                    <div class=" nav-link search">
                        <span class="icon-search">
                            <i class="ti-search"> </i>
                        </span>
                        <input class="form-control me-2 btn-group input-search" id="input_search" type="search" placeholder="Photos,people or groups" aria-label="Search">

                    </div>
                </form>
                <div class="nav-item icon-nav nav-item-mb">
                    <a href="prints.php"><span class="nav-link material-icons ">
                            backup
                        </span></a>

                </div>
                <div class="nav-item icon-nav nav-item-mb">
                    <span class="nav-link material-icons ">
                        notifications
                    </span>
                </div>
                <div class="nav-item nav-item-mb">
                    <?php include 'dbConfig.php';
                        $user_email=$_SESSION['LoginOK'];
                    $query = "SELECT * FROM image_add WHERE user_email='$user_email'  and isAvatar=1";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $link = $row['imageAdd_link'];
                    } else {
                        $row = ['imageAdd_link' => 'defaultCover.jpg'];
                        $link = $row['imageAdd_link'];
                    }

                    mysqli_close($db);
                    ?>
                    <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="" class=" img-user">
                </div>
                <a class="nav-item nav-item-mb " name='btnlogout' href="logout.php">
                    <span class="material-icons ms-3 mt-2 ">
                        logout
                    </span>
                </a>

            </div>

        </nav>

    </header>

    <div id="SEARCH_RESULT" class="bg-light" style="width:250px; position:absolute;right:390px;">
    </div>
    <div id="cover" class="img-fluid bg-image d-flex flex-column  align-items-center justify-content-center" style=" witdh: 100% ;background-image: url('../assets/img/userImg/<?php echo $link; ?>');">
        <div id="cover-info" class="row text-white ps-5 pe-5 " style="width: 100% ;background-color: rgba(0, 0, 0, 0.3); ">
            <div class="col-md-5 d-flex justify-content-center align-items-center ">
                <a class=" img-fluid " href="update_avatar.php">
                    <?php include 'dbConfig.php';

                    $query = "SELECT * FROM image_add WHERE user_email='$email' and isAvatar=1";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $link = $row['imageAdd_link'];
                    } else {
                        $row = ['imageAdd_link' => 'defaultCover.jpg'];
                        $link = $row['imageAdd_link'];
                    }

                    mysqli_close($db);
                    ?>
                    <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" id="avatar" class="img-fluid  border border-white " alt="">
                </a>
            </div>

            <div class="col-md-7 p-3 ">

                <h1 class="" style="" id="nameuser"><?php echo  $name ?></h1>

                <h3 id="email "><?php echo $email; ?></h3>
                <?php

                include 'dbConfig.php';

                //  $id=$_SESSION['id'];
                $query = "SELECT COUNT(*) as SOLUONG FROM follow WHERE users_id='$id' ";
                $result = mysqli_query($db, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                }
                $following = $row['SOLUONG'];

                $query = "SELECT COUNT(*) as SOLUONG FROM follow WHERE following_id='$id' ";
                $result = mysqli_query($db, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                }
                $follower = $row['SOLUONG'];



                ?>
                <h4 id="follow ">Follower:<?php echo $follower; ?></h4>
                <h4 id="following ">Following:<?php echo $following; ?></4>
                    <?php
                    include 'dbConfig.php';
                    $id_user = $_SESSION['id'];
                    $query = "SELECT * FROM follow WHERE users_id='$id_user' and following_id='$id'";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <form action="process_unfollow.php" method='post'>
                            <div class="dropdown">
                                <button class="btn btn-outline-light btn-lg " name="changeCover" id="changeCover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unfollow</button>
                                <input style="display: none;" type="text" class="form-control" id="txtUsers_id" name="txtUsers_id"  value="<?php echo $id_user; ?>">
                                <input style="display: none;" type="text" class="form-control" id="txtFollowing_id" name="txtFollowing_id" value="<?php echo $id;?>">
                            </div>
                        </form>
                    <?php
                    } else {
                    ?>
                        <form action="process_follow.php" method='post'>
                            <div class="dropdown">
                                <button class="btn btn-outline-light btn-lg " name="changeCover" id="changeCover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Follow</button>
                                <input style="display: none;" type="text" class="form-control" id="txtUsers_id" name="txtUsers_id"  value="<?php echo $id_user; ?>">
                                <input style="display: none;" type="text" class="form-control" id="txtFollowing_id" name="txtFollowing_id" value="<?php echo $id;?>">
                            </div>
                        </form>
                    <?php
                    }

                    ?>

            </div>
        </div>
    </div>
    </div>


    <div class="container">
        <ul class="nav nav-tabs tab-Content container  tabUI " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active  " id="About-tab" data-bs-toggle="tab" data-bs-target="#About" type="button" role="tab" aria-controls="About" aria-selected="true">About</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="Photostream-tab  " data-bs-toggle="tab" data-bs-target="#Photostream" type="button" role="tab" aria-controls="Photostream" aria-selected="false">Photostream</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="Albums-tab" data-bs-toggle="tab" data-bs-target="#Albums" type="button" role="tab" aria-controls="events" aria-selected="false">Albums</button>
            </li>         

        </ul>

        <!-- Tab panes -->
        <div class="tab-content border border-light shadow-lg">
            <!-- Bat dau  About -->
            <div class="container-fluid bg-light tab-pane active active-black p-0  " id="About" role="tabpanel" aria-labelledby="About-tab">


                <div class="container" style="height: 84;">
                    <form autocomplete action="process_update_describe.php" method="POST" id="formWriteSomething">
                        <div class="md-form mb-4 pink-textarea active-pink-textarea">
                            <?php include("dbConfig.php");

                            $query = "SELECT * FROM users WHERE email='$email'";
                            $result = mysqli_query($db, $query);
                            if (mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                            }

                            mysqli_close($db);
                            ?>
                            <textarea id="writeSomething" name="writeSomething" class="md-textarea form-control" rows="3" placeholder="Write a little about yourself"> <?php echo $describe; ?></textarea>

                        </div>
                    </form>

                    <hr>

                    <div class="showcase ">
                        <div class="row">
                            <div class="col-md-1  ">
                                <p>Showcase</p>
                            </div>
                            <div class="col-md-1 ">
                                <a href=""><span class="material-icons-outlined text-black">
                                        edit
                                    </span></a>
                            </div>
                            <div id="showcase-add" class="col-12 col-md-10 d-flex justify-content-end">
                                <a href="">
                                    <span class=" material-icons-outlined text-black">
                                        add
                                    </span>
                                </a>
                            </div>

                        </div>
                        <div id="showcase-image" class="row img-fluid bg-image bg-danger d-flex justify-content-center align-items-center">
                            <div class="">
                                <h4 class="text-center">This is your showcase.</h4>
                                <h4 class="text-center">Show off up to 25 of your photos.</h4>
                                <a class="text-decoration-none" href="">
                                    <h4 class="text-center ">Get started</h4>
                                </a>
                            </div>

                        </div>
                    </div>
                    <hr>

                    <div class="join ">
                        <div class="row d-flex justify-content-end ">
                            <a class="col-md-1" href=""><span class="material-icons-outlined text-black">
                                    edit
                                </span></a>
                        </div>
                        <div class="row  ms-5">
                            <div class="col-md-1">
                                <p>Joined</p>
                            </div>
                            <div class="col-md-2">
                                <p>
                                    <?php echo  $registation_date; ?></p>
                            </div>

                        </div>

                        <div class="row  ms-5">
                            <div class="col-md-1">
                                <p>Email</p>
                            </div>
                            <div class="col-md-2">
                                <a class="text-decoration-none" href="">
                                    <p>
                                        <?php echo $row['email'] ?></p>
                                </a>

                            </div>

                        </div>
                    </div>
                    <hr>
                    <h6 class="mt-3">Most popular photos</h6>
                    <div id="popular-photo" class=" text-center bg-image d-flex justify-content-lg-center align-items-center ">
                        <div>
                            <h4>Your most popular photos will appear here.</h4>
                            <p>Set your photos to public for more faves, comments and views.</p>
                            <p>For even more exposure, add them to Groups</p>
                            <a class="text-decoration-none" href="">
                                <p>Go to Camera Roll</p>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class=" mt-3">
                        <div class="row">

                            <h6>Testimonials</h6>

                        </div>
                        <div class="row">
                            <div id="btn-received">
                                <div class="dropdown show">
                                    <a class="btn btn-secondary btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Received
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Received</a>
                                        <a class="dropdown-item" href="#">Given</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="Testimonials" class="border border-1 d-flex ">
                        <p class="ms-2" style="line-height: 64px;">Nobody has added a testimonial for you yet.</p>
                    </div>
                </div>

            </div>

            <!-- Ket Thuc About -->


            <!-- Bat dau Photostream -->
            <div class="container-fluid bg-light tab-pane p-0  " id="Photostream" role="tabpanel" aria-labelledby="Photostream-tab">
                <div class="row">
                    <div class="col-md-1">
                        <div class="dropdown show">
                            <a class="btn btn-secondary btn-light dropdown-toggle" href="#" role="button" id="datetaken" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Date taken
                            </a>
                            <div class="dropdown-menu" aria-labelledby="datetaken">
                                <a class="dropdown-item" href="#">Received</a>
                                <a class="dropdown-item" href="#">Given</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="dropdown show">
                            <a class="btn btn-secondary btn-light dropdown-toggle" href="#" role="button" id="viewall" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                View all
                            </a>
                            <div class="dropdown-menu" aria-labelledby="viewall">
                                <a class="dropdown-item" href="#">Received</a>
                                <a class="dropdown-item" href="#">Given</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-end text-center mt-2 col-12">

                        <a class="text-black text-decoration-none " href="">
                            <span class="ms-3 material-icons-outlined ">
                                edit
                            </span>
                        </a>
                        <a class="text-black text-decoration-none " href="">
                            <span class="ms-3 material-icons-outlined">
                                search
                            </span>
                        </a>
                        <a class="text-black text-decoration-none " href="">
                            <span class="ms-3 material-icons-outlined ">
                                slideshow
                            </span>
                        </a>
                        <a class="text-black text-decoration-none " href="">
                            <span class="ms-3 material-icons-outlined ">
                                double_arrow
                            </span>
                        </a>


                    </div>

                    <!--Đoạn này để ảnh mà người dùng đăng lên  -->

                    <div class="d-flex flex-wrap">
                        <?php include 'dbConfig.php';

                        $query = "SELECT * FROM image_add WHERE user_email='$email' ";
                        $result = mysqli_query($db, $query);
                        $rs = mysqli_fetch_array($result);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                        ?>

                                <div class=" p-1 img col-md-4 ">
                                    <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" style=" witdh: 100% ; height: 250px;" alt="" class="img-fluid img-item">
                                    <!-- <div class="row">
                                        <div class=" ">
                                            <div class="text-white"></div>


                                        </div>
                                    </div> -->

                                </div>
                        <?php
                            }
                        }
                        mysqli_close($db);
                        ?>
                    </div>
                </div>
            </div>

            <!-- Kết thúc -->



            <!-- Ket thuc Photostream -->

            <!-- Bat dau Album -->
            
            <div class="container-fluid bg-light tab-pane  p-0  " id="Albums" role="tabpanel" aria-labelledby="Albums-tab">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <h3 class="mt-4"><?php echo $name." 's " ?>Avatar</h3>
                    </div>
                    <?php include 'dbConfig.php';
                    
                    $query = "SELECT * FROM image_add WHERE user_email='$email' and categories_id=2 ORDER BY uploaded_on DESC";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <a href="" class="mt-5 col-md-6 d-flex justify-content-center text-decoration-none"> 
                    <div >
                                <div class="card " style="width: 18rem;">
                                    <img class="card-img-top" src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="text-decoration-none text-dark text-center" href="">
                                            <h4 class="card-text"><?php echo $row['uploaded_on'];  ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </a>
                            
                    <?php
                        }
                    }
                    ?>

                </div>

                <div class="row">
                    <div class="d-flex justify-content-center">
                        <h3 class="mt-4"><?php echo $name." 's " ?>Cover</h3>
                    </div>
                    <?php include 'dbConfig.php';
                   
                    $query = "SELECT * FROM image_add WHERE user_email='$email' and categories_id=1 ORDER BY uploaded_on DESC";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <a href="" class="mt-5 col-md-6 d-flex justify-content-center text-decoration-none"> 
                    <div >
                                <div class="card " style="width: 18rem;">
                                    <img class="card-img-top" src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="text-decoration-none text-dark text-center" href="">
                                            <h4 class="card-text"><?php echo $row['uploaded_on'];  ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </a>
                            
                    <?php
                        }
                    }
                    ?>

                </div>
                
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <h3 class="mt-4"><?php echo $name." 's " ?>Image</h3>
                    </div>
                    <?php include 'dbConfig.php';
                 
                    $query = "SELECT * FROM image_add WHERE user_email='$email' and categories_id=3 ORDER BY uploaded_on DESC";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <a href="" class=" mt-5 col-md-6 d-flex justify-content-center text-decoration-none" > 
                    <div >
                                <div class="card " style="width: 18rem;">
                                    <img class="card-img-top" src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="text-decoration-none text-dark text-center" href="">
                                            <h4 class="card-text"><?php echo $row['uploaded_on'];  ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </a>
                            
                    <?php
                        }
                    }
                    ?>

                </div>

            </div>
            </div>
            <!-- Ket thuc Album -->

                
        </div>
    </div>

    <div class=" cn-footer container-fluid bg-black p-0">

        <nav class="navbar  header-row bg-dark ">
            <div class="container fter pb-3 pt-3" style="border-bottom: 1px solid #7e7c7c;">
                <a class=" nav-item " href="#">
                    <a href="" class=" item-footer text-decoration-none text-white">About</a>

                </a>

                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">Jobs</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">Blog</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">Report abuse</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">Developers</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">Guidelines</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">Help</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">Help forum</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer text-decoration-none text-white">English
                        <i class="ti-angle-down p-0"></i>
                    </a>

                </a>
            </div>
            <div class="container mt-2 pb-3 pt-2">

                <div class="nav-item it">
                    <a href="" class="item-footer ms-3 text-secondary text-decoration-none">Privacy</a>


                    <a href="" class="item-footer ms-3 text-secondary text-decoration-none"> Terms</a>
                    <a href="" class="item-footer ms-3 text-secondary text-decoration-none">Cookies</a>
                </div>
                <div class="nav-item text-secondary">
                    SmugMug+Flickr. Connecting people through photography.

                </div>
                <div class="nav-item">
                    <i class="ti-facebook text-secondary ms-3" style="font-size: 20px;"></i>
                    <i class="ti-twitter-alt text-secondary ms-3" style="font-size: 20px;"></i>
                    <i class="ti-instagram text-secondary ms-3" style="font-size: 20px;"></i>

                </div>
            </div>
        </nav>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#input_search").keyup(function() {
                var input = $(this).val();
                //alert(input);
                if (input != "") {
                    $.ajax({
                        url: "liveSearch.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        success: function(data) {
                            $("#SEARCH_RESULT").html(data);
                            $("#SEARCH_RESULT").css("display", "block");
                        }
                    });
                } else {
                    $("#SEARCH_RESULT").css("display", "none");
                }
            });
        });
    </script>
    <script src="../assets/js/you.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>