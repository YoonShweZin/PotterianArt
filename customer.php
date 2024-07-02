<?php
include 'DBConnect.php';
$cid="";
$cname="";
$email="";
$phone="";
$country="";
$city="";
$shi_address="";
?>
	
      	<?php 
      	
      	if(isset($_POST['search']))
      	{
      	    $cid = $_POST['cid'];
      	    $quy = "SELECT * FROM customer WHERE cid = :cid";
      	    $res = $conn->prepare($quy);
      	    
      	    if($res->execute(array(":cid"=>$cid)))
      	    {
      	        if($res->rowCount()>0)
      	        {
      	            foreach ($res as $row)
      	            {
      	                $cid = $row['cid'];
      	                $cname = $row['cname'];
      	                $email = $row['email'];
      	                $phone = $row['phone'];
      	                $country = $row['country'];
      	                $city = $row['city'];
      	                $shi_address = $row['shi_address'];
      	             
      	            }
      	        }
      	        else
      	        {
      	            echo '<script>alert("There is no Data like this in here")</script>';
      	        }
      	    }
      	    else
      	    {
      	        echo '<script>alert("Error")</script>';
      	    }
      	}
      	
      	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  		
	<style type="text/css">
	     /*nav*/
        .form{
          width: 100%;
          height: 60px;
          float: left;
          background-color:#fad7a0;
          margin-bottom: 20px;
          }
        
          ul
          {
            list-style-type: none;
            margin : 0;
            padding: 0;
            overflow: hidden;
            color:brown;
        }
        
        li 
        {
            float: left;
            padding-left: 25px;
        
        }
        
        li a
         {
            display: inline-block;
            color: black ;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
            font-family:serif; 
            text-shadow:2px 2px 8px #b7950b ; 
        
        }
        
        li a:hover{
            background-color:transparent;
            color:#7e5109;
        }
        /*insert form*/
        .wrapper
        {
          width: 100%;
        }
        
        // colors
        $input-background:#fef9e7;
        $input-text-inactive: #f4d03f;
        $input-text-active: #BFD2FF;
        
        // gradient animation
        @keyframes gradient 
        { 
          0%{background-position:0 0}
          100%{background-position:100% 0}
        }
        
        .webflow-style-input
         {
          position: relative;
          display: flex;
          flex-direction: row;
          width: 50%;
          max-width: 300px;
          margin: 0 auto;
          padding: 1.4rem 2rem 1.6rem;
          background: $input-background;
          &:after
           {
            content: "";
            position: absolute;
            left: 0px;
            right: 0px;
            bottom: 0px;
            z-index: 999;
            height: 2px;
            background-position: 0% 0%;
            background: linear-gradient(to right, #B294FF, #57E6E6, 
              #FEFFB8, #57E6E6, #B294FF, #57E6E6);
            background-size: 500% auto;
          }
        }
        
        .webflow-style-input input 
        {
          flex-grow: 1;
          color:black;
          text-shadow: 2px 2px #d5d8dc ;
          font-size:17px;
          line-height:0.9rem;
          font-family: serif;
          vertical-align: middle;
          background-color: transparent;
          border-top-style: hidden;
          border-right-style: hidden;
          border-left-style: hidden;
          border-bottom-color: #fadbd8;
          box-shadow: 2px 3px #b3b6b7 ;
        
        }
        
        .btn 
        {
          background: #f2f3f4 ;
          color: #7e5109;
          border: none;
          padding: 10px 20px;
          border-radius: 3px;
          letter-spacing: 0.06em;
          text-transform: uppercase;
          text-decoration: none;
          outline: none;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
          -webkit-transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
          transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
          font-family: serif;
        }
        .btn:hover
         {
          color: #fef9e7 ;
          box-shadow: 0 7px 14px rgba(0, 0, 0, 0.18), 0 5px 5px rgba(0, 0, 0, 0.12);
        }
        .btn.btn-link 
        {
          background: #2196f3;
          color: #d3eafd;
        }
        .btn.btn-link:hover 
        {
          background: #0d8aee;
          color: #deeffd;
        }
        button
            {
              background:#fad7a0;
              color:#7e5109;
              margin-left:15px;
            }
            button:hover
            {
              background:black;
              color:#fad7a0;
            }
        
        .btn-box 
        {
          text-align: center;
          margin: 50px 0;
        }
        /*finish insert product form*/
	     
	     /*start view product record*/
        .ord
        {
          width: 100%;
          padding-top:30px;
        }
        table
        {
            width:80%;
            margin:auto;
        }
        table, th, td 
        {
          text-align: center;
          border: 1px solid black;
          border-collapse: collapse;
        }
        th,td
        {
            height:30px;
        }
        /*end view product record*/ 
        
        /*start view order record*/
    
	</style>
</head>
<body>
  	<h3 align="center">Potterian Art Admin View</h3>
  	<hr color=" #7e5109 " width="100%">
  <div class="form">
  <ul>
  <li>
  	  <a href="index.php">Home </a>
      <a href="admin_panel.php">Edit Product</a>
      <a href="admin_panel.php#viewp">View Product</a>
	  <a href="viewo.php">Edit Order</a>
	  <a href="customer.php">Edit Customer</a>
	  <a href="logout.php">Logout</a>
  </li>
</ul>
	</div>	
<!--customer record search and delete update insert-->


<div class="wrapper">
	<h3 align="center">Edit Customer</h3>
	<hr color="#7e5109" width="80%" align="center">
	
  <form method="post" action="customer.php">
  
  <div class="webflow-style-input">
    <input type="text" placeholder="Customer ID" name="cid" value="<?php echo $cid;?>">
  </div>
  
   <div class="webflow-style-input">
   <input type="text" placeholder="Customer Name" name="cname" value="<?php echo $cname;?>">
  </div>

     	<div class="webflow-style-input">
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="text" placeholder="Enter Phone no" name="phone" value="<?php echo $phone;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="text" placeholder="Enter Country" name="country" value="<?php echo $country;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="text" placeholder="Enter City" name="city" value="<?php echo $city;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="text" placeholder="Enter Shipping Address" name="shi_address" value="<?php echo $shi_address;?>">
  </div>
  
      <div class="btn-box">
       <button class="btn btn-submit" type="submit" name="insert">Insert</button>
      <button class="btn btn-update" type="submit" name="update">Update</button>
      <button class="btn btn-delete" type="submit" name="delete">Delete</button>
	  <button class="btn btn-search" type="submit" name="search">Search</button>

    </div>
	</form>

    </div> 
      <!-- view customer record-->
        
      <h3 align="center">Customer Record</h3>
      <hr color=" #7e5109 " width="100%">
    <div class="ord">
  
 <?php 
	$orview="SELECT * FROM customer";
	echo "<table>";
	echo "<tr><th>CID</th><th>Cname</th><th>Email</th><th>Country</th>
            <th>City</th><th>Shi_Address</th></tr>";
	
	foreach ($conn->query($orview) as $row)
	{
	    echo "<tr>";
	    echo "<td>".$row['cid']."</td>";
	    echo "<td>".$row['cname']."</td>";
	    echo "<td>".$row['email']."</td>";
	    echo "<td>".$row['country']."</td>";
	    echo "<td>".$row['city']."</td>";
	    echo "<td>".$row['shi_address']."</td>";	    
	    echo "</tr>";
	}
	echo "</table>";
	
	
	#insert date into customer table
	if(isset($_POST['insert']))
	{
	    $cid=$_POST["cid"];
	    $cname=$_POST["cname"];
	    $email=$_POST["email"];
	    $phone=$_POST["phone"];
	    $country=$_POST["country"];
	    $city=$_POST["city"];
	    $shi_address=$_POST["shi_address"];
	    
	    try
	    {
	        
	        #insert data into person table
	        $sql = "INSERT INTO customer(cid,cname,email,phone,country, city,shi_address)
        VALUES('$cid','$cname','$email','$phone','$country','$city','$shi_address')";
	        $conn->exec($sql);
	    }
	    catch (Exception $e)
	    {
	        echo $sql . "<br>" . $e->getMessage();
	    }
	}
	
	#update product from table
	if(isset($_POST['update']))
	{
	    // get values form input text and number
	    
	    $cid=$_POST["cid"];
	    $cname=$_POST["cname"];
	    $email=$_POST["email"];
	    $phone=$_POST["phone"];
	    $country=$_POST["country"];
	    $city=$_POST["city"];
	    $shi_address=$_POST["shi_address"];
	    
	    //updating the table
	    $query = $conn->prepare("UPDATE customer SET cname=:cname, email=:email, phone=:phone, country=:country, city=:city, shi_address=:shi_address WHERE cid=:cid");
	    $query->execute(array(":cname"=>$cname, ":email"=>$email,":phone"=>$phone,":country"=>$country, ":city"=>$city, ":shi_address"=>$shi_address, ":cid"=>$cid));
	    $query->bindparam(':cname', $cname);
	    $query->bindparam(':email', $email);
	    $query->bindparam(':phone', $phone);
	    $query->bindparam(':country', $country);
	    $query->bindparam(':city', $city);
	    $query->bindParam(':shi_address', $shi_address);
	    $query->bindparam(':cid', $cid);
	    
	}
	
	#delete date from customer table
	if(isset($_POST['delete']))
	{
	    $cid=$_POST['cid'];
	    $del= "DELETE FROM customer WHERE cid=:cid";
	    $stmt= $conn->prepare($del);
	    $stmt->bindParam(':cid',$cid);
	    $stmt->execute();
	} 
	

	
	?>
		
	</div>
</body>
</html>
