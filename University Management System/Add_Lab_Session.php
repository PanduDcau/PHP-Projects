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
    <title>Course
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
              <h2>Add Lab Session
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <div class="row  gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                    <label for="Section_Number">Section_Number
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="section_number" maxlength="4" size="4" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Course_Code">Course_Code
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="course_code" maxlength="4" size="4" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Lab_Session_ID">Lab_Session_ID
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="lab_session_id" maxlength="4" size="4" required>
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
$section_number = isset($_POST['section_number']) ? $_POST['section_number'] : '';
$course_code = isset($_POST['course_code']) ? $_POST['course_code'] : '';
$lab_session_id = isset($_POST['lab_session_id']) ? $_POST['lab_session_id'] : '';
$sql = "INSERT INTO lab_session(Section_ID, Course_Code, Lab_Session_ID) VALUES('$section_number', '$course_code', '$lab_session_id')";
$result = $conn->query($sql);
?>
</html>
