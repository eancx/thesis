<?php

  include("db_connect.php");
  session_start();

  $select = "SELECT * from roomschedule";
  $result = mysqli_query($conn, $select);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Attendance Monitoring System</title>
  <meta charset="ultf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style type="text/css">
  @media (max-width: 991px) {
    .navbar-header {
      float: none;
    }
    .navbar-left,.navbar-right {
      float: none !important;
    }
    .navbar-toggle {
      display: block;
    }
    .navbar-collapse {
      border-top: 1px solid transparent;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
      display: none!important;
    }
    .navbar-nav {
      float: none!important;
      margin-top: 7.5px;
    }
    .navbar-nav>li {
      float: none;
    }
    .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .collapse.in{
      display:block !important;
    }

  }
  @media (max-width: 450px){
    .datestyle{
      background-color: #ffffff;
      color: #000000;
      cursor: pointer;
      margin: 0 auto;
      width: 70%;
      padding: 5px;
      display: inline-block;
      border: 1px solid;
      border-radius: 3px;
      font-size: 15px;
      font-family: 'Quicksand', sans-serif;
    }

  }
</style>
</head>
<body>
  <!-- NAV -->
  <div id="navbar" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <p id="navbrand"><img src="images/iicslogomini.png" width="53" height="60"  alt="">&nbsp;IICS</p>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>

    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a  id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="attendance.html">Attendance</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float hvr-text hvr-selected" href="schedule.html">Schedules</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="documents.php">Documents</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="reports.html">Reports</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="adduser.html">Add User</a>
        </li>
        <li>
          <a href="logout.php" id="power" class="glyphicon glyphicon-off hvr-grow"></a>
        </li>
      </ul>
    </div>
  </div>
  <!--END NAV-->
  <div class="container">
    
    <br/><br/><br/><br/><br/>
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
        <button type="button" class="BackButton" onclick="history.back()"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-5 col-xs-8">
        <p class="documents"> Room Schedule</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
        <select name="classSchedule" id="classSchedule" class="schedstyle">
          <option value="none">Select room:</option>
              <option value="icslab1">ICS LAB 1</option>
              <option value="icslab2">ICS LAB 2</option>
              <option value="icslab3">ICS LAB 3</option>
              <option value="icslab4">ICS LAB 4</option>
        </select>
      </div>

    </div>

  <center>
  <table class='table table-bordered table-striped table-hover table-responsive'>
    <tr>
      <th>TIME</th>
      <th>MONDAY</th>
      <th>TUESDAY</th>
      <th>WEDNESDAY</th>
      <th>THURSDAY</th>
      <th>FRIDAY</th>
      <th>SATURDAY</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)){

     echo "<tr>";
     echo "<td>". $row['startTime'] ." - ". $row['endTime'] ."</td>";
     echo "<td>". $row['monday'] ."</td>";
     echo "<td>". $row['tuesday'] ."</td>";
     echo "<td>". $row['wednesday'] ."</td>";
     echo "<td>". $row['thursday'] ."</td>";
     echo "<td>". $row['friday'] ."</td>";
     echo "<td>". $row['saturday'] ."</td>";
     echo "</tr>";
  
    } ?>
  </table>
  </center>
      <form action="upload_roomschedule.php" enctype="multipart/form-data" method="post" role="form">
            <div class="form-group">
                <center>
                    <label for="exampleInputFile">Upload CSV for Room Schedule</label>
                    <input type="file" name="file[]" size="10000" multiple/> 
                    <p class="help-block">Only CSV File Format.</p>
                    <button type="submit" class="btn btn-default" name="roomschedule">Upload</button>
                </center>

            </div>

        </form>
  </div>
</body>
</html>
