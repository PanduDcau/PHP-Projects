<!DOCTYPE HTML>
<?php
session_start();  
if(!isset($_SESSION["sess_user"])){  
header("location:login.php");  
} else { 
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
            <ul class="icons">
              <li>
                <a href="logout.php" class="icon">Logout
                </a>
              </li>
            </ul>
          </header>
          <!-- Content -->
          <section>
            <header class="main">
              <h2>Departments
              </h2>
            </header>
            <div class="table-wrapper">
              <?php
//$myInput = $_GET["myInput"];
$sql = "SELECT * FROM department";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "<table>
<tr>
<th>Department Code</th>
<th>Name</th>
<th>Location</th>
<th>Phone</th>
<th></th>
<th></th>
</tr>";
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>" . $row['Dep_Code'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Location'] . "</td>";
echo "<td>" . $row['Phone'] . "</td>";
echo "<td><a href='Edit_Department.php?id=".$row['Dep_Code']."'><button class='button primary small'>Edit</button></a></td>";
echo "<td><a href='Delete_Department.php?id=".$row['Dep_Code']."'><button class='button primary small'>Delete</button></a></td>";
echo "<tr>";
}
echo "</table>";
}
else{
echo "0 results"; 
}
$conn->close();
?>
            </div>
            <br>
            <a href="Reg_Department.php">
              <button class="button primary">Add New Department
              </button>
            </a>
            <a href="View_Managers.php">
              <button class="button primary">View Managers
              </button>
            </a>
            <br>
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
</html>
<?php 
}
?>