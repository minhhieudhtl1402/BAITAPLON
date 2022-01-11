<?php
include('../template/header.php');
$a = $_POST['data'];
include 'dbConfig.php';
// $email = $_SESSION['LoginOK'];
$query = "SELECT * FROM image_add where categories_id='3'and imageAdd_title like '%$a%'";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

?>


        <div class=" p-1 img col-md-4 ">
            <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="" class="img-fluid img-item">
            <div class="row">
                <div class="title text-center ms-3 pt-2 pb-2">
                    <?php echo $row['imageAdd_title']; ?>
                </div>
            </div>

        </div>
<?php

    }
}
mysqli_close($db);




include('../template/footer.php');
?>



