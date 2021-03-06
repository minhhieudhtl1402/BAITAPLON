<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login.php");
}

?>
<?php include('../template/header.php'); ?>
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
                    <a class="nav-link ms-3" href="" id="navbarDropdownnn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="explore.php " class="text-white ms-3" style="text-decoration: none;">Explores</a>
                    </a>
                    <ul class=" dropdown-menu" aria-labelledby="navbarDropdownnn">
                        <li><a class="dropdown-item" href="explore.php">Recent Photos</a></li>
                        <li><a class="dropdown-item" href="explore.php">Trending</a></li>
                        <li><a class="dropdown-item" href="explore.php">Events</a></li>
                        <li><a class="dropdown-item" href="https://www.flickr.com/commons">The Commons</a></li>
                        <li><a class="dropdown-item" href="https://www.flickr.com/photos/flickr/galleries">Flickr Galleries</a></li>
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

    </nav>

</header>
<div>
    <ul class="nav nav-tabs tab_Content container  tabUI " id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link  active " id="explore-tab" data-bs-toggle="tab" data-bs-target="#explore" type="button" role="tab" aria-controls="explore" aria-selected="true">Explore</button>
        </li>
        <li class="nav-item " role="presentation">
            <button class="nav-link   " id="trending-tab  " data-bs-toggle="tab" data-bs-target="#trending" type="button" role="tab" aria-controls="trending" aria-selected="false">Trending</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="events-tab" data-bs-toggle="tab" data-bs-target="#events" type="button" role="tab" aria-controls="events" aria-selected="false">Events</button>
        </li>

    </ul>


    <div class="tab-content">
        <div class="container-fluid bg-light tab-pane p-0 pt-3 show active  " id="explore" role="tabpanel" aria-labelledby="explore-tab">
            <div class="container ">
                <div class="row mt-5 ">
                    <div class="col-md-2 p-0">
                        <p style="font-size: 25px;">Explore</p>

                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2"></div>

                    <div class="col-md-3 share icon-mb">
                        <span class=" me-1 mt-2">Share</span>
                        <span class="material-icons text-secondary">
                            reply
                        </span>
                        <span class="material-icons text-primary">
                            view_quilt
                        </span>
                        <span class="material-icons text-secondary ">
                            square
                        </span>
                    </div>

                </div>

                <div class="row  timkiem mb-5" <div class=" d-flex flex-wrap ">
                    <?php include 'dbConfig.php';
                    $email = $_SESSION['LoginOK'];
                    $query = "SELECT * FROM image_add where categories_id='3' ORDER BY uploaded_on DESC";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['imageAdd_id'];
                    ?>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn p-1  col-md-4 border-none " data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id; ?>">
                                <div class=" p-1 img ">
                                    <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="" class="img-fluid img-item">
                                    <div class="row ">
                                        <div class="view">
                                        <div class="title text-center ms-3 pt-2 pb-2">
                                            <?php echo $row['imageAdd_title']; ?>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> <?php echo $row['user_email']; ?>: <?php echo $row['imageAdd_title']; ?></h5>
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
            </div>
        </div>


        <div class="container-fluid bg-light tab-pane p-0 pt-3  " id="trending" role="tabpanel" aria-labelledby="trending-tab">

            <div class="container">
                <div class="row mt-5 flex-sm-wrap ">
                    <div class="col-md-3 text-start trending-tag">
                        Trending Tags ??? Now

                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3 text-primary trending-tag text-end">
                        View all trending now


                    </div>
                </div>
                <div class="row flex-sm-wrap">
                    <div class="col-md-3 img-trending my-1">
                        <img src=".././assets/img/moon.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Moon</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/sky.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Sky</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/winter.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Winter</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/cloud.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Clouds</h1>

                    </div>

                </div>
                <div class="row mt-5 flex-sm-wrap ">
                    <div class="col-md-3 text-start trending-tag">
                        View all trending this week


                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3 text-primary trending-tag text-end">

                        Trending Tags ??? This Week

                    </div>
                </div>
                <div class="row flex-sm-wrap">
                    <div class="col-md-4 img-trending mt-1">
                        <img src=".././assets/img/music.jfif" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Music</h1>

                    </div>
                    <div class="col-md-4 img-trending mt-1">
                        <img src=".././assets/img/yellow.jfif" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Yellow</h1>

                    </div>
                    <div class="col-md-4 img-trending mt-1">
                        <img src=".././assets/img/night.jfif" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Night</h1>

                    </div>


                </div>
                <div class="row mt-5 flex-sm-wrap ">
                    <div class="col-md-3 text-start trending-tag">
                        Tags ??? All Time Most Popular

                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3 ">



                    </div>
                </div>
                <div class="row flex-sm-wrap">
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/child.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Child</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/flower.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Flower</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/sea.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Sea</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/summer.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Summer</h1>

                    </div>

                </div>

                <div class="row mt-3 flex-sm-wrap">
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/city.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">City</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/sunrise.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Sunrise</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/cat.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Cat</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/people.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">People</h1>

                    </div>

                </div>
                <div class="row mt-3 flex-sm-wrap">
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/dog.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Dog</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/christmast.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Christmas</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">
                        <img src=".././assets/img/animals.jpg" alt="" class="img-fluid img-trend">
                        <h1 class="text-trending ">Animals</h1>

                    </div>
                    <div class="col-md-3 img-trending mt-1">


                    </div>

                </div>






            </div>


        </div>
        <div class="container-fluid bg-light tab-pane  p-0 pt-3  " id="events" role="tabpanel" aria-labelledby="events-tab">

            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-3">
                        <h3 class="tab-Event">Upcoming Events</h3>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-2 event event-mb">
                        <span class="material-icons-outlined ">
                            help_outline
                        </span>
                        <a class="event-item ms-1" href="">Learn to host</a>
                    </div>
                    <div class="col-md-2 event p-0 event-mb">
                        <span class="material-icons-outlined">
                            event
                        </span>
                        <a href="" class="event-item ms-1">Submit your event</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 bg-white  me-1">
                        <div class="img-event ">
                            <img src=".././assets/img/event2.jpg" alt="" class="img-fluid event-img ">
                            <div class="body-img-event">
                                <p class="text-img">OFFICIAL</p>
                                <p class="text-img">NEW</p>
                            </div>
                        </div>
                        <div class="body-event ">
                            <p class="event-title">The Nature of a Self-Portrait Artist</p>
                            <p class="event-text">July 30th @ 10.30am PST</p>
                            <p class="event-text">Worldwide</p>
                            <p class="event-text text-secondary">Join us live on YouTube for a conversation with Self-Portrait Landscape Artist Lizzy Gadd</p>
                            <button class="btn btn-primary mb-3 ps-4 pe-4">View</button>
                        </div>

                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <h3 class="tab-Event">Past events</h3>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-2 event">

                    </div>
                    <div class="col-md-2 event p-0">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-4 bg-white me-3 p-0 ">
                        <div class="img-event ">
                            <img src=".././assets/img/event2.jpg" alt="" class="img-fluid event-img ">
                            <div class="body-img-event">
                                <p class="text-img">OFFICIAL</p>
                                <p class="text-img">NEW</p>
                            </div>
                        </div>
                        <div class="body-event ">
                            <p class="event-title">

                                In Conversation with Chris Burkard

                            </p>
                            <p class="event-text">May 20th, 2020 @ 2pm PST</p>
                            <p class="event-text">Worldwide</p>
                            <p class="event-text text-secondary"> Join us live on YouTube for a conversation with photographer, explorer and director Chris Burkard</p>
                            <button class="btn btn-primary mb-3 ps-4 pe-4">View</button>
                        </div>

                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-4 bg-white me-3 p-0 ">
                        <div class="img-event ">
                            <img src=".././assets/img/event3.jpg" alt="" class="img-fluid event-img ">
                            <div class="body-img-event">
                                <p class="text-img">OFFICIAL</p>
                                <p class="text-img">NEW</p>
                            </div>
                        </div>
                        <div class="body-event ">
                            <p class="event-title">

                                Flickr Global Day of Photowalks

                            </p>
                            <p class="event-text"> POSTPONED </p>
                            <p class="event-text">Worldwide</p>
                            <p class="event-text text-secondary">Join a photowalk near you or start your own! </p>
                            <button class="btn btn-primary mb-3 ps-4 pe-4">View</button>
                        </div>

                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-md-4 bg-white me-3 p-0 ">
                        <div class="img-event ">
                            <img src=".././assets/img/event4.jpg" alt="" class="img-fluid event-img ">
                            <div class="body-img-event">
                                <p class="text-img">OFFICIAL</p>
                                <p class="text-img">NEW</p>
                            </div>
                        </div>
                        <div class="body-event ">
                            <p class="event-title">

                                Music Photography with Steve Brazill

                            </p>
                            <p class="event-text">July 23rd, 2020 @ 10am PST</p>
                            <p class="event-text">Worldwide</p>
                            <p class="event-text text-secondary">Join us live on YouTube for a conversation about the ins and outs of live music photography </p>
                            <button class="btn btn-primary mb-3 ps-4 pe-4">View</button>
                        </div>

                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-4 bg-white me-3 p-0 ">
                        <div class="img-event ">
                            <img src=".././assets/img/event5.jpg" alt="" class="img-fluid event-img ">
                            <div class="body-img-event">
                                <p class="text-img">OFFICIAL</p>
                                <p class="text-img">NEW</p>
                            </div>
                        </div>
                        <div class="body-event ">
                            <p class="event-title">

                                Children Photography Workshop


                            </p>
                            <p class="event-text"> April 24th-25th, 2020 </p>
                            <p class="event-text">Rocklin, California </p>
                            <p class="event-text text-secondary"> Two-day outdoor photography workshop with renowned child photographer Iwona Podlasinska </p>
                            <button class="btn btn-primary mb-3 ps-4 pe-4">View</button>
                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>
