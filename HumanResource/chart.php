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

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Human Resources Management System<i class="fa fa-fw fa-building"></i></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-clock-o"></i>
            <span class="nav-link-text">Time Log</i></span>
          </a>
        </li>        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="chart.php">
            <i class="fa fa-fw fa-money"></i>
            <span class="nav-link-text">Payroll</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">List of Employee</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="attendance.php">
            <i class="fa fa-fw fa-calendar"></i>
            <span class="nav-link-text">Attendance</span>
          </a> 
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="traning.php">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Leaves</span>
          </a> 

    
      </ul>
      <ul class="navbar-nav ml-auto">
        
            </span>
          </a>
         
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            Logout<i class="fa fa-fw fa-sign-out"></i></a>
        </li>
      </ul>
       
       
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Payroll<i class="fa fa-fw fa-money"></i></li>
      </ol>
      <!-- Area Chart Example-->
      
             <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <h5 style="color:gray ;"><i class="fa fa-money"></i> Payroll (Per Day)</h4></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="text-align: center;">Name</th>
                  <th style="text-align: center;">Age</th>
                  <th style="text-align: center;">Gender</th>
                  <th style="text-align: center;">Date</th>
                  <th style="text-align: center;">Time In</th>
                  <th style="text-align: center;">Time Out</th>
                  <th style="text-align: center;">Total No. of Hours</th>
                  <th style="text-align: center;">Overtime Hour/s</th>
                  <th style="text-align: center;">Salary</th> 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $db = mysqli_connect("localhost","root","","hr_db");
                    $query = "select * from list_employee";
                    $result = mysqli_query($db,$query);
                    $n = 1;  

                    while ($row = mysqli_fetch_array($result)) {
                        $guard_id = $row['id'];
                            $query1 = "select * from table_timelog where g_id = '$guard_id' AND time_out != '00:00:00'";
                            $result1 = mysqli_query($db,$query1);
                              while ($row1 = mysqli_fetch_array($result1)) {
                                $date = $row1['g_date'];
                                $t_in = $row1['time_in'];
                                $t_out = $row1['time_out'];

                                $timestamp1 = strtotime($t_in);
                                $timestamp2 = strtotime($t_out);

                                $hours1 = date('H', $timestamp1);
                                $hours2 = date('H', $timestamp2);

                                $hours_worked = $hours2 - $hours1;

                                if($hours_worked > 8){
                                  $OT = $hours_worked - 8;
                                }else{
                                  $OT = 0;
                                }

                                if($hours_worked == 0){
                                $salary = 0;
                                }else{
                                $salary = $hours_worked * 65;
                                }
                              
                  ?>
                  <td style="text-align: center;"><?php echo $row['firstname']." ".$row['lastname'];?></td>
                  <td style="text-align: center;"><?php echo $row['age'];?></td>
                  <td style="text-align: center;"><?php echo $row['gender'];?></td>
                  <td style="text-align: center;"><?php echo $date;?></td>
                  <td style="text-align: center;"><?php echo $t_in;?></td>
                  <td style="text-align: center;"><?php echo $t_out;?></td>
                  <td style="text-align: center;"><?php echo $hours_worked;?></td>
                  <td style="text-align: center;"><?php echo $OT;?></td>
                  <td style="text-align: center;"><?php echo "Php ".$salary.".00";?></td>
                </tr>
                <?php $n++; 
                    } // RESULT1
                  } // RESULT
                ?> 
              
              </tbody>
            </table>
          </div>
        </div>
       
      </div>
       <br>
       <div class="card mb-3">
        <div class="card-header">
          <h5 style="color:grays;"><i class="fa fa-money"></i>Payroll (Per Month)</h5></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="text-align: center;">Name</th>
                  <th style="text-align: center;">Age</th>
                  <th style="text-align: center;">Gender</th>
                  <th style="text-align: center;">Total Hours</th>
                  <th style="text-align: center;">Gross Income</th> 
                  <th style="text-align: center;">Net Income</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                    $db = mysqli_connect("localhost","root","","hr_db");
                    $query = "select * from list_employee";
                    $result = mysqli_query($db,$query);
                    $n = 1;  
                    $Pagibig = 250;
                    $SSS = 250;
                    $total_deductions = $Pagibig + $SSS;
                    $deducted = 0;

                    while ($row = mysqli_fetch_array($result)) {
                        $guard_id = $row['id'];
                            $query1 = "select * from table_timelog where g_id = '$guard_id' AND time_out != '00:00:00' group by g_id";
                            $result1 = mysqli_query($db,$query1);
                              while ($row1 = mysqli_fetch_array($result1)) {
                                $date = $row1['g_date'];
                                $t_in = $row1['time_in'];
                                $t_out = $row1['time_out'];

                                $timestamp1 = strtotime($t_in);
                                $timestamp2 = strtotime($t_out);

                                $hours1 = date('H', $timestamp1);
                                $hours2 = date('H', $timestamp2);

                                $hours_worked = $hours2 - $hours1;

                                if($hours_worked > 8){
                                  $OT = $hours_worked - 8;
                                }else{
                                  $OT = 0;
                                }
                                $total_hours = 0;
                                $total_salary = 0;
                                $salary = $hours_worked * 65;

                                

                                 if($hours_worked == 0){
                                $total_salary = 0;
                                $deducted = 0;
                                }else{
                                $total_salary = $total_salary + $salary;
                                $total_hours = $total_hours + $hours_worked;
                                $deducted = $total_salary - $total_deductions;

                                }
                  ?>
                  <td style="text-align: center;"><?php echo $row['firstname']." ".$row['lastname'];?></td>
                  <td style="text-align: center;"><?php echo $row['age'];?></td>
                  <td style="text-align: center;"><?php echo $row['gender'];?></td>
                  <td style="text-align: center;"><?php echo $total_hours;?></td>
                  <td style="text-align: center;"><?php echo "Php ".$total_salary.".00";?></td>
                  <td style="text-align: center;"><?php echo "Php ".$deducted.".00";?></td>
                </tr>
                <?php $n++; 
                    } // RESULT1
                  } // RESULT


                  
                ?> 
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   


    <!-- /.container-fluid-->
    

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <h5 style="color:blue">Human Resources Management System © 2018</h5>
        </div>
      </div>
    </footer>


 
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" >
        <div class="modal-content" >
          <div class="modal-header" style="color:red">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?<i class="fa fa-fw fa-user"></i></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.<i class="fa fa-fw fa-warning"></i></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel<i class="fa fa-fw fa-arrow-left"></i></button>
            <a class="btn btn-primary" href="login.php">Logout<i class="fa fa-fw fa-sign-out"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
