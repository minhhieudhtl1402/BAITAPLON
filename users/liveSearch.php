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

            $query1 = "SELECT *
                            from image_add
                            where user_email='$email' and categories_id='2'
                            ORDER BY uploaded_on DESC
                            LIMIT 1;";
            $result1 = mysqli_query($db, $query1);
            if (mysqli_num_rows($result1) > 0) {
                $row1 = mysqli_fetch_assoc($result1);
                $imageTitle = $row1['imageAdd_title'];
            }

?>
            <div id="khungSearch" class="row mt-3">

                <a class="row" class="text-black text-decoration-none" href="">
                    <img class="col-md-4" style="border-radius:50%; height:50px;width:50px;" src="../assets/img/userImg/<?php echo $imageTitle; ?>" alt="">
                    <div class="row col-md-8">
                        <h6 class=" d-flex align-items-center"><?php echo $firstName . ' ' . $lastName;  ?></h6>
                        <p class=" d-flex align-items-center"><?php echo $email;?></h6>
                    </div>
                </a>

                <style>
                    #khungSearch {
                        width: 280px;
                    }
                </style>
            </div>
<?php
        }
    } else {
        echo "<h6 class='text-danger text-center mt-3'>Not found </h6>";
    }
}
?>