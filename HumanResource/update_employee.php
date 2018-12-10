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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>j

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
          <a class="nav-link" href="timelog.php">
            <i class="fa fa-fw fa-clock-o"></i>
            <span class="nav-link-text">Time Log</span>
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

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
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
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List of Employee / Update<i class="fa fa-fw fa-user"></i></li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List of Employee</div>
        <div class="card-body">
          <div class="table-responsive">
          </div>
        </div>
        
    </div>


    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small></small>
        </div>
      </div>
    </footer>


      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Add new<i class="fa fa-fw fa-plus"></i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
          </div>
          <div class="modal-body">

            <form method="post">
              <div class="row">
                <div class="form-group">
                  <div class="col-lg-12">
                    <label for="exampleInputEmail1">First name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name" name="fname" required="">
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <label for="exampleInputPassword1">Last name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name" name="lname" required>
                    </div>
                </div>
                
                <div class="form-group">
                  <div class="col-lg-12">
                    <label for="number">Contact Number</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Contact Number" name="phone" required>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-12">
                    <label for="add">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="number" max="50" min="18" id="exampleInputPassword1" value="18" name="age" >
                </div>

                <div class="form-group">
                    <label>Gender</label><br>
                    <input type="radio" name="gender" value="Male">Male</input>&nbsp&nbsp&nbsp
                    <input type="radio" name="gender" value="Female">Female</input>
                </div>


            

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
              <input type="submit" value="Add New" name="submit" class="btn btn-primary btn-block">
            </form>
     
        </div>
      </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="color:red">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?<i class="fa fa-fw fa-user"></i></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
