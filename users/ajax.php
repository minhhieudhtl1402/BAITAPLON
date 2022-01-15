<?php
include('../template/header.php');
$a = $_POST['data'];
include 'dbConfig.php';
// $email = $_SESSION['LoginOK'];
$query = "SELECT * FROM image_add where categories_id='3'and imageAdd_title like '%$a%'";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['imageAdd_id'];

?>


<button type="button" class="btn p-1  col-md-4 border-none " data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id; ?>">
                                <div class=" p-1 img ">
                                    <img src="../assets/img/userImg/<?php echo $row['imageAdd_link']; ?>" alt="" class="img-fluid img-item">
                                    <div class="row">
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




include('../template/footer.php');
?>



