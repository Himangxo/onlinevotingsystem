<html>
    <head>
        <title>University Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        
            <center>
            <div id="headerSection">
            <h1>University Online Voting System</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>Login</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter your rollnumber" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                    <option value = "admin/index.php">System Admin</option>
                        <option value="1">STUDENT VOTER</option>
                        <option value="2">CANDIDATE LOGIN</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>

            <div class="footer">
	<hr/>
&copy2022

ASSAM DOWNTOWN UNIVERSITY STUDENT UNION
<br/>
 University Online Voting System.
<br/>

<br/>
Contact: <a href="tel:+917002520313">+917002520313</a> | Email: <a href="mailto:adtuintmca@gmail.com">adtuintmca@gmail.com</a>

</div>

            </center> 
    </body>
</html>