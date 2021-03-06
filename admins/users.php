<?php
session_start();
if (!isset($_SESSION['AdminLogin'])) {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/users.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <title>MANAGE USERS</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type ="text/javascript">
   $(document).ready(function(){
       $("#timkiem").keyup(function(){
          var input = $(this).val();
          if(input != ""){
            $.ajax({
               url:"ajaxAdmin.php",
               method:"POST",
               data:{input:input},
               success:function(data){
                 $("#searchresult").html(data);
                 $("#searchresult").css("display","block");
               }
            });
          }else{
            $("#searchresult").css("display","none");
          }
       });
   })
 </script>
</head>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
          <a href="add_users.php" class="btn btn-lg btn-outline-info">Th??m User</a>
          <a type="button" class="btn btn-lg btn-outline-info">Xin ch??o <?php echo  $_SESSION['AdminLogin']; ?>
            <i class="bi bi-emoji-smile"></i></a>
          <!-- <h3 class="me-2">Xin ch??o <?php echo  $_SESSION['AdminLogin']; ?></h3>  -->
          <a type="button" href="adminLogout.php" class="nav-item btn btn-lg btn-outline-info">Tho??t<i class="bi bi-box-arrow-right ms-1"></i></a>
          
        </div>
      </div>
    </nav>
  </div>

  <div id="background" class="container-fluid">
    <div class="container-fluid ">
      <h1 class="text-center mb-5">Qu???n L?? Ng?????i D??ng </h1>
     
      <input type="text" class=" form-control" id="timkiem"  placeholder="Search..." >
      </div>
      <div id ="searchresult">
      </div>
      <table class="table bg-light">
        <thead>
          <tr>
            <th scope="col">M?? ng?????i d??ng</th>
            <th scope="col">H???</th>
            <th scope="col">T??n</th>
            <th scope="col">Email</th>
            <th scope="col">M???t Kh???u</th>
            <th scope="col">Tu???i</th>
            <th scope="col">Ng??y ????ng k??</th>
            <th scope="col">?????a ch???</th>
            <th scope="col">S???a</th>
            <th scope="col">Xo??</th>

          </tr>
        </thead>
        <tbody>
          <?php
          //b1:k???t n???i database server
          $conn = mysqli_connect('localhost', 'root', '', 'flickr');
          if (!$conn) {
            die("K???t n???i th???t b???i.Vui l??ng ki???m tra l???i c??c th??ng tin m??y ch???");
          }
          //b2:th???c hi???n truy v???n
          $sql = "SELECT * FROM users";
          $result = mysqli_query($conn, $sql);
          //b3:x??? l?? kq truy v???n
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>
                <th scope="row"><?php echo $row['users_id']; ?></th>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['registation_date']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a href="updateUsers.php?id=<?php echo $row['users_id']; ?>"><i class="bi bi-pencil-square text-black"></i></a></td>
                <td><a onclick="return confirm('B???n ch???c ch???n mu???n x??a?')" href="deleteUsers.php?id=<?php echo $row['users_id']; ?>"><i class="bi bi-trash text-black"></i></a></td>
              </tr>
          <?php
            }
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>