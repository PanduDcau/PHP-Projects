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
    <title>Departments
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
      <div id="main">
        <div class="inner">
          <!-- Header -->
          <header id="header">
            <a href="dashboard.php" class="logo">
              <strong>University
              </strong> Management System
            </a>
          </header>
          <!-- Content -->
          <section>
            <header class="main">
              <h2>Edit Department
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <?php
//Get records from database
$sql = "SELECT * FROM department WHERE Dep_Code = '$id'";
// die($sql);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
?>
                <br>
                <div class="container">
                  <form method="post">
                    <div class="row gtr-uniform">
                      <div class="col-6 col-12-xsmall">
                        <label for="DID">Department Code
                        </label>
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <input type="text" value="<?php echo $row['Dep_Code']?>" disabled>
                        <input type="hidden" name="DID" value="<?php echo $row['Dep_Code']?>">
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <label for="Dep_Name">Department Name
                        </label>
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <input type="text" name="depName" value="<?php echo $row['Name']?>" maxlength="20" size="20" required>
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <label for="Location">Location
                        </label>
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <input type="text" name="location" value="<?php echo $row['Location']?>" maxlength="50" size="50">
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <label for="Phone">Phone
                        </label>
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <input type="text" name="phone" value="<?php echo $row['Phone']?>" maxlength="12" size="12">
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
                    <a href="dashboard.php">Homepage
                    </a>
                  </li>
                  <li>
                    <a href="View_Departments.php">Departments
                    </a>
                  </li>
                  <li>
                    <a href="View_Professors.php">Professors
                    </a>
                  </li>
                  <li>
                    <span class="opener">Students
                    </span>
                    <ul>
                      <li>
                        <a href="View_Students.php">View All
                        </a>
                      </li>
                      <li>
                        <a href="View_Students_G.php">Graduates
                        </a>
                      </li>
                      <li>
                        <a href="View_Students_U.php">Undergraduates
                        </a>
                      </li>
                      <li>
                        <a href="View_Students_N.php">Non Matriculating
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <span class="opener">Courses
                    </span>
                    <ul>
                      <li>
                        <a href="View_Courses.php">View Courses
                        </a>
                      </li>
                      <li>
                        <a href="View_Course_Sections.php">Course Sections
                        </a>
                      </li>
                      <li>
                        <a href="View_Lab_Session.php">Lab Sessions
                        </a>
                      </li>
                    </ul>
                  <li>
                    <span class="opener">Library
                    </span>
                    <ul>
                      <li>
                        <a href="View_Books.php">View Books
                        </a>
                      </li>
                      <li>
                        <a href="Borrow_Book.php">Burrow Book
                        </a>
                      </li>
                      <li>
                        <a href="Return_Book.php">Return Book
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <span class="opener">Company
                    </span>
                    <ul>
                      <li>
                        <a href="View_Company.php">View Companies
                        </a>
                      </li>
                      <li>
                        <a href="View_Company_Session.php">View Company Sessions
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js">
        </script>
        <script src="assets/js/browser.min.js">
        </script>
        <script src="assets/js/breakpoints.min.js">
        </script>
        <script src="assets/js/util.js">
        </script>
        <script src="assets/js/main.js">
        </script>
        </body>
      <?php
} else {
echo "0 results";
}
?>
      <?php
//Insert to database
$code = isset($_POST['DID']) ? $_POST['DID'] : '';
$name = isset($_POST['depName']) ? $_POST['depName'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
if($code!=''){
$sql = "UPDATE department SET Name='".$name."', Location='".$location."', Phone='".$phone."' WHERE Dep_Code='".$code."';";
$result = $conn->query($sql);
if($result){
echo "updated";
}
$conn->close();
}
?>
      </html>
