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
    <title>Library
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
              <h2>Return Book
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <div class="container">
                  <form method="post">
                    <div class="row gtr-uniform">
                      <div class="col-6 col-12-xsmall">
                        <input type="text" name="Copy_No" maxlength="5" size="5" placeholder="Enter Copy Number" required>
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <input type="text" name="ISBN" maxlength="30" size="30" placeholder="Enter ISBN" required>
                      </div>
                      <div class="col-6 col-12-xsmall">
                        <input type="submit" class="button primary" value="Search">
                      </div>
                    </div>
                  </form>
                </div>
                <?php
//Get records from database
$copy_no = isset($_POST['Copy_No']) ? $_POST['Copy_No'] : '';
$isbn = isset($_POST['ISBN']) ? $_POST['ISBN'] : ''; 
$sql = "SELECT * FROM book_burrow WHERE Copy_No = '$copy_no' AND ISBN = '$isbn'";
// die($sql);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
?>
                <br>
                <div class="row gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                    <label for="NCopy_No">Copy No
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" value="<?php echo $row['Copy_No']?>" maxlength="4" size="4" disabled>
                    <input type="hidden" name="n_copy_no" value="<?php echo $row['Copy_No']?>">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="ISBN">ISBN
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" value="<?php echo $row['ISBN']?>" maxlength="30" size="30" disabled>
                    <input type="hidden" name="isbn" value="<?php echo $row['ISBN']?>">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Student_ID">Student ID
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" value="<?php echo $row['Student_ID']?>" maxlength="5" size="5" disabled>
                    <input type="hidden" name="student_id" value="<?php echo $row['Student_ID']?>">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Burrow_Date">Burrow Date
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" value="<?php echo $row['Burrow_Date']?>" maxlength="5" size="5" disabled>
                    <input type="hidden" name="burrow_date" value="<?php echo $row['Burrow_Date']?>">
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Return_Date">Return Date
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="return_date" maxlength="30" size="30" required>
                  </div>
                </div>
				<input type="reset" class="button">
                <input type="submit" class="button primary" name="submit" value="Return">
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
$n_copy_no = isset($_POST['n_copy_no']) ? $_POST['n_copy_no'] : '';
$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : '';
$student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';
$burrow_date = isset($_POST['burrow_date']) ? $_POST['burrow_date'] : '';
$return_date = isset($_POST['return_date']) ? $_POST['return_date'] : '';
$sql = "UPDATE book_burrow SET Return_Date='".$return_date."' WHERE Copy_No='".$n_copy_no."' AND ISBN='".$isbn."' AND Student_ID='".$student_id."'";
$result = $conn->query($sql);
?>
</html>
