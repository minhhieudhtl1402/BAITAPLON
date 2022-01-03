<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href=".././assets/css/singup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=".././assets/css/reponsiveSignUp.css">
</head>

<body>
    <nav>
        <div class="brand mb-3">
            <img src=".././assets/img/logonav.png" class="img-logo" alt="">
            <h2 class="ms-5 ">flickr</h2>
        </div>
    </nav>

    <div class="img-sign ">
        <img src=".././assets/img/imgsign.jpg" alt="" class="imgbtn img-fluid">
        
            <form action="process_signup.php" method="POST" class="form main " id="form-1">
                <img src=".././assets/img/logonav.png" alt="" class="img-logoform img-fluid mt-1">
              
                <h6 class="heading mt-1 ">Sign in for Flickr</h6>
                
        
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form action="process_signup.php" method="post">
                                <form role="form">
                              
                                    <input type="Firstname" class="form-control mb-3" id="InputFristname1"
                                        placeholder="Frist name" name="txtName1" required autofocus />
                                
                               
                                    <input type="Lastname" class="form-control mt-2 mb-3" id="InputLastname"
                                        placeholder="Last name" name="txtName2" required />
                             
                                
                                    <input type="Yourage" class="form-control mt-2 mb-3" id="InputYourage"
                                        placeholder="Your age" name="txtAge" required />
                               
                              
                                    <input type="email" class="form-control mt-2 mb-3" id="InputEmail"
                                        placeholder="Email" name="txtEmail" required />
                                
                              
                                    <input type="password" class="form-control mt-3" id="InputPassword"
                                        placeholder="Password"  name="txtPass" required />
                                    <?php
                                        if(isset($_GET['error'])){
                                            echo "<p style='color:red'> {$_GET['error']} </p>";
                                        }

                                    ?>
                                   
                               
                                   <div class="checkbox text-start mt-2">
                                    <label>
                                        <input type="checkbox" name="" required /> I'm not a robot
                                    </label>
                                   </div>
                                   <button type="submit" class="btn btn-primary mt-2 signBtn" name="btnSignup">
                                       Sign up
                                   </button>
                                   <div class="data mt-2">
                                       <p>By signing up, you agree with Flickr's Terms of Services and Privacy Policy.</p>
                                   </div>
                                   <hr>
                                   <p class="loginhere">Already a Flickr member?
                                      <a href="#" class="loginhere-link">Log in here</a>
                                   </p>
                               </form>
                             </form>
                        </div>
                    </div>
               
            </form>
           
      
        <div class=" row footer ">
            <div class="col-md-5  lag ">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" >
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
            <div class="col-md-7  ft  ">
                <a href="https://www.flickrhelp.com/hc/en-us" class=" text-decoration-none  text-white">Help</a>

                <a href="https://www.flickr.com/help/privacy"
                    class=" text-decoration-none ms-3  text-white ">Privacy</a>
                <a href="https://www.flickr.com/help/terms"
                    class=" text-decoration-none  ms-3 me-3 text-white">Term</a>
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