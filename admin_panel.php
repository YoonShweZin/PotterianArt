<?php 
include 'DBConnect.php';

$pid="";
$name="";
$category="";
$price="";
$instock="";
$image="";
?>
	
      	<?php 
      	
      	if(isset($_POST['search']))
      	{
      	    $pid = $_POST['pid'];
      	    $pro = "SELECT * FROM product WHERE pid = :pid";
      	    $ser = $conn->prepare($pro);
      	    
      	    if($ser->execute(array(":pid"=>$pid)))
      	    {
      	        if($ser->rowCount()>0)
      	        {
      	            foreach ($ser as $row)
      	            {
      	                $name=$row['name'];
      	                $category=$row['category'];
      	                $price=$row['price'];
      	                $instock=$row['instock'];
      	                $image=$row['image'];    	             
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
          height: 700px;
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
        .viewProd
        {
          width: 100%;
          padding-top:30px;
          height:250px;
          overflow:scroll;
          margin-bottom:100px;
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
        /*end view product record*/ 
        
        /*start view order record*/
        .ord
            {
              width: 100%;
            }    
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
      <a href="#viewp">View Product</a>
	  <a href="viewo.php">Edit Order</a>
	  <a href="customer.php">Edit Customer</a>
	  <a href="logout.php">Logout</a>
  </li>
</ul>
	</div>	
<!-- insert product-->
<div id="insert" class="wrapper">
	<h3 align="center">Edit Products</h3>
	<hr color="#7e5109" width="80%" align="center">
  <form method="post" action="admin_panel.php">
  
  	<div class="webflow-style-input">
    <input type="text" class="" placeholder="Enter Product ID" name="pid" value="<?php echo $pid;?>">
  </div>

  	<div class="webflow-style-input">
    <input type="text" class="" placeholder="Enter Product Name" name="name" value="<?php echo $name;?>">
  </div>

  	<div class="webflow-style-input">
    <input type="text"  class="" placeholder="Enter Product Category" name="category" value="<?php echo $category;?>">
  </div>

   	<div class="webflow-style-input">
    <input type="text" class="" placeholder="Enter Product Price" name="price" value="<?php echo $price;?>">
  </div>

  	<div class="webflow-style-input">
    <input type="text" class="" placeholder="Enter Product Instock" name="instock" value="<?php echo $instock;?>">
  </div>

    <div class="webflow-style-input">
    <input type="text" class="" placeholder="Enter Product Image" name="image" value="<?php echo $image;?>">
  </div>

    <div class="btn-box">
      <button class="btn btn-submit" type="submit" name="insert">Insert</button>
      <button class="btn btn-update" type="submit" name="update">Update</button>
      <button class="btn btn-delete" type="submit" name="delete">Delete</button>
      <button class="btn btn-search" type="submit" name="search">Search</button>   
    </div>
    
  </form>
</div>

<?php   #search product from table

   
//    if(isset($_POST['search']))
//    {
       
       
//        $quy = "SELECT name, category, price, instock, image FROM product WHERE pid = 'pid'";
//        $result = $conn->prepare($quy);
       
//        $pid = $_POST['pid'];
       
//        if($result->execute(array(":pid"=>$pid)))
//        {
//            if($result->rowCount()>0)
//            {
//                foreach($result as $row)
//                {
//                    $pid = $row['pid'];
//                    $name = $row['name'];
//                    $category = $row['category'];
//                    $price = $row['price'];
//                    $instock = $row['instock'];
//                    $image = $row['image'];
//                }
              
//            }
//        }
      
//    }
    
       
  #   start insert product 
  
    if(isset($_POST['insert']))
    {
        $pid=$_POST["pid"];
        $name=$_POST["name"];
        $category=$_POST["category"];
        $price=$_POST["price"];
        $instock=$_POST["instock"];
        $image=$_POST["image"];    
    try 
    {      
        #insert data into person table
        $sql = "INSERT INTO product(pid,name,category,price,instock,image)
        VALUES('$pid','$name','$category','$price','$instock','$image')";
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
       
       $pid = $_POST['pid'];
       $name = $_POST['name'];
       $category = $_POST['category'];
       $price = $_POST['price'];
       $instock=$_POST['instock'];
       $image=$_POST['image'];
       
       //updating the table
       $query = $conn->prepare("UPDATE product SET name=:name, category=:category, price=:price, instock=:instock, 
                                    image=:image WHERE pid=:pid");           
       $query->execute(array(":name"=>$name,":category"=>$category,":price"=>$price,":instock"=>$instock,
                                    ":image"=>$image,":pid"=>$pid));
       $query->bindparam(':pid', $pid);
       $query->bindparam(':name', $name);
       $query->bindparam(':category', $category);
       $query->bindparam(':price', $price);
       $query->bindparam(':instock', $instock);
       $query->bindparam(':image', $image);

   }
   
   #delete date from product table
   if(isset($_POST['delete']))
   {
       $pid=$_POST['pid'];
       $del= "DELETE FROM product WHERE pid=:pid";
       $stmt= $conn->prepare($del);
       $stmt->bindParam(':pid',$pid);       
       $stmt->execute();       
   }

   
?>
    <!-- view product record-->
      	<h3  id="viewp" align="center">View Product Records</h3>
    	<hr color="#7e5109" width="80%" align="center">  
    	<div class="viewProd">
    	<?php
#        include 'DBConnect.php';

        $viewquery="select * from product"; 
        echo "<table>";
        echo "<tr><th>PID</th><th>Name</th><th>Category</th><th>Price</th><th>Instock</th><th>Images</th></tr>";
        
        foreach ($conn -> query($viewquery) as $row)
        {
            echo "<tr>";
            echo "<td>".$row['pid']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['category']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['instock']."</td>";
            echo "<td> <img src='earthenware/".$row['image']."' width = '130px' height='100px'></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    </div>

</body>
</html>
    

