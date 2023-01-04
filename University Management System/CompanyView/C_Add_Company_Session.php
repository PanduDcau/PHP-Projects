<!DOCTYPE HTML>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
die("Connection Failed: ". $conn->connect_error);
} 
?>
<html>
  <head>
    <title>Company
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
      <div id="main">
        <div class="inner">
          <!-- Header -->
          <header id="header">
            <a href="C_dashboard.php" class="logo">
              <strong>University
              </strong> Management System
            </a>
          </header>
          <!-- Content -->
          <section>
            <header class="main">
              <h2>Add Company Session
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <div class="row gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                    <label for="SesID">Session ID
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="sesID" maxlength="5" size="5" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Year">Year
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="year" maxlength="4" size="4" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Semester">Semester
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="semester" maxlength="20" size="20" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Session_Manager">Session_Manager
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="session_manager" maxlength="20" size="20" required>
                  </div>
                </div>
                <br>
                <input type="button" class="button" onclick="history.back();" value="Back">
                <input type="reset" class="button">
                <input type="submit" class="button primary" name="submit" value="Confirm">
              </form>
            </div>
          </section>
        </div>
      </div>
      <!-- Sidebar -->
      <div id="sidebar">
        <div class="inner">
          <!-- Search -->
          <section id="search" class="alt">
            <form method="post" action="#">
              <input type="text" name="query" id="query" placeholder="Search" />
            </form>
          </section>
          <!-- Menu -->
          <nav id="menu">
            <header class="major">
              <h2>Menu
              </h2>
            </header>
            <ul>
              <li>
                <a href="C_dashboard.php">Homepage
                </a>
              </li>
              <li>
				<a href="C_View_Company_Session.php">View Company Sessions
				</a>
			  </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- Scripts -->
  <script src="../assets/js/jquery.min.js">
  </script>
  <script src="../assets/js/browser.min.js">
  </script>
  <script src="../assets/js/breakpoints.min.js">
  </script>
  <script src="../assets/js/util.js">
  </script>
  <script src="../assets/js/main.js">
  </script>
  </body>
  <?php
//Insert to database
$ses_id = isset($_POST['sesID']) ? $_POST['sesID'] : '';
$year = isset($_POST['year']) ? $_POST['year'] : '';
$semester = isset($_POST['semester']) ? $_POST['semester'] : '';
$session_manager = isset($_POST['session_manager']) ? $_POST['session_manager'] : '';
$sql = "INSERT INTO company_session(SesID, Year, Semester, Session_Manager) VALUES('$ses_id', '$year', '$semester', '$session_manager')";
$result = $conn->query($sql);
?>
</html>
