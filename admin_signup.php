<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art>Admin Sign_up Page</title>
		<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<style type="text/css">
	
	/*Logo*/

.logo
{
	width: 13%;
	height:100px;
	margin: auto;
	margin-bottom: 20px;
}

/*create form*/
.form
{
	width: 35%;
	height: 570px;
	background-color: #E5E4E2;
	margin: auto;
	border-style: double;
	border-width: 3px;
	border-color: brown;
	padding-top: 20px;
	padding-left: 20px;
}

p
{
	font-size: 18px;
	text-align: right;
	font-weight: bold;
	margin-right: 420px;
}

input[type=text]
 {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid brown;
  font-size: 15px;
  font-family: serif;
}
label
{
	font-size: 16px;
	font-family: serif;
	font-weight: bold;
}

input[type=submit]
{
	width: 35%;
	margin-left: 30%;
	font-size: 18px;
	font-family: serif;
	background-color: white;
	border-color: sienna;
	border-style: double;
	box-shadow:  2px 3px #888888;
}
input[type=Password]
{
	width: 95%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: none;
	border-bottom: 2px solid brown;
	font-size: 15px;
	font-family: serif;
}
input[type=Email]
{
	width: 95%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: none;
	border-bottom: 2px solid brown;
	font-size: 15px;
	font-family: serif;
}
a
{
	font-size: 16px;
	color: brown;
	font-style: oblique;
	font-weight: bold;
}
a:hover
{
	text-shadow:2px 2px 8px #504A4B; 
	font-family:serif; 
}
	</style>
</head>
<body>
		<div class="logo">
		<a href="index.php" >
		<img src="images/logo.png" width="100%" height="100px" class="imgcorner"></a>
		</div>
		<p>Admin Sign Up</p>
		<div class="form">

			<form method="post" action="">

		    <label for="id">Enter Admin ID</label>
		    <input type="text" id="id" name="id" placeholder="Enter Your Id Address..">
		    <br><br>
		    
		    <label for="name">Enter Name</label>
		    <input type="text" id="name" name="name" placeholder="Your name..">
		    <br><br>

		 	<label for="email">Enter Email</label>
		    <input type="Email" id="email" name="email" placeholder="Enter Email..">
		    <br><br>

		    <label for="pw">Enter Password</label>
		    <input type="Password" id="pw" name="pw" placeholder="Enter Password..">
		    <br><br>

		    <label for="repw">Re-enter Password : </label>
		    <input type="Password" id="repw" name="" placeholder="Re-enter Password.."><br><br>

		    <input type="submit" id="submit" name="submit" value="Confirm"><br><br><br>
		     </form>

			Already have account choose : &nbsp;&nbsp; <a href="admin_signin.php" style="color: black">Sign - in</a>
		</div>
<?php 

    if(isset($_POST['submit']))
    {
        include 'DBConnect.php';
        $i=$_POST["id"];
        $n=$_POST["name"];
        $e=$_POST["email"];
        $p=$_POST["pw"];
//        echo $n." ".$e+" "+$p;
    
    try 
    {
       
        #insert data into person table
        $sql = "INSERT INTO admin(id,name,email,password)
        VALUES('$i','$n','$e','$p')";
        $conn->exec($sql);
    } 
    catch (Exception $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
     }
?>
</body>
</html>
