<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prints|flickr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=".././assets/icon/themify-icons-font/themify-icons/themify-icons.css">

    <link rel="stylesheet" href=".././assets/css/reponsive.css">
</head>

<body>
    <header class="  container-fluid bg-black" style="top: 0;">

        <nav class="navbar navbar-expand-lg navbar-dark header-row bg-black container">


            <a class="navbar-brand nav-link " href="">
                <div class="logo">
                    <img src=".././assets/img/logo3.png" alt="" class="img-logo">
                    <h2>flickr</h2>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-mb" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown nav-item-mb">
                        <a class="nav-link ms-3 " href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
                        <a class="nav-link ms-3" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <a href="explore.php " class="text-white ms-3" style="text-decoration: none;">Explores</a>
                        </a>
                        <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="explore.html">Recent Photos</a></li>
                            <li><a class="dropdown-item" href="explore.html">Trending</a></li>
                            <li><a class="dropdown-item" href="explore.html">Events</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/commons">The Commons</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/photos/flickr/galleries">Flickr
                                    Galleries</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/map">World Map</a></li>
                            <li><a class="dropdown-item" href="https://www.flickr.com/cameras">Camera Finder</a></li>
                            <li><a class="dropdown-item" href="https://blog.flickr.net/en">Flickr Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav-item-mb ">
                        <a class="nav-link ms-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <a href="explore.html " class="text-white ms-3" style="text-decoration: none;">Prints</a>
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

                        <input class="form-control me-2 btn-group input-search" id="inputsearch" type="search"
                            placeholder="Photos,people or groups" aria-label="Search">
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
                    <img src=".././assets/img/avtimg.jfif" alt="" class=" img-user">
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
    <div class="container-fluid p-0 bg-light">
        <div class="container">
            <div class="row  " style="margin-top: 70px; ">
                <div class="col-md-6 ">
                    <h1 class="text-black p-3 " style="font-size: 35px; font-weight: 700;">Prints & Wall Art</h1>
                    <p class=" p-3" style="font-size: 25px; font-weight: 100;">Get stunning wall art and high-quality
                        prints of your photos</p>
                    <button class="btn btnprint btn-white m-3   "> choose photos</button>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <img src=".././assets/img/print_img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container-fluid mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="p-2 mt-5">
                        Metal prints

                    </h4>
                    <p class="p-2">
                        Metal prints deliver unparalleled color and vibrance to produce a depth and clarity unlike any
                        other photographic wall art. If you want a print as bold as your most epic photos, look no
                        further than metal prints.

                    </p>
                </div>
                <div class="col-md-4">
                    <h4 class="p-2 mt-5">
                        Paper prints

                    </h4>
                    <p class="p-2">
                        Paper prints are a time-honored way to show off and share your favorite photos. From stacks of
                        4x6s to frameable statement pieces, you'll be able to find the perfect size and paper finish for
                        any photo.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4 class="p-2 mt-5">
                        Canvas prints
                    </h4>
                    <p class="p-2">

                        Add a little class to your home, office, or whatever other space needs a classic canvas print.
                        With shapes and sizes perfect for wherever you want to hang your photos, your images will look
                        outstanding.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light p-0 mt-3">
        <img src=".././assets/img/pr_img2.png" alt="" class="img-fluid">
        <div class="container mb-5">
            <div class="row mt-5">
                <H3>FAQ</H3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4 class="p-2 mt-2">
                        Who can print my photos?

                    </h4>
                    <p class="p-2">
                        Only you can print your photos through Flickr. Visitors to your account will not see the option
                        to buy prints of your photos.

                    </p>
                </div>
                <div class="col-md-4">
                    <h4 class="p-2 mt-2">
                        Where can I make a photo book?

                    </h4>
                    <p class="p-2">
                        We partner with Blurb and Chatbooks for both hard-cover and soft-cover photo books. Your Flickr
                        photo stream and albums are seamlessly integrated into the book-making process. Check out photo
                        books.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4 class="p-2 mt-2">
                        What if something is wrong with my order?
                    </h4>
                    <p class="p-2">

                        If you're ever unhappy with your prints or wall art, Flickr will make it right. Simply send us
                        an email within 30 days of receiving your order and we'll help you out. If you have any issues,
                        reach out to our Support Heroes.
                    </p>
                </div>
            </div>
            <div class="row  mt-2">

                <div class="col-md-4">
                    <h4 class="p-2 mt-2">
                        Who makes the prints and wall art?

                    </h4>
                    <p class="p-2">
                        Flickr Prints benefit from years of experience that SmugMug has in printing beautiful imagery.
                        Depending on your location, your prints will come from Bay Photo, White House Custom Colour, or
                        Loxley Colour. All the labs we use have excellent color reproduction and fantastic reputations.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4 class="p-2 mt-2">
                        How long does shipping take?
                    </h4>
                    <p class="p-2">

                        We ship all over the world, including more than 160 countries. No matter where you are, we'll
                        get your prints to you as fast as we can. Expedited shipping is available to get your prints
                        even faster.
                    </p>
                </div>
                <div class="col-md-4">
                    <h4 class="p-2 mt-2">
                        More questions?

                    </h4>
                    <p class="p-2">
                        Please visit the Flickr Help Center for more information or to connect with a Support Hero.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=" cn-footer container-fluid bg-black p-0 mt-5">

        <nav class="navbar  header-row bg-dark ">
            <div class="container fter pb-3 pt-3">
                <a class=" nav-item " href="#">
                    <a href="" class=" item-footer-pr text-decoration-none " >About</a>

                </a>

                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " >Jobs</a>

                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " >Blog</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " >Report abuse</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " >Developers</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " > Guidelines</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " >Help</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " >Help forum</a>
                </a>
                <a class="nav-item ">
                    <a href="" class=" item-footer-pr text-decoration-none " >English
                        <i class="ti-angle-down p-0"></i>
                    </a>

                </a>


            </div>
            <div class="container mt-2 pb-3 pt-2">

                <div class="nav-item">
                    <a href="" class="item-footer ms-3 text-secondary text-decoration-none">Privacy</a>


                    <a href="" class="item-footer ms-3 text-secondary text-decoration-none "> Terms</a>
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


    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>