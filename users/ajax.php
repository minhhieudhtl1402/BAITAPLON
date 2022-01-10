<?php

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
                <div class="view row">
                    <div class="img-title col-md-4 p-1 text-center text-white mb-2 fs-3" style="background-color: rgba(0, 0, 0, 0.4);"><?php echo $row['imageAdd_title']; ?></div>

                </div>
            </div>

        </div>
<?php

    }
}
mysqli_close($db);
?>
