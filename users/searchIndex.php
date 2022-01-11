

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
    <link rel="stylesheet" href=".././assets/css/main.css">
    <link rel="stylesheet" href=".././assets/css/reponsiveM.css">
    <link rel="stylesheet" href=".././assets/icon/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>


    <?php include 'dbConfig.php';
    $kq = $_POST['data'];
    $id = $_SESSION['id'];
    $query = "SELECT * FROM users INNER JOIN image_add on users.email= image_add.user_email WHERE EXISTS(SELECT following_id FROM follow WHERE users_id= '$id' AND users.users_id=follow.following_id)
     and first_name like  '%$kq%' and last_name like '%$kq%' order by RAND() limit 9;";
   
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>


            <div class="  img col-md-4 p-1  ">
                <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="" style=" width: 100%; height: 200px" class="img-fluid img-item ">
                <div class="row nameTitle ps-2">
                    <div class=" text-white col-md-6 nameus text-start ">
                        <a href="profile.php?id=<?php echo $row['users_id']; ?>" class="text-decoration-none text-white"> <?php echo $row['first_name'] . ' ' . $row['last_name']; ?></a>
                    </div>
                    <div class="col-md-6 timeup text-end">
                        <?php echo $row['uploaded_on']; ?>

                    </div>
                </div>

            </div>



    <?php

        }
    }
    mysqli_close($db);
    ?>



    <script src="../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>