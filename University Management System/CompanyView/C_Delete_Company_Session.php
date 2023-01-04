<!DOCTYPE HTML>
<?php
$id = $_GET['id'];
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
              <h2>Delete Company Session
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <?php
//Get records from database
$sql = "SELECT * FROM company_session WHERE SesID = '$id'";
// die($sql);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
?>
                <br>
                <div class="container">
                  <form method="post">
                    <div class="col-6 col-12-xsmall">
                      <h3>Are you sure you want to delete?
                        <h3>
                          <input type="hidden" name="sesID" value="<?php echo $row['SesID']?>">
                          </div>
                        <br>
                        <input type="button" class="button" onclick="history.back();" value="Cancel">
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
} else {
echo "0 results";
}
?>
          <?php
//Insert to database
$ses_id = isset($_POST['sesID']) ? $_POST['sesID'] : '';
if($ses_id!=''){
$sql = "DELETE FROM company_session WHERE SesID='".$ses_id."';";
$result = $conn->query($sql);
if($result){
echo "Deleted";
header("Location: View_Company_Session.php");
}
else{
echo "Can't delete";
header("Location: View_Company_Session.php");
}
$conn->close();
}
?>
          </html>
