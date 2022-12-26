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
            <a href="L_dashboard.php" class="logo">
              <strong>University
              </strong> Management System
            </a>
          </header>
          <!-- Content -->
          <section>
            <header class="main">
              <h2>Add Book Copy
              </h2>
            </header>
            <div class="container">
              <form method="post">
                <div class="row gtr-uniform">
                  <div class="col-6 col-12-xsmall">
                    <label for="Copt_No">Copy_No
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="copy_no" maxlength="30" size="30" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="ISBN">ISBN
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="isbn" maxlength="30" size="30" required>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <label for="Is_Available">Is_Available
                    </label>
                  </div>
                  <div class="col-6 col-12-xsmall">
                    <input type="text" name="is_available" maxlength="3" size="3">
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
                <a href="L_dashboard.php">Homepage
                </a>
              </li>
              <li>
                <a href="L_View_Books.php">View Books
                </a>
              </li>
              <li>
                <a href="L_Borrow_Book.php">Burrow Book
                </a>
              </li>
              <li>
                <a href="L_Return_Book.php">Return Book
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
$copy_no = isset($_POST['copy_no']) ? $_POST['copy_no'] : '';
$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : '';
$is_available = isset($_POST['is_available']) ? $_POST['is_available'] : '';
$sql = "INSERT INTO book_copy(Copy_NO, ISBN, Is_Available) VALUES('$copy_no', '$isbn', '$is_available')";
$result = $conn->query($sql);
?>
</html>
