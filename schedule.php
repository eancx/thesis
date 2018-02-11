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
    #left{
      background-color: #fffffff; /* red background */
      border: 2px solid black; /* black border */
      color: black; /* black text */
      cursor: pointer; /* Pointer/hand icon */
      float: left; /* Float the buttons side by side */
      font-size: 25px;
      font-family: 'Quicksand', sans-serif;
      padding-top: 50px;
      padding-bottom: 50px;
      width:30%;
      margin-bottom: 10px;
    }
    #right{
      background-color: #ef5350; /* red background */
      border: 2px solid black; /* black border */
      color: black; /* black text */
      cursor: pointer; /* Pointer/hand icon */
      float: left; /* Float the buttons side by side */
      font-size: 25px;
      font-family: 'Quicksand', sans-serif;
      padding-top: 50px;
      padding-bottom: 50px;
      width:30%;
      margin-bottom: 10px;
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
          <a  id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="attendance.php">Attendance</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float hvr-text hvr-selected" href="schedule.php">Schedules</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="documents.php">Documents</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="reports.php">Reports</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="addUser.php">Add User</a>
        </li>
        <li>
          <a href="login.php" id="power" class="glyphicon glyphicon-off hvr-grow"></a>
        </li>
      </ul>
    </div>
  </div>
  <!--END NAV-->
  <div class="container">
    <br/><br/><br/><br/><br/>
    <div class="center" style="margin-bottom: 20px;">
      <div class="btn-group">

        <button type="button" onclick="window.location.href='classSchedule.php'"><i class="material-icons" id="schedicons">people</i><br/>Class Schedule</button>
        <button type="button" onclick="window.location.href='facultySchedule.php'"><i class="material-icons" id="schedicons">person</i><br/>Faculty Schedule</button>
      </div>
      <div class="btn-group">

        <button type="button" onclick="window.location.href='examSchedule.php'"><i class="material-icons" id="schedicons">assignment</i><br/>Exam Schedule</button>
        <button type="button" onclick="window.location.href='roomSchedule.php'"><i class="material-icons" id="schedicons">store_mall_directory</i><br/>Room Schedule</button>
      </div>
      <div class="btn-group">

        <button type="button" onclick="window.location.href='makeUpClass.php'"><i class="material-icons" id="schedicons">schedule</i><br/>Makeup Class</button>
        <button type="button" onclick="window.location.href='events.php'"><i class="material-icons" id="schedicons">event</i><br/>Events</button>
      </div>
    </div>
  </div>
</body>
</html>
