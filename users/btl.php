<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flickr</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/btl.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=".././assets/css/reposivebtl.css">
    <link rel="stylesheet" href=".././assets/icon/themify-icons-font/themify-icons/themify-icons.css">
</head>

<body>
    <header class="  container-fluid ">
      
        <nav class="navbar navbar-expand-lg navbar-dark header-row container">
           

                <a class="navbar-brand nav-link " href="#">
                    <div class="logo">
                        <img src=".././assets/img/logo3.png" alt="" class="img-logo">
                        <h2>flickr</h2>
                    </div>
                </a>
                    <form class=" nav-item d-flex nav-item-mb">
                        <div class=" nav-link search">
                            <span class="icon-search">
                                <i class="ti-search"> </i>
                               
                            </span>
                        
                        <input class="form-control me-2 btn-group input-search" id="inputsearch" type="search" placeholder="Photos,people or groups" aria-label="Search">
                        </div>
                    </form>
                    <ul>
                        <a href="login.php" class="login" >Log In</a>
                        <button class="btn btn-signup">
                           <a href="signup.php">Sign up</a>
                        </button>
                    </ul>
                    
          
                </nav>
        
    </header>
        <div id="carouselExampleCaptions" class="carousel slide main" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src=".././assets/img/img1.jpg" class="d-block w-100 img-form img-fluid" alt="">
                    <div class="carousel-caption caption-centered">
                        <h1>
                            Find your inspiration.
                        </h1>
                        <div class="caption ">
                        <h3>
                            Join the Flickr community, home to tens of billions of photos and 2 million groups.
                        </h3>
                        <button class=" btn btn-light button-style" type="button" >
                            <h3> Start for free</h3></button>
                            <div class="name-img mt-5">
                                <a href="https://www.flickr.com/about " style="color: white;">Welcome to flickr</a>
              
                              </div>
                            </div>
                    </div>
                    
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-12">

                                
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src=".././assets/img/img2.jpg" class="d-block w-100 img-form img-fluid" alt="">
                    <div class="carousel-caption caption-centered">
                        <h1>
                            Find your inspiration.
                        </h1>
                    <div class="caption ">
                        <h3>
                            Join the Flickr community, home to tens of billions of photos and 2 million groups.
                        </h3>
                        <button class=" btn btn-light button-style" type="button">
                            <a href =" signup.php" class="" >start for free </a></button>
                            <div class="name-img mt-5">
                                <a href="https://www.flickr.com/about " style="color: white;">Welcome to flickr</a>
                            </div>
                    </div>
                    </div>
                </div>   
                <div class="carousel-item">
                    <img src=".././assets/img/img2.jpg" class="d-block w-100 img-form img-fluid" alt="">
                    <div class="carousel-caption caption-centered">
                        <h1>
                            Find your inspiration.
                        </h1>
                    <div class="caption ">
                        <h3>
                            Join the Flickr community, home to tens of billions of photos and 2 million groups.
                        </h3>
                        <button class=" btn btn-light button-style" type="button">
                            <h3>Start for free</h3></button>
                            <div class="name-img mt-5">
                                <a href="https://www.flickr.com/about " style="color: white;">Welcome to flickr</a>
                            </div>
                    </div>
                    </div>
                </div>   
            
                <div class="carousel-item">
                    <img src=".././assets/img/img3.jpg" class="d-block w-100 img-form img-fluid" alt="">
                    <div class="carousel-caption caption-centered ">
                        <h1>
                            Find your inspiration.
                        </h1>
                        <div class="text-center caption ">
                        <h3>
                            Join the Flickr community, home to tens of billions of photos and 2 million groups.
                        </h3>
                        <button class="btn btn-light button-style " type="button">
                            <h3> Start for free
                            </h3>
                            </button>
                            <div class="name-img mt-5">
                                <a href="https://www.flickr.com/about " style="color: white;">Welcome to flickr</a>
                              </div>
                    </div>
                        
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="visually-hidden">Next</span>
            </button>

        </div>

       

        <div class="container-fluid p-0">
            <div class="row footer">
                <div class="col-md-12 ">
                    <div class="btn-group" role="group">

                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/about" style="color: white;text-decoration: none"> About</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/jobs"style="color: white;text-decoration: none">Jobs</a>
                          
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://blog.flickr.net/en" style="color: white;text-decoration: none">Blog</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/services/developer"style="color: white;text-decoration: none">Deverlopers</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/help/guidelines"style="color: white;text-decoration: none">Guidelines</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickrhelp.com/hc/en-us" style="color: white;text-decoration: none">Help</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/help/forum/en-us/" style="color: white;text-decoration: none">Help forum</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/help/privacy" style="color: white;text-decoration: none">Privacy</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/help/terms" style="color: white;text-decoration: none"> Terms</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a href="https://www.flickr.com/help/cookies" style="color: white;text-decoration: none;">Cookies</a>
                        </button>
                        <button class="btn btn-secondary mausac nav-item" type="button">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;" >  
                                English
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Deutsch</a></li>
                                <li><a class="dropdown-item" href="#">Francais</a></li>
                                <li><a class="dropdown-item" href="#">Tiếng Việt</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                                <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                              </ul>
                        </button>
                        
                        
                        <button class="btn btn-secondary mausac" type="button">
                            <a href="https://www.smugmug.com/" style="color: white;text-decoration: none" > SmugMug+Flickr.</a>
                        </button>
                        <button class="btn btn-secondary mausac" type="button">
                           <a href="https://www.facebook.com/flickr" style="color: white;"> <i class="bi bi-facebook" style="font-size: 30px;"></i></a>
                        </button>
                        <button class="btn btn-secondary mausac" type="button">
                           <a href="https://twitter.com/flickr" style="color: white;"> <i class="bi bi-twitter" style="font-size: 30px;"></i></a>
                        </button>
                        <button class="btn btn-secondary mausac" type="button">
                          <a href="https://www.instagram.com/flickr/" style="color: white; ;"> <i class="bi bi-instagram" style="font-size: 30px;"></i></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
