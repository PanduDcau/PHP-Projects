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
              <h2>Add Company Assesment
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <div class="row gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                    <label for="SID">Student ID
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="SID" maxlength="4" size="4" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Company_ID">Company ID
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="CID" maxlength="20" size="20" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Year">Year
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="year" maxlength="50" size="50">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Semester">Semester
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <select name="semester" required>
                      <option value=''>
                        <-- Please Select -->
                          </option>
                      <option value='1st'>1st
                      </option>
                      <option value='2nd'>2nd
                      </option>
                      <option value='3rd'>3rd
                      </option>
                    </select>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Company_Assesment">Company Assesment
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="comp_Assesment" maxlength="50" size="50">
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
$s_code = isset($_POST['SID']) ? $_POST['SID'] : '';
$c_code = isset($_POST['CID']) ? $_POST['CID'] : '';
$year = isset($_POST['year']) ? $_POST['year'] : '';
$semester = isset($_POST['semester']) ? $_POST['semester'] : '';
$comp_Assesment = isset($_POST['comp_Assesment']) ? $_POST['comp_Assesment'] : '';
$sql = "INSERT INTO company_assesment(Student_ID, Company_ID, Year, Semester, Company_Assesment) VALUES('$s_code', '$c_code', '$year', '$semester', '$comp_Assesment')";
$result = $conn->query($sql);
?>
</html>
