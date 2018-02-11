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
          <a  id="navlink" class="nav-link hvr-underline-reveal hvr-float hvr-text hvr-selected" href="attendance.php">Attendance</a>
        </li>
        <li>
          <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="schedule.php">Schedules</a>
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
    <center>
      <form action="#">
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <p>DATE: &nbsp; <input type="date" id="date" class="datestyle"></p>
          </div>
          <div class="col-md-12 col-xs-12">
            <p>ROOM: <select name="room" id="room" class="datestyle">
              <option value="icslab1">ICS LAB 1</option>
              <option value="icslab2">ICS LAB 2</option>
              <option value="icslab3">ICS LAB 3</option>
              <option value="icslab4">ICS LAB 4</option>
            </select> </p>
          </div>
          <div class="col-md-12 col-xs-12">
            <p>TIME: &nbsp;&nbsp; <select name="time" id="time" class="datestyle">
              <option value="7am730am">7:00AM - 7:30AM</option>
              <option value="730am8am">7:30AM - 8:00AM</option>
              <option value="8am830am">8:00AM - 8:30AM</option>
              <option value="830am9am">8:30AM - 9:00AM</option>
              <option value="930am10am">9:30AM - 10:00AM</option> 
              <option value="1030am11am">10:30AM - 11:00AM</option> 
              <option value="1130am12pm">11:30AM - 12:00PM</option> 
              <option value="1230pm1pm">12:30PM - 1:00PM</option> 
              <option value="130pm2pm">1:30PM - 2:00PM</option> 
              <option value="230pm3pm">2:30PM - 3:00PM</option> 
              <option value="330pm4pm">3:30PM - 4:00PM</option> 
              <option value="430pm5pm">4:30PM - 5:00PM</option> 
              <option value="530pm6pm">5:30PM - 6:00PM</option> 
              <option value="630pm7pm">6:30PM - 7:00PM</option> 
              <option value="730pm8pm">7:30PM - 8:00PM</option>
              <option value="830pm9pm">8:30PM - 9:00PM</option>
            </select> </p><br/>
          </div>
        </div>
        <button type="reset" class="CancelButton">Reset</button>
        <button type="submit" class="CancelButton">Submit</button>
      </form>
      <br/> 

    </center>
  </div>
</body>
</html>