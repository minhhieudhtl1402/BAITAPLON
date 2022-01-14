<?php
session_start();
if (!isset($_SESSION['LoginOK'])) {
    header("location:login.php");
}
?>
<?php
include("dbConfig.php");
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT users_id,first_name,last_name,email FROM users WHERE email LIKE '{$input}%' or first_name LIKE '{$input}%' or last_name LIKE '{$input}%' LIMIT 3; ";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $email = $row['email'];

?>
            <div id="khungSearch" class="row mt-3">
                <?php
                if ($_SESSION['LoginOK'] == $email) {
                ?>
                    <a class="row" class="text-black  " style="text-decoration: none;" href="you.php">

                        <img class="col-md-4" style="border-radius:50%; height:50px;width:50px;" src="../assets/img/userImg/defaultAvatar.webp" alt="">
                        <div class="row col-md-8">
                            <h6 class=" d-flex align-items-center text-black text-decoration-none"><?php echo $firstName . ' ' . $lastName;  ?></h6>
                            <p class=" d-flex align-items-center text-black text-decoration-none"><?php echo $email; ?></h6>
                        </div>
                    </a>

                <?php }
                else{
                ?>

                <a class="row" class="text-black  " style="text-decoration: none;" href="profile.php?id=<?php echo $row['users_id']; ?>">

                    <img class="col-md-4" style="border-radius:50%; height:50px;width:50px;" src="../assets/img/userImg/defaultAvatar.webp" alt="">
                    <div class="row col-md-8">
                        <h6 class=" d-flex align-items-center text-black text-decoration-none"><?php echo $firstName . ' ' . $lastName;  ?></h6>
                        <p class=" d-flex align-items-center text-black text-decoration-none"><?php echo $email; ?></h6>
                    </div>
                </a>
                 <?php } ?>   
            </div>
<?php
        }
    } else {
        echo "<h6 class='text-danger text-center mt-3'>Not found </h6>";
    }
}
?>