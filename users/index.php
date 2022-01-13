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
    <title> Flickr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/css/reponsiveM.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href=".././assets/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <header class="  container-fluid bg-black">

        <nav class="navbar navbar-expand-lg navbar-dark header-row bg-black container">


            <a class="navbar-brand nav-link " href="">
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
                            <li><a class="dropdown-item" href="#">About</a></li>
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
                        <a class="nav-link ms-3" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="explore.php " class="text-white ms-3" style="text-decoration: none;">Explores</a>
                        </a>
                        <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
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
                        <a class="nav-link ms-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="prints.php " class="text-white ms-3" style="text-decoration: none;">Prints</a>
                        </a>
                        <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Prints & Wall Art</a></li>
                            <li><a class="dropdown-item" href="#">Photo Books</a></li>

                            <hr class="dropdown-divider">
                    </li>
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

                        <input class="form-control me-2 btn-group input-search" id="inputsearch" type="search" placeholder="Photos,people or groups" aria-label="Search">
                    </div>
                </form>

                <div class="nav-item icon-nav nav-item-mb">
                    <a href="uploadImg.php"><span class="nav-link material-icons ">
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
                    $email = $_SESSION['LoginOK'];
                    $query = "SELECT * FROM image_add WHERE user_email='$email' and isAvatar=1";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    } else {
                        $row = ['imageAdd_link' => 'defaultAvatar.webp'];
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
            </div>
        </nav>

    </header>
    <div class="main bg-light">

        <div class="container">

            <div class="row">
                <div class="col-md-8  ">
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="nav-item dropdown mt-4">
                                <a class="nav-link ms-3 dropdown-toggle all-act" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    All Activity
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item " href="#">
                                            <h5>All Activity</h5>
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">Peoples</a></li>
                                    <li><a class="dropdown-item" href="#">Groups</a></li>
                                    <li><a class="dropdown-item" href="#">Friends and Family</a></li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3 mt-3 icon-mb">
                            <span class="material-icons text-primary icon-mb">
                                apps
                            </span>
                            <span class="material-icons ">
                                view_quilt
                            </span>
                            <span class="material-icons">
                                square
                            </span>
                        </div>
                    </div>
                    <div class="row   mb-5 p-2 bg-white  pb-3" <div>
                        <?php include 'dbConfig.php';
                        $email = $_SESSION['LoginOK'];
                        $id = $_SESSION['id'];
                        $query = "SELECT * FROM users INNER JOIN image_add on users.email= image_add.user_email WHERE categories_id= '3' and EXISTS(SELECT following_id FROM follow WHERE users_id= '$id' AND users.users_id=follow.following_id order by RAND() )  order by RAND() limit 9;";
                        $result = mysqli_query($db, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['imageAdd_id'];
                                if ($row['users_id'] == $id) {
                                    continue;
                                }
                        ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn p-1  col-md-4 border-none " data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id; ?>">
                                    <div class="img  ">
                                        <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="" style=" width: 100%; height: 200px" class="img-fluid img-item ">
                                        <div class="row nameTitle ps-1 pe-1">
                                            <div class=" text-white col-md-8 nameus text-start ">
                                                <a href="profile.php?id=<?php echo $row['users_id']; ?>" class="text-decoration-none text-white"> <?php echo $row['first_name'] . ' ' . $row['last_name']; ?></a>
                                            </div>
                                            <div class="col-md-4 timeup text-end">
                                                <?php echo $row['uploaded_on']; ?>

                                            </div>
                                        </div>
                                       
                                    </div>

                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">posted by: <?php echo $row['first_name'] . ' ' . $row['last_name']; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" class="img-fluid" style="width: 100%;" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>





                        <?php

                            }
                        }
                        mysqli_close($db);
                        ?>
                    </div>
                    <hr>

                    <div class="row bg-white mt-5 mb-5 ">
                        <div class="col-md-12">
                            <h3 class="header-fl ms-0">
                                People to follow
                            </h3>

                        </div>
                    </div>
                    <div class="row bg-white timkiem1 mt-5 mb-5 ">
                        <?php include 'dbConfig.php';
                        $id = $_SESSION['id'];
                        $email = $_SESSION['LoginOK'];
                        $query = "SELECT * FROM users INNER JOIN image_add on users.email= image_add.user_email WHERE isCover=1 and not EXISTS(SELECT following_id FROM follow WHERE users_id='$id' AND users.users_id=follow.following_id order by RAND() ) order by RAND() limit 6;";
                        $result = mysqli_query($db, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['imageAdd_id'];
                                if ($row['users_id'] == $id) {
                                    continue;
                                }
                        ?>
                               
                                 <div class="col-md-6 user">
                                    <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="" class=" img-fluid img-us">
                                    <div class="body">
                                       
                                        <div class="title-user">
                                            <a href="profile.php?id=<?php echo $row['users_id']; ?>" class="name"> <?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
                                                
                                            </a>
                                            <p class="name-2 "><?php echo $row['email']; ?></p>
                                        </div>
                                        <a  href="profile.php?id=<?php echo $row['users_id']; ?>"><button class="follow text-end btn btn-info">
                                            <i class="ti-plus fl-icon"></i>


                                            <p>Follow</p>
                                        </button> </a>
                                    </div>
                                </div>
                               

                        <?php

                            }
                        }
                        mysqli_close($db);
                        ?>
                    </div>

                    <hr>
                </div>











                <div class="col-md-4 mt-3 ">
                    <div class="container-fluid bg-white margintop ms-3">
                        <div class="row">
                            <div class="col-md-12 p-3">
                                <h3 class="text-dis mb-3">
                                    Explore popular photos
                                </h3>
                                <div class="row mt-1 ps-3 pe-3">
                                    <div class="col-md-2">
                                        <img alt="  " class="img-fluid img-dis2" src=".././assets/img/images1.jfif" />
                                    </div>
                                    <div class="col-md-5">
                                        <img alt="" class="img-fluid img-dis2" src=".././assets/img/bg-img7.jpg" />
                                    </div>
                                    <div class="col-md-5">
                                        <img alt="  " class="img-fluid img-dis2" src=".././assets/img/bg-img4.jpg" />
                                    </div>
                                </div>
                                <div class="row  ps-3 pe-3 pt-1">
                                    <div class="col-md-4">
                                        <img alt=" " class="img-fluid img-dis2" src=".././assets/img/bg-img3.jpg" />
                                    </div>
                                    <div class="col-md-4">
                                        <img alt=" " class="img-fluid img-dis2" src=".././assets/img/bg-img5.jpg" />
                                    </div>
                                    <div class="col-md-4">
                                        <img alt="" class="img-fluid img-dis2" src=".././assets/img/bg-img6.jpg" />
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="container-fluid bg-white mt-4 ms-3">
                        <div class="row ">
                            <div class="col-md-12 mt-2 text-dis">
                                Groups for you
                            </div>
                        </div>
                        <div class="row">
                            <div class="body">
                                <img src=".././assets/img/logo.png" alt="" class="img-avt img-fluid gr-avt">
                                <div class="title-user mt-4">
                                    <a href="https://www.flickr.com/groups/52242404882@N01" class="name ">
                                        Flickr-at-Home
                                    </a>
                                </div>

                                <button class="join-btn ">

                                    <p>Join</p>
                                </button>
                            </div>

                        </div>
                        <div class="row ps-3 pe-4">
                            <div class="col-md-4 ">
                                <img alt=" " class="img-fluid img-dis2" src=".././assets/img/img8.jfif" />
                            </div>
                            <div class="col-md-4">
                                <img alt=" " class="img-fluid img-dis2" src=".././assets/img/img10.jfif" />
                            </div>
                            <div class="col-md-4">
                                <img alt="" class="img-fluid img-dis2" src=".././assets/img/img11.jfif" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="body">
                                <img src=".././assets/img/images2.jfif" alt="" class="img-avt img-fluid gr-avt">
                                <div class="title-user mt-4">
                                    <a href="#" class="name ">
                                        * Vanishing Points *
                                    </a>
                                </div>

                                <button class="join-btn  ">

                                    <p>Join</p>
                                </button>
                            </div>
                            <div class="row mt-1 ps-4 mb-3">
                                <div class="col-md-2">
                                    <img alt="  " class="img-fluid img-dis2" src=".././assets/img/images2.jfif" />
                                </div>
                                <div class="col-md-5">
                                    <img alt="" class="img-fluid img-dis2" src=".././assets/img/img12.jfif" />
                                </div>
                                <div class="col-md-5">
                                    <img alt="  " class="img-fluid img-dis2" src=".././assets/img/img14.jfif" />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container-fluid bg-white mt-4 ms-3 me-3">
                        <div class="row">
                            <div class="col-md-12 mt-2 text-dis">
                                Flickr Blog
                            </div>

                            <img class=" img-yb  mt-3" alt="" src=".././assets/img/flickr.jpg" />
                            <div class="card-block">
                                <a class="card-title title-yb mt-2" href="https://blog.flickr.net/en">
                                    NOW OPEN – Your Best Shot 2021
                                </a>
                                <p class="text-yb">
                                    Share your best shot of the year with the Flickr community in Your Best Shot 2021!
                                    Stay for the discussions, critique, and a chance to win some great prizes.
                                </p>
                                <p>
                                    <a class="more-yb" href="#">Read more</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="container-fluid bg-white mt-4 ms-3 me-3 mb-5">
                        <div class="row footer">
                            <div class="col-md-12 mt-3 mb-3">
                                <a href="" class="footer-icon">About</a><a href="" class="footer-icon">Jobs</a>
                                <a href="" class="footer-icon">Blog</a><a href="" class="footer-icon">Developers</a>
                                <a href="" class="footer-icon"> Guidelines</a><a href="" class="footer-icon">Help</a>
                                <a href="" class="footer-icon">Help forum</a><a href="" class="footer-icon">Privacy</a>
                                <a href="" class="footer-icon"> Terms</a><a href="" class="footer-icon">Cookies</a> <br>
                                <a href="" class="footer-icon">English</a><i class="ti-angle-down footer-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        $('.input-search').keyup(function() {


            var txtSearch = ($('.input-search').val());
            $.post('searchIndex.php', {data: txtSearch }, function(data) {
                
             $('.timkiem1').html(data);
              

            })



        })
    </script>

    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>