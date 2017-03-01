<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location: index.php');
}
?>
<!DOCTYPE html> 
<html>
<head>
  <title>Sign Up</title>
  <style type="text/css">
    body
{
  background: white;
}
.login
{
  max-width: 400px;
  margin: 100px auto;
  background: white;
  
}
.login h2{
  text-align: center;
  padding: 25px 25px;
  color: #0070ba;
  font-family: BookAntique;
  font-size: 40px; 
}
.update
{
  max-width: 400px;
  margin: 100px auto;
  background: white;
  
}
.signup
{
  max-width: 400px;
  margin: 100px auto;
  background: white;
}
.signup h2
{
  text-align: center;
  padding: 25px 25px;
  color: #0070ba;
  font-family: BookAntique;
  font-size: 40px; 
}
form
{
  padding: 20px;
}
.text
{
  width: 338px;
  font-family: BookAntique;
  font-size: 17px;
  padding: 10px;
  margin-top: 20px;
  background: white; 
}
.submit
{
  text-align: center;
  width: 360px;
  height: 50px;
  font-size:17px;
  background-color: #0070ba;
  transition: background-color .5s;
  border: none;
  border-bottom: 4px solid transparent;
  color: white;
  border-radius: 4px; 
  cursor: pointer;
}
a
{
  text-decoration: none;
}
a:hover, a:focus
{
  text-decoration: none;
  outline: 0;
  outline-color: initial;
  outline-style: initial;
  outline-width: 0px;
}
a,a:link, a:visited
{
  color:#0070ba;
  transition: color .2s ease-out;
}
.register
{
  border-bottom: 1px solid #cbd2d6;
  margin: 20px auto;
  padding-bottom: 20px;
  text-align: center;
  width: 100%;
}
  </style>
</head>
<body>
<div class="signup">
  <h2><center>Sign Up</center></h2>
  <form action="prosesdaftar.php" method="POST">
    <input type="text" name="username" class="text" placeholder="Username"><br>
    <input type="password" name="password" class="text" placeholder="Password"><br><br>
    <input type="submit" placeholder="submit" value="Submit" class="submit">
  </form>
  <center><a href="login.php">You have account? Log in</a></center><br>
</div>
</body>
</html>