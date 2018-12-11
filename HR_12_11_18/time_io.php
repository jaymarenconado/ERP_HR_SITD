<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Human Resources Management System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
 <a href="login.php" type="submit" name="submit" class="btn btn-primary" style="float: right;"><b style="font-size:20px";>Admin<i class="fa fa-fw fa-user"></i></a>
 <br>
  <div class="container">

    <div class="card card-login mx-auto mt-5">
      <div class="card-header"></div>
      <div class="card-body">

        <form method="post">

        <?php include('errors.php'); ?>
<h5 style="text-align: center;"><center ><img src="nn.png" style="width:120px; hegth:200px"></center><h5 style="text-align: center;" >Employee-Login<i class="fa fa-fw fa-users"></i></h5>
          <div class="form-group">
            <label for="exampleInputEmail1">Employee ID<i class="fa fa-fw fa-user"></i></label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter your IDs" name="user"  required="">
          </div>
       
          <input type="submit" value="Time in " name="submit" class="btn btn-primary btn-block">
          <input type="submit" value="Time out" name="submit1" class="btn btn-danger btn-block">
        </form>

        <?php
          $username ="";
          $password ="";


            date_default_timezone_set("Asia/Manila");
            $date = date("Y-m-d");
            $time = date("h:i:sa");

          $db = mysqli_connect("localhost","root","","hr_db");
          if(isset($_POST['submit']))
          {
            $username = $_POST['user'];
            $sql = "SELECT *  FROM list_employee WHERE username='$username' LIMIT 1";
            $res = mysqli_query($db,$sql);


            $result = $db->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  $emp_id = $row['id'];
                }
            }

            if (mysqli_num_rows($res) == 1)
            {
                $query_insert = "INSERT INTO table_timelog (g_id,g_date,time_in) VALUES ('$emp_id','$date','$time')";
                 mysqli_query($db,$query_insert);
                 
            } else {
                array_push($errors,"Invalid Username/Password!");
            }
          }


          if(isset($_POST['submit1']))
          {
            $username = $_POST['user'];
            $sql = "SELECT *  FROM list_employee WHERE username='$username' LIMIT 1";
            $res = mysqli_query($db,$sql);


            $result = $db->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  $emp_id = $row['id'];
                }
            }

            if (mysqli_num_rows($res) == 1)
            {
                $query_update = "UPDATE table_timelog SET time_out = '$time' WHERE g_id = '$emp_id' AND g_date = '$date' ";
                 mysqli_query($db,$query_update);
            } else {
                array_push($errors,"Invalid Username/Password!");
            }
          }
        ?>
                                               <center><small>Human Resource System </small></center>
        </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
