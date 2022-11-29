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
    <title>Courses
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
              <h2>Add Course
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <div class="row  gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                    <label for="Course_Code">Course Code
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="c_Code" maxlength="4" size="4" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Name">Name
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="name" maxlength="20" size="20" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Course">Course
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="course" maxlength="50" size="50">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="College">College
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="college" maxlength="30" size="30">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Credit_Hours">Credit Hours
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="cre_Hours" maxlength="3" size="3">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Department_Code">Department Code
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="DID" maxlength="4" size="4">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Prerequisite">Prerequisite
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="prerequisite" maxlength="4" size="4">
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
//Insert to database
$c_Code = isset($_POST['c_Code']) ? $_POST['c_Code'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$course = isset($_POST['course']) ? $_POST['course'] : '';
$college = isset($_POST['college']) ? $_POST['college'] : '';
$cre_Hours = isset($_POST['cre_Hours']) ? $_POST['cre_Hours'] : '';
$d_code = isset($_POST['DID']) ? $_POST['DID'] : '';
$prerequisite = isset($_POST['prerequisite']) ? $_POST['prerequisite'] : '';
$sql = "INSERT INTO course(Course_Code, Name, Course, College, Credit_Hours, Dep_Code, Prerequisite) VALUES('$c_Code', '$name', '$course', '$college', '$cre_Hours', '$d_code', '$prerequisite')";
$result = $conn->query($sql);
?>
</html>
