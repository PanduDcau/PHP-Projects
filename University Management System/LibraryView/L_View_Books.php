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
              <h2>Books
              </h2>
            </header>
            <div class="table-wrapper">
              <?php
//$myInput = $_GET["myInput"];
$sql = "SELECT * FROM book";
$result = $conn->query($sql);
if($result->num_rows > 0){
echo "<table id='myTable'>
<tr>
<th>ISBN</th>
<th>Name</th>
<th>Year</th>
<th>Title</th>
<th>Publisher</th>
<th>Author</th>
</tr>";
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>" . $row['ISBN'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Year'] . "</td>";
echo "<td>" . $row['Title'] . "</td>";
echo "<td>" . $row['Publisher'] . "</td>";
echo "<td>" . $row['Author'] . "</td>";
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
            <a href="L_Add_Book.php">
              <button class="button primary">Add New Book
              </button>
            </a>
            <a href="L_Add_Book_Copy.php">
              <button class="button primary">Add Book Copy
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
</html>
