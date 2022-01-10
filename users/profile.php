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
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['Name'] = $rs['first_name'] . ' ' . $rs['last_name'];
    $_SESSION['mail'] = $rs['email'];
    $email = $_SESSION['mail'];
}
mysqli_close($db);




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
                    <a href="https://www.flickr.com/photos/upload/"><span class="nav-link material-icons ">
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

                    $query = "SELECT * FROM image_add WHERE user_email='$email' and categories_id='1' ORDER BY uploaded_on DESC";
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

                    $query = "SELECT * FROM image_add WHERE user_email='$email' and categories_id='2' ORDER BY uploaded_on DESC";
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

                <h1 class="" style="" id="nameuser"><?php echo  $_SESSION['Name'] ?></h1>

                <h3 id="email "><?php echo $_SESSION['mail']; ?></h3>
                <h4 id="follow ">Follower: 1</h4>
                <h4 id="following ">Following: 888</4>
                    <div class="dropdown">
                        <button class="btn btn-outline-light btn-lg " id="changeCover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Follow</button>

                    </div>
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
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="Faves-tab" data-bs-toggle="tab" data-bs-target="#Faves" type="button" role="tab" aria-controls="events" aria-selected="false">Faves</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="Galleries-tab" data-bs-toggle="tab" data-bs-target="#Galleries" type="button" role="tab" aria-controls="events" aria-selected="false">Galleries</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="Groups-tab" data-bs-toggle="tab" data-bs-target="#Groups" type="button" role="tab" aria-controls="events" aria-selected="false">Groups</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="Stats-tab" data-bs-toggle="tab" data-bs-target="#Stats" type="button" role="tab" aria-controls="events" aria-selected="false">Stats</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " id="CameraRoll-tab" data-bs-toggle="tab" data-bs-target="#CameraRoll" type="button" role="tab" aria-controls="events" aria-selected="false">Camera Roll</button>
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
                            <textarea id="writeSomething" name="writeSomething" class="md-textarea form-control" rows="3" placeholder="Write a little about yourself"><?php echo $row['users_describe']; ?></textarea>

                        </div>
                        <button class="btn btn-outline-info" id="btnWriteSomething">Save</button>
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
                                    <?php echo  $row['registation_date'] ?></p>
                            </div>

                        </div>

                        <div class="row  ms-5">
                            <div class="col-md-1">
                                <p>Email</p>
                            </div>
                            <div class="col-md-2">
                                <a class="text-decoration-none" href="">
                                    <p>
                                        <?php echo $_SESSION['mail'] ?></p>
                                </a>

                            </div>

                        </div>
                    </div>
                    <hr>

                    <div id="caculator">
                        <div class="row ms-5">
                            <div class="col-md-1 col-2 "><a href="" class="text-decoration-none text-dark">
                                    <p>0</p>
                                    <p>Views</p>
                                </a></div>
                            <div class="col-md-1 col-2">
                                <a href="" class="text-decoration-none text-dark">
                                    <p>0</p>
                                    <p>Tags</p>
                                </a>
                            </div>
                            <div class="col-md-1 col-3">
                                <a href="" class="text-decoration-none text-dark">
                                    <p>0</p>
                                    <p>Geotags</p>
                                </a>
                            </div>
                            <div class="col-md-1 col-2">
                                <a href="" class="text-decoration-none text-dark">
                                    <p>0</p>
                                    <p>Faves</p>
                                </a>
                            </div>
                            <div class="col-md-2 col-2">
                                <a href="" class="text-decoration-none text-dark">
                                    <p>0</p>
                                    <p>Group</p>
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
                    <h4 class="mt-3 text-center">Let's make an album.</h4>
                    <p class="mt-3 text-center">Easily organize all your photos into beautiful albums to share with
                        friends, family, or even other</p>
                    <p class=" text-center">Flickr members.</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Go to Camera Roll</button>
                    </div>
                </div>
                <div id="album-photo" class="row d-flex me-1 ms-1 mt-3 ">

                    <img class="img-thumbnail" src="https://image.thanhnien.vn/2048/uploaded/anhth/2021_08_15/naraka-bladepoint-dieu-can-biet03_slbk.jpeg" alt="">
                    <img class="img-thumbnail" src="https://i.pinimg.com/originals/e0/64/7c/e0647c2b22a075f162ac55d75eb21d95.jpg" alt="">
                    <img class="img-thumbnail" src="https://cdn.bhdw.net/im/viper-ning-naraka-bladepoint-tro-choi-dien-tu-truc-tuyen-hinh-nen-74907_L.jpg" alt="">
                    <img class="img-thumbnail" src="https://hoanghapc.vn/media/news/2406_naraka-bladepoint-1.jpg" alt="">
                    <img class="img-thumbnail" src="https://i.pinimg.com/originals/b7/e5/6d/b7e56dfc58e58bb53bd14b8ff6dd794d.jpg" alt="">


                </div>
            </div>
            <!-- Ket thuc Album -->

            <!-- Bat dau Faves -->
            <div class="container-fluid bg-light tab-pane  p-0  " id="Faves" role="tabpanel" aria-labelledby="Faves-tab">

                <div class="row">
                    <h4 class="mt-3 text-center">Start picking your faves. Just click on the star.</h4>
                    <p class="mt-3 text-center">Like something you see? Let the photographer know by clicking on the
                        star icon.</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Start exploring Flickr</button>
                    </div>
                    <div id="faves-photo" class="row d-flex me-1 ms-1 mt-3 flex-wrap mt-5">

                        <img class="img-thumbnail" src="https://image.thanhnien.vn/2048/uploaded/anhth/2021_08_15/naraka-bladepoint-dieu-can-biet03_slbk.jpeg" alt="">
                        <img class="img-thumbnail" src="https://i.pinimg.com/originals/e0/64/7c/e0647c2b22a075f162ac55d75eb21d95.jpg" alt="">
                        <img class="img-thumbnail" src="https://cdn.bhdw.net/im/viper-ning-naraka-bladepoint-tro-choi-dien-tu-truc-tuyen-hinh-nen-74907_L.jpg" alt="">
                        <img class="img-thumbnail" src="https://hoanghapc.vn/media/news/2406_naraka-bladepoint-1.jpg" alt="">
                        <img class="img-thumbnail" src="https://i.pinimg.com/originals/b7/e5/6d/b7e56dfc58e58bb53bd14b8ff6dd794d.jpg" alt="">

                        <img class="img-thumbnail" src="https://hoanghapc.vn/media/news/2406_naraka-bladepoint-10.jpg" alt="">
                        <img class="img-thumbnail" src="https://kenhtre.com/wp-content/uploads/2021/08/20210815/photo-1-1629020557746732390405.jpg" alt="">
                        <img class="img-thumbnail" src="data:image/jpeg;base64,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" alt="">
                        <img class="img-thumbnail" src="https://cdn.tgdd.vn/GameApp/4/238078/Screentshots/naraka-bladepoint-sieu-pham-pubg-phong-cach-kiem-hiep-29-04-2021-2.jpg" alt="">
                        <img class="img-thumbnail" src="https://www.phucanh.vn/media/news/0807_Naraka-Bladepoint-screenshot-1.jpg" alt="">


                    </div>
                </div>
            </div>

            <!-- Ket thuc Faves -->


            <!-- Bat dau Galleries -->
            <div class="container-fluid bg-light tab-pane  p-0  " id="Galleries" role="tabpanel" aria-labelledby="Galleries-tab">
                <div class="row">
                    <h4 class="mt-3 text-center">Your gallery walls are looking pretty bare.</h4>
                    <p class="mt-3 text-center">Galleries are a way to showcase other photographers’ photos and videos.
                        When you see something</p>
                    <p class="mt-3 text-center">you love in Flickr, click the [+] icon to save it to a gallery.</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Create gallery</button>
                    </div>
                    <div id="galleries-photo" class="row d-flex me-1 ms-1 mt-3 flex-wrap mt-5 justify-content-between ">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://image.thanhnien.vn/2048/uploaded/anhth/2021_08_15/naraka-bladepoint-dieu-can-biet03_slbk.jpeg" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://i.pinimg.com/originals/e0/64/7c/e0647c2b22a075f162ac55d75eb21d95.jpg" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://cdn.bhdw.net/im/viper-ning-naraka-bladepoint-tro-choi-dien-tu-truc-tuyen-hinh-nen-74907_L.jpg">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://image.thanhnien.vn/2048/uploaded/anhth/2021_08_15/naraka-bladepoint-dieu-can-biet03_slbk.jpeg" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://i.pinimg.com/originals/e0/64/7c/e0647c2b22a075f162ac55d75eb21d95.jpg" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://cdn.bhdw.net/im/viper-ning-naraka-bladepoint-tro-choi-dien-tu-truc-tuyen-hinh-nen-74907_L.jpg">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://i.pinimg.com/originals/e0/64/7c/e0647c2b22a075f162ac55d75eb21d95.jpg" alt="Card image cap">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="https://cdn.bhdw.net/im/viper-ning-naraka-bladepoint-tro-choi-dien-tu-truc-tuyen-hinh-nen-74907_L.jpg">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Ket thuc Galleries -->

            <!-- Bat dau Group -->
            <div class="container-fluid bg-light tab-pane  p-0  " id="Groups" role="tabpanel" aria-labelledby="Groups-tab">
                <div class="row">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-light">Recent discussions</button>
                        <button type="button" class="btn btn-light"> Create new group</button>
                    </div>
                    <div class="mt-5">
                        <h6 class=" text-center">Flickr groups are a great way to share photos, post comments, and hold
                            discussions around a common theme.</h6>
                    </div>
                    <div class="row mt-5">
                        <div class="mt-5 col-md-6 d-flex justify-content-center">
                            <div class="card " style="width: 18rem;">
                                <img class="card-img-top" src="https://www.anphatpc.com.vn/media/news/1708_2ce8ec98d90f2e51771e.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a class="text-decoration-none text-dark text-center" href="">
                                        <h4 class="card-text">Join</h4>
                                        <p>Vanishing Points</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 col-md-6 d-flex justify-content-center">
                            <div class="card " style="width: 18rem;">
                                <img class="card-img-top" src="https://static.gamehub.vn/img/files/2021/09/16/gamehubvn-game-naraka-valda-cui.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a class="text-decoration-none text-dark text-center" href="">
                                        <h4 class="card-text">Join</h4>
                                        <p>The Fog and The Rain</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 col-md-6 d-flex justify-content-center">
                            <div class="card " style="width: 18rem;">
                                <img class="card-img-top" src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/clans/36350327/071c83b7f4dfd4f025ada186b616f7fae848d91d.png" alt="Card image cap">
                                <div class="card-body">
                                    <a class="text-decoration-none text-dark text-center" href="">
                                        <h4 class="card-text">Join</h4>
                                        <p>FLickrCentrail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 col-md-6 d-flex justify-content-center">
                            <div class="card " style="width: 18rem;">
                                <img class="card-img-top" src="https://img.game-news24.com/2021/09/Naraka-Bladepoint-Mid-Autumn-Festival-guide-Rewards-and-Mooncakes.jpeg" alt="Card image cap">
                                <div class="card-body">
                                    <a class="text-decoration-none text-dark text-center" href="">
                                        <h4 class="card-text">Join</h4>
                                        <p>Abandoned</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Ket thuc Group -->

            <!-- Bat dau Stats -->
            <div class="container-fluid bg-light tab-pane  p-0  " id="Stats" role="tabpanel" aria-labelledby="Stats-tab">

                <div class="row d-flex justify-content-center">
                    <h3 class="mt-5 text-center mb-5">Introducing all new stats for Pro</h3>
                    <img id="Stats-photo" class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Pro_logo.svg/1280px-Pro_logo.svg.png" alt="">
                    <h5 class="mt-5 text-center ">Gain an understanding of how people are discovering your Flickr
                        photos. See which of your photos</h5>
                    <h5 class=" text-center ">are trending now and which have performed the best over the life of your
                        Flickr account.</h5>
                    <div class="d-flex justify-content-center mt-2">
                        <button type="button" class="btn btn-primary">Start exploring Flickr</button>
                    </div>
                </div>

            </div>
            <!-- Ket Thuc Stats -->

            <!-- Bat dau Camera Roll -->
            <div class="container-fluid bg-light tab-pane  p-0  " id="CameraRoll" role="tabpanel" aria-labelledby="CameraRoll-tab">

                <div class="row">
                    <div class="col-md-2">
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle btn-light" href="#" role="button" id="datekenn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Date taken
                            </a>

                            <div class="dropdown-menu" aria-labelledby="datekenn">
                                <a class="dropdown-item" href="#">Date taken</a>
                                <a class="dropdown-item" href="#">Deta uploaded</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 d-flex  justify-content-end align-items-center">
                        <button type="button" class="btn btn-light">Show info</button>

                        <span class="material-icons-outlined d-inline-block">
                            grid_view
                        </span>
                        <span class="material-icons-outlined  d-inline-block">
                            apps
                        </span>


                    </div>
                </div>
            </div>
            <!-- Ket thuc Camera Roll -->
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