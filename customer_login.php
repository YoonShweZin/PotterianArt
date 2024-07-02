<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art>Admin Sign_in Page</title>
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
	height: 350px;
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
		<p>Customer Login</p>

			<div class="form">

			<form method="post" action="">

		    <label for="name">Name</label>
		    <input type="text" id="name" name="cname" placeholder="Your name..">
		    <br><br>

		    <label for="pw">Enter Password</label>
		    <input type="Password" id="pw" name="pw" placeholder="Enter Password..">
		    <br><br>

		    <input type="submit" name="submit" value="Confirm"><br><br><br>
		     </form>

			Don't have account choose : &nbsp;&nbsp; <a href="customer_signup.php" style="color: black">Sign - up</a>
		</div>
		
<?php 
    include 'DBConnect.php';

        if(ISSET($_POST['submit']))
        {
             if($_POST['cname'] != "" || $_POST['pw'] != "")
               {
                $n = $_POST['cname'];
                $p = $_POST['pw'];
                $sql = "SELECT * FROM `customer` WHERE `cname`=? AND `pw`=? ";
                $query = $conn->prepare($sql);
                $query->execute(array($n,$p));
                $row = $query->rowCount();
                $fetch = $query->fetch();
               
                $cn=$_POST['cname'];
                $pa=$_POST['pw'];
                
                $viewquery="SELECT * FROM `customer` WHERE `cname`='".$cn."' and `pw`='".$pa."'";
                
                foreach($conn->query($viewquery) as $row)
                {
                    $_SESSION["cid"]=$row[0];
                    $_SESSION["cname"]=$cn;
                    header("location:cus_billing.php");//is actually final shipping address or like that
                }
              }
        }
        ?>


</body>
</html>