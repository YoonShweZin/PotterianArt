<?php
include 'DBConnect.php';
$oid="";
$cid="";
$cname="";
$pid="";
$id="";
$qty="";
$payment="";
$card_name="";
$order_date="";
?>
	
      	<?php 
      	
      	if(isset($_POST['search']))
      	{
      	    $oid = $_POST['oid'];
      	    $quy = "SELECT * FROM `order` WHERE oid =:oid";
      	    $res = $conn->prepare($quy);
      	    
      	    if($res->execute(array(":oid"=>$oid)))
      	    {
      	        if($res->rowCount()>0)
      	        {
      	            foreach ($res as $row)
      	            {
      	                $oid=$row["oid"];
      	                $cid=$row["cid"];
      	                $cname=$row["cname"];
      	                $pid=$row["pid"];
      	                $id=$row["id"];
      	                $qty=$row["qty"];
      	                $payment=$row["payment"];
      	                $card_name=$row["card_name"];
      	                $order_date=$row["order_date"];
      	             
      	            }
      	        }
      	        else
      	        {
      	            echo '<script>alert("There is no Data like this in here")</script>';
      	        }
      	    }
      	    else
      	    {
      	        echo '<script>alert("Error Error")</script>';
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
	<h3 align="center">Edit Order</h3>
	<hr color="#7e5109" width="80%" align="center">
	
  <form method="post" action="">
  
   	<div class="webflow-style-input">
    <input type="text" placeholder="Order ID" name="oid" value="<?php echo $oid;?>">
  </div>
  
  	<div class="webflow-style-input">
    <input type="text" placeholder="Customer ID" name="cid" value="<?php echo $cid;?>">
  </div>
  
     	<div class="webflow-style-input">
    <input type="text" placeholder="Customer Name" name="cname" value="<?php echo $cname;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="text" placeholder="Product ID" name="pid" value="<?php echo $pid;?>">
  </div>
  
  	<div class="webflow-style-input">
    <input type="text" placeholder="Admin ID" name="id" value="<?php echo $id;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="text" placeholder="Enter Quantity" name="qty" value="<?php echo $qty;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="text" placeholder="Enter Payment" name="payment" value="<?php echo $payment;?>">
  </div>
  	<div class="webflow-style-input">
    <input type="text" placeholder="Card Name" name="card_name" value="<?php echo $card_name;?>">
  </div>
     	<div class="webflow-style-input">
    <input type="date" placeholder="Enter Order-Date" name="order_date" value="<?php echo $order_date;?>">
  </div>

  
      <div class="btn-box">
       <button class="btn btn-submit" type="submit" name="insert">Insert</button>
      <button class="btn btn-update" type="submit" name="update">Update</button>
      <button class="btn btn-delete" type="submit" name="delete">Delete</button>
      <button class="btn btn-search" type="submit" name="search">Search</button>
    </div>
	</form>

    </div> 
      <!-- view order record-->
        
      <h3 id="viewo" align="center">Order Record</h3>
      <hr color=" #7e5109 " width="100%">
    <div class="ord">
  
<?php 
    include 'DBConnect.php';
	$orview="SELECT * FROM `order`";
	echo "<table>";
	echo "<tr><th>OID</th><th>Cid</th><th>Cname</th><th>PID</th><th>Admin ID</th><th>Qty</th><th>Payment</th><th>Card_Name</th>
            <th>Order_date</th></tr>";
	
	 foreach ($conn -> query($orview) as $row)
	   {
	    echo "<tr>";
	    echo "<td>".$row['oid']."</td>";
	    echo "<td>".$row['cid']."</td>";
	    echo "<td>".$row['cname']."</td>";
	    echo "<td>".$row['pid']."</td>";
	    echo "<td>".$row['id']."</td>";
	    echo "<td>".$row['qty']."</td>";
	    echo "<td>".$row['payment']."</td>";
	    echo "<td>".$row['card_name']."</td>";
	    echo "<td>".$row['order_date']."</td>";   
	    echo "</tr>";
	}
	echo "</table>";
	
	#insert date into order table
	if(isset($_POST['insert']))
	{
	    $oid=$_POST["oid"];
	    $cid=$_POST["cid"];
	    $cname=$_POST["cname"];
	    $pid=$_POST["pid"];
	    $id=$_POST["id"];
	    $qty=$_POST["qty"];
	    $payment=$_POST["payment"];
	    $card_name=$_POST["card_name"];
	    $order_date=$_POST["order_date"];
	    
	    try
	    {
	        
	        #insert data into person table
	        $sql = "INSERT INTO `order`(`oid`,`cid`, `cname`, `pid`,`id`, `qty`, `payment`,`card_name`, `order_date`)
        VALUES('$oid','$cid','$cname','$pid','$id','$qty','$payment','$card_name','$order_date')";
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
	    
	    $oid=$_POST["oid"];
	    $cid=$_POST["cid"];
	    $cname=$_POST["cname"];
	    $pid=$_POST["pid"];
	    $id=$_POST["id"];
	    $qty=$_POST["qty"];
	    $payment=$_POST["payment"];
	    $card_name=$_POST["card_name"];
	    $order_date=$_POST["order_date"];
	    
	    //updating the table
	    $query = $conn->prepare("UPDATE `order` SET cid=:cid cname=:cname, pid=:pid, id=:id, qty=:qty, payment=:payment,card_name=:card_name, order_date=:order_date WHERE oid=:oid");
	    $query->execute(array(":cid"=>$cid,":cname"=>$cname, ":pid"=>$pid,":id"=>$id, ":qty"=>$qty,":payment"=>$payment,":card_name"=>$card_name,":order_date"=>$order_date, ":oid"=>$oid));
	    $query->bindparam(':cid', $cid);
	    $query->bindparam(':cname', $cname);
	    $query->bindparam(':pid', $pid);
	    $query->bindparam(':id', $id);
	    $query->bindparam(':qty', $qty);
	    $query->bindparam(':payment', $payment);
	    $query->bindparam(':card_name', $card_name);
	    $query->bindparam(':order_date', $order_date);
	    $query->bindparam(':oid', $oid);
	    
	}
	
	#delete date from customer table
	if(isset($_POST['delete']))
	{
	    $oid=$_POST['oid'];
	    $del= "DELETE FROM `order` WHERE oid=:oid";
	    $stmt= $conn->prepare($del);
	    $stmt->bindParam(':oid',$oid);
	    $stmt->execute();
	}
	
	?>	

	</div>
</body>
</html>
    

