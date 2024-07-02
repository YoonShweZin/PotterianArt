<?php
include 'DBConnect.php';
session_start();
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["pid"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'		=>	$_GET["pid"],
                'item_name'		=>	$_POST["name"],
                'item_price'		=>	$_POST["price"],
                'item_quantity'		=>	$_POST["qty"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'		=>	$_GET["pid"],
            'item_name'		=>	$_POST["name"],
            'item_price'		=>	$_POST["price"],
            'item_quantity'		=>	$_POST["qty"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                 echo '<script>alert("Item Removed")</script>';
                 echo '<script>window.location="earthenware.php#list"</script>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  		
	<style type="text/css">
	/*Header*/
.all
{
    width:100%;
    height:600px;
}	
.header
{
	width: 100%;
	height: 100px;
}
.logo
{
	width: 13%;
	height: 100px;
	background-image: url("images/logo.png");
	background-repeat: no-repeat;
	margin-left: 25px;
	background-size: 100% 100%;
	float: left;
}
/*nav*/

.nav{
	width: 84%;
	height: 100px;
	float: right;
	}

	ul
	{
    list-style-type: none;
    margin : 0;
    padding: 0;
    float: right;
    overflow: hidden;
    color:brown;
}

li 
{
    float: left;
    padding-top: 20px;
    padding-right: 25px;

}

li a, .dropbtn
 {
    display: inline-block;
    color:black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 25px;
    font-family:serif; 
    text-shadow:2px 2px 8px pink; 

}

li a:hover, .dropdown:hover .dropbtn 
{
    background-color:lightblue;
    color:oldlace; 
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#D2B48C;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color:brown;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    font-style: italic;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content 
{
    display: block;
}

li a:hover{
    background-color:transparent;
    color:brown;
}
/* end nav*/

/*start about eathenware*/
.shoph2
{
    padding-top:29px;
}

h2
{
	font-family: serif;
}
.container
{
	width: 90%;
	height: 350px;
	margin: auto;
}

.defination
{
	width: 85%;
	height: 200px;
    margin: auto;
}

*, *:before, *:after 
{
  box-sizing: inherit;
}


/*.column 
{
  margin-left: 8%;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}*/

.container2
{  
    width:950px;
    height:850px;
    overflow: scroll;
    margin-left:20%;
    margin:auto;
    padding-left:60px;
    
}

.earimg
{
    width:280px;
    height:400px;
    float:left;
    padding-right:30px;
    margin-bottom:40px;    


}
@media screen and (max-width: 650px)
 {
  .column {
    width: 100%;
    display: block;
  }
}

.card 
{
  height:400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  float:left;
  border-style:1px solid;
}

.con
{
  width: 100%;
  padding: 0 5px;
  float:left;
}

.con::after, .row::after {
  content: "";
  width: 20%;
  clear: both;
  display: table;
}
.con p
{
    text-align:center;
}
.con h3
{
    text-align:center;
}
.title {
  color: grey;
}

.add_to_cart
 {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: #f8f9f9;
      background-color:background;
      text-align: center;
      cursor: pointer;
      width:40%;
      margin-left:10px;
      float:left;
      font-family:serif;
      border-radius:15px 100px 30px;
      font-size:16px;
      
}
input[type=number]
 {  
    width:105px;
    height:28px;
    float:left;
    border-bottom-color:black;
    border-left-color:brown;
    box-shadow: 3px 3px 0px #fef9e7 ;
    font-family:serif;
    font-size:16px;
}

.add_to_cart:hover
{
  background:#d0d3d4 ;
  color:black;
  box-shadow: 4px 8px #888888;
} 

.checkout
{
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    background: #fcf3cf;
    color:#ca6f1e;
    text-align: center;
    cursor: pointer;
    width:30%;
    font-family:serif;
    font-size:18px;
    margin-left:480px;
    border-radius:10px 10px;
    margin-top:100px;
}
.checkout:hover
{
  color:#d3cdb1;
  background-color:background;
  box-shadow: 4px 8px #888888;
}  
table
{
    width:90%;
    margin:auto;
    border: 1px solid black;
}
table, th
{
    text-align: center;
    margin-top:50px;
    
}
td
{
    padding:15px 15px;
    font-size:18px;
}
th
{
    border-style:double;
    border-top:transparent;
    border-left:transparent;
    border-right:transparent;
    border-color: #b9770e ;
    box-shadow: 3px 3px 3px #999;
}
.text-danger:hover
{
    color:#9a7d0a;
}
text-danger:active {
  color: black;
}



     

</style>

	
</head>
<body>
	<!-- Header  and nav-->
	<div class="all">
	<div class="header">
	<div class="logo">	</div>

  <div class="nav">
  <ul>
  <li><a href="index.php">Home </a></li>
  <li class="dropdown">
    <a class="dropbth">Categories</a>
    <div class="dropdown-content">
      <a href="earthenware.php">Earthenware</a>
      <a href="earthenware.php#stoneware">Stoneware</a>
      <a href="earthenware.php#porcelian">Porcelian</a>
    </div>
  </li>
  <li>
      <a href="index.php#about">About us</a>
	  <a href="index.php#contact">Contact us</a>
	  <a href="cus_search.php"><img src="images/search.png" width="25px" height="25px"></a> 
	  <a href="earthenware.php#list"><img src="images/wicked-basket.png" width="25px" height="25px"></a>

  </li>
</ul>
	</div>	
	</div>
	<!--  end header and nav-->
	<hr color="burlywood" width="100%">
	
	<!--  about earthenware-->
	<div class="container">
		<h2 align="center">About Earthenware Potteries</h2>
		<div class="defination">
			<p align="justify" style="font-size: 20px;">
				Earthenware is made from almost any basic clay material that's often found at riverbeds. It can be shaped and moulded crudely with hand or turned on a potter &apos;s wheel, hence its description as potter&apos;s clay.<br><br>

				Earthenware can be fired at relatively low temperatures product and if subjected to higher temperatures, it becomes harder and denser. They are also known as Terracott used in flower pots.<br><br>

				Clay colour depended on the geographical location of where it is found and the chemistry of each clay deposit, with natural colours varying from a pale washed-out tan to deep reds and brown shades. Like all ceramics, earthenware can be finished with glazing or left unglazed.<br><br>
				The earliest examples of American Earthenware tended to be of poor quality and most objects of this era are of a functional nature. 
			</p>
		</div>
</div>
	<h2 class="shoph2" align="center">Shop Earthenware Potteries</h2>
	<hr color=" #979a9a " width="90%">
	</div>

       <div class="row">
       	<div class="container2">

       <?php
    	$viewquery="select * from product where category='Earthenware'";
    	if (!empty($viewquery))
    	{ 
        	foreach ($conn->query($viewquery)as $row)
        	{
?>			
    			
    				<div class="earimg">
        			<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                        <form method="post" action="earthenware.php?action=add&pid=<?php echo $row["pid"]; ?>">
                      <p>
                      		<input type="hidden" name="name" value="<?php echo $row["name"]; ?>" /> 
        					<input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                          	<input type='number' name='qty' size='20' min='0' >
                            <input class="add_to_cart" type='submit' name='add_to_cart' value='Add to Cart'>
                       </p>	</form>
                      </div>
                    </div>
                    </div>   
                             			                
<?php
    	}
    }
?> </div>
</div>

	<!--  about stoneware-->

	<div class="container">
		<h2 id="stoneware" align="center">About Stoneware Potteries</h2>
		<div class="defination">
			<p align="justify" style="font-size: 20px;">
				Stoneware, pottery that has been fired at a high temperature (about 1,200 degree C [2,200 degree F]) 
				until vitrified (that is, glasslike and impervious to liquid).<br><br> Although usually opaque, some stoneware is so
				 thinly potted that it is somewhat translucent. Because stoneware is nonporous, it does not require a glaze; when 
				 a glaze is used, it serves a purely decorative function.<br><br> There are three main kinds of glaze: lead glaze, salt
				  glaze, and feldspathic glaze (the same material used in the body and glaze of porcelain).<br><br>
				   A fine white stoneware, Yue ware, produced during the Han dynasty  and perfected during the Tang dynasty has an olive or brownish green feldspathic 
				   glaze and belongs to the celadon family.
			</p>
		</div>
</div>
	<h2 class="shoph2" align="center">Shop Stoneware Potteries</h2>
	<hr color=" #979a9a " width="90%">
	</div>
	
	       <div class="row">
		  <div class="container2">
       <?php
    	$viewquery="select * from product where category='Stoneware'";
    	if (!empty($viewquery))
    	{ 
        	foreach ($conn->query($viewquery)as $row)
        	{
?>			
    				<div class="earimg">
        			<div class="card">
              		<img src="stoneware/<?php echo $row["image"]; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                        <form method="post" action="earthenware.php?action=add&pid=<?php echo $row["pid"]; ?>">
                      <p>
                      		<input type="hidden" name="name" value="<?php echo $row["name"]; ?>" /> 
        					<input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                          	<input type='number' name='qty' size='20' min='0' >
                            <input class="add_to_cart" type='submit' name='add_to_cart' value='Add to Cart'>
                       </p>	</form>
                      </div>
                    </div>   
                    </div>         			                
<?php
    	}
    }
?> </div>
       </div>
       	
	<!--  about earthenware-->
	 <hr color="burlywood" width="100%">
	<div class="container">
		<h2 id="porcelian" align="center">About porcelian Potteries</h2>
		<div class="defination">
			<p align="justify" style="font-size: 20px;">
				 Porcelain is made from fine, white clay, known as kaolin, with added ingredients such as feldspar, 
				 and fired at a very hot 2300 degree F (1260 degree C). <br><br>The pieces are smooth and a translucent white, very strong and 
				 especially useful in the kitchen because of being non-porous, non-stick, and dishwasher safe. Porcelain is,
				  not surprisingly, one of the most expensive kinds of pottery.<br><br>

			There is a clear difference in the texture of the different types, as stoneware has a gritty texture, earthenware 
			has a chalky feel on the bottom and will often have a shiny glaze, while porcelain is smooth and white, generally 
			thinner and appears translucent towards the edges. <br><br>
			Nowadays you can expect to see porcelain crockery as dinnerware, if not in your home then certainly in classy restaurants.			 
			</p>
		</div>
</div>
	<h2 class="shoph2" align="center">Shop porcelian Potteries</h2>
	<hr color=" #979a9a " width="90%">
	</div>

       <div class="row">
		    <div class="container2">
       <?php
    	$viewquery="select * from product where category='Porcelian'";
    	if (!empty($viewquery))
    	{ 
        	foreach ($conn->query($viewquery)as $row)
        	{
?>			
    				<div class="earimg">
        			<div class="card">
              		<img src="porcelian/<?php echo $row["image"]; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                        <form method="post" action="earthenware.php?action=add&pid=<?php echo $row["pid"]; ?>">
                      <p>
                      		<input type="hidden" name="name" value="<?php echo $row["name"]; ?>" /> 
        					<input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />
                          	<input type='number' name='qty' size='20' min='0' >
                            <input class="add_to_cart" type='submit' name='add_to_cart' value='Add to Cart'>
                       </p>	</form>
                      </div>
                    </div>   
                    </div>         			                
<?php
    	}
    }
?> </div>
          </div>

		<!-- Start Shopping Cart List -->
		<h2 id="list" align="center">Shopping Cart List</h2>
		<hr width="95%" color="#979a9a">
	<!--  start of shopping cart-->
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total</th>
		<th>Action</th>
		</tr>
		<?php
		if(!empty($_SESSION["shopping_cart"]))
		{
		$total = 0;
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
		?>
    		<tr>
    		<td><?php echo $values["item_name"]; ?></td>
    		<td><?php echo $values["item_quantity"]; ?></td>
    		<td>$ <?php echo $values["item_price"]; ?></td>
    		<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
    		<td><a href="earthenware.php?action=delete&id=<?php echo $values["item_id"]; ?>">
    		<span class="text-danger">Remove</span></a></td>
    		</tr>
		<?php
		
		$total = $total + ($values["item_quantity"] * $values["item_price"]);
		$_SESSION["payment"]= $total;
		}
		?>
		<tr>
		<td colspan="3" align="right" >Total</td>
		<td align="right">$ <?php echo number_format($total, 2); ?></td>
		<td></td>
		</tr>
		
		<?php
		}	
?>
	</table>
	</div>

	<!-- End Shopping Cart List -->
<!--     <form action="customer_login.php" method="post"> -->
     <form action="customer_login.php" method="post">
    <input class="checkout" type="submit" name="checkout" value="Checkout">
    </form>
    
 <?php 
// if (isset($_POST['checkout']))
//       {
//         $order_id = $conn->lastInsertId();
//         $order_id=$order_id+1;
    
//         if(isset( $_SESSION['shopping_cart'][0])){
//             echo "ok<br>";
//         }
//         else{
//             echo "not ok<br>";
//         }
//         $pro_id = $_SESSION['shopping_cart'][0]["item_id"];
//         $qty = $_SESSION['shopping_cart'][0]["item_quantity"];
//         $price = $_SESSION['shopping_cart'][0]["item_price"];
//         $payentAmount=$qty*$price;
        
        
//         $sql = "insert into `order`(`cid`, `cname`, `pid`, `qty`, `payment`, `order_date`)
//                             values (1,'kyaw', $pro_id,$qty,$payentAmount ,now())";
//         echo $sql;
//                $conn->exec($sql);

//     }
// ?>

</body>
</html>