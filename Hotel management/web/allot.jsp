<%-- 
    Document   : allot
    Created on : Feb 24, 2016, 2:58:07 PM
    Author     : Oops
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <title>allot</title>
    </head>
    <body>
       <div id="header"><div >
                                    <h1>Hostel management system</h1>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="rooms.html">Rooms</a>
						</li>
						
						<li>
							<a href="foods.html">Food</a>
						</li>
						<li>
							<a href="registration.jsp">Join Us</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
			</div>
        <div  style="margin-left: 400px;">
            <form action="allot" method="post">
                
                <pre>


                  <h1>enter new room and mess entry</h1>

                    <input type="text" name="rno" placeholder="enter room no"/>

                    <input type="text" name="mess" placeholder="enter mess name"/>

                    <input type="submit" value="insert"/>


                </pre>

                
            </form>
                
                
           
            
            
            
        </div>



    </body>
</html>