</div>


<div class=" cn-footer container-fluid bg-black p-0">

    <nav class="navbar  header-row bg-dark ">
        <div class="container fter pb-3 pt-3">
            <a class=" nav-item " href="#">
                <a href="" class=" item-footer">About</a>

            </a>

            <a class="nav-item ">
                <a href="" class=" item-footer">Jobs</a>
            </a>
            <a class="nav-item ">
                <a href="" class=" item-footer">Blog</a>
            </a>
            <a class="nav-item ">
                <a href="" class=" item-footer">Report abuse</a>
            </a>
            <a class="nav-item ">
                <a href="" class=" item-footer">Developers</a>
            </a>
            <a class="nav-item ">
                <a href="" class=" item-footer">Guidelines</a>
            </a>
            <a class="nav-item ">
                <a href="" class=" item-footer">Help</a>
            </a>
            <a class="nav-item ">
                <a href="" class=" item-footer">Help forum</a>
            </a>
            <a class="nav-item ">
                <a href="" class=" item-footer">English
                    <i class="ti-angle-down p-0"></i>
                </a>

            </a>
        </div>
        <div class="container mt-2 pb-3 pt-2">

            <div class="nav-item it">
                <a href="" class="item-footer ms-3 text-secondary">Privacy</a>


                <a href="" class="item-footer ms-3 text-secondary "> Terms</a>
                <a href="" class="item-footer ms-3 text-secondary">Cookies</a>
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

<?php include('../template/footer.php'); ?>