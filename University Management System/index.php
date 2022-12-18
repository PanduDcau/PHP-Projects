<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      form {
        padding: 12px 0px;
      }
      input[type=text], input[type=password] {
        padding: 15px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        width: 30%;
      }
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 30%;
      }
      button:hover {
        opacity: 0.8;
      }
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }
      img.avatar {
        width: 40%;
        border-radius: 50%;
      }
      .container {
        padding: 16px;
      }
      span.psw {
        float: right;
        padding-top: 16px;
      }
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }
        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>
  <body background="images/background.jpg">
    <br>
    </br>
  </br>
<center>
  <h1>University Management System
  </h1>
</center>
<form action="" method="POST">
  <center>  
    <div>
      <h2>Login
      </h2>
    </div>
    <div class="container">
      <input type="text" placeholder="Enter Username" name="user" required>
      <br>
      <input type="password" placeholder="Enter Password" name="pass" required>
      <br>
      <button type="submit" name="submit">Login
      </button>
    </div>
    <center>
      </form>
    <?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
$user=$_POST['user'];  
$pass=$_POST['pass'];  
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
$sql="SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'";  
// die($sql);
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
//$row = $result->fetch_assoc();
while($row=$result->fetch_assoc())  
{  
$dbusername=$row['username'];  
$dbpassword=$row['password'];  
}  
if($user == $dbusername && $pass == $dbpassword)  
{  
session_start();  
$_SESSION['sess_user']=$user;  
/* Redirect browser */  
if($user=='admin'){
header("Location: dashboard.php");  
}
else if($user=='student'){
header("Location: StudentView/S_dashboard.php");    
}
else if($user=='librarian'){
header("Location: LibraryView/L_dashboard.php");
}
else if($user=='sessionmanager'){
header("Location: CompanyView/C_dashboard.php");
}
}  
} else {  
header("Location: dashboard.php");    
}  
} else {  
echo "All fields are required!";  
}  
}  
?>
    </body>
  </html>

