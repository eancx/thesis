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
            <a id="navlink" class="nav-link hvr-underline-reveal hvr-float" href="schedule.php">Schedules</a>
          </li>
          <li>
            <a id="navlink" class="nav-link hvr-underline-reveal hvr-float hvr-text hvr-selected" href="documents.php">Documents</a>
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
      
    <br/><br/><br/><br/>
      <center>
        <h1 class="adduser">Upload Document</h1>
        <form action="documentUploaded.php">
          <p>Username: &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="username" placeholder="Username" class="inputstyle" required/></p>
          <p>Password: &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="foopassword" placeholder="Password" class="inputstyle" required/></p>
          <p>Re-type Password: <input type="password" name="password" placeholder="Re-type Password" class="inputstyle" required/></p>
          <p>Full Name: <input type="text" name="name" placeholder="Full Name" class="inputstyle" required/></p>
          <p>Email Address: <input type="email" name="email" placeholder="Email Address" class="inputstyle" required/></p> 
          <p>Contact Number: <input type="text" name="contactnumber" placeholder="Contact Number" class="inputstyle" required/></p>
          <br/>
          <button type="button" class="CancelButton" onclick="history.back()">Cancel</button>
          <button type="submit" class="CancelButton">Upload</button>
        </form>
      </div>
    </body>
    </html>
