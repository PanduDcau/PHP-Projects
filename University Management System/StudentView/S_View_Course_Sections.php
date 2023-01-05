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
            <a href="S_dashboard.php" class="logo">
              <strong>University
              </strong> Management System
            </a>
          </header>
          <!-- Content -->
          <section>
            <header class="main">
              <h2>Course Sections
              </h2>
            </header>
            <div class="table-wrapper">
              <?php
//$myInput = $_GET["myInput"];
$sql = "SELECT * FROM course_section";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "<table id='myTable'>
<tr>
<th>Section ID</th>
<th>Course Code</th>
<th>Semester</th>
<th>Year</th>
<th>Class Size</th>
<th>Class Type</th>
<th>Professor</th>
</tr>";
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>" . $row['Sec_ID'] . "</td>";
echo "<td>" . $row['Course_Code'] . "</td>";
echo "<td>" . $row['Semester'] . "</td>";
echo "<td>" . $row['Year'] . "</td>";
echo "<td>" . $row['Class_Size'] . "</td>";
echo "<td>" . $row['Class_Type'] . "</td>";
echo "<td>" . $row['Emp_ID'] . "</td>";
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
            <input type="button" class="button" onclick="history.back();" value="Back">
            <a href="S_View_Lab_Session.php">
              <button class="button primary">Lab Sessions
              </button>
            </a>
            <!--<a href="Edit_Course_Section.php">
<button id="edit">Edit Course Section</button>
</a>-->
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
                <a href="S_dashboard.php">Homepage
                </a>
              </li>
			  <li>
                <a href="S_View_Students.php">Students
                </a>
              </li>
			  <li>
                <a href="S_View_Courses.php">Courses
                </a>
              </li>
			  <li> 
                <a href="S_View_Company_Session.php">Company Sessions
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
</html>
