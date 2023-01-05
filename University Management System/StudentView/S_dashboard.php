<!DOCTYPE HTML>
<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
header("location:login.php");  
} else {  
?>  
<html>
  <head>
    <title>University
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
            <ul class="icons">
              <li>
                <a href="../logout.php" class="icon">Logout
                </a>
              </li>
            </ul>
          </header>
          <!-- Banner -->
          <section id="banner">
            <div class="content">
              <header>
                <h2>University
                  <br/>
                  Management System
                </h2>
                <p>
                </p>
              </header>
              <p>A portal that allows you to do almost all the basic transactions of a university.
              </p>
              <ul class="actions">
                <li>
                  <a href="#" class="button big">Learn More
                  </a>
                </li>
              </ul>
            </div>
            <span class="image object">
              <img src="../images/background.jpg" alt="" />
            </span>
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
<?php  
}  
?>  
