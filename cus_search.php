<?php
include 'DBConnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Potterian Art>Customer Register Page</title>
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
	margin-bottom: 40px;
}

.filterDiv 
{
  float: left;
  color: Black;
  width:90%;
  text-align: center;
  margin: 2px;
  display: none; 
  margin-left:50px;
  margin-bottom:25px;
}

.show 
{
  display: block;
}

.container 
{
  margin-top: 20px;
}

/* Style the buttons */
.btn 
{
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size:16px;
  font-family:serif;
}
.btn:hover 
{
  background-color: #ddd;
}

.btn.active
 {
  background-color: #666;
  color: white;
}


.earimg
{
    width:280px;
    height:340px;
    float:left;
    margin-bottom:40px; 
    padding-left:20px;
}
@media screen and (max-width: 650px)
 {
  .column 
  {
    width: 100%;
    display: block;
  }
}

.card 
{
  height:350px;
  width: 280px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  float:left;
  border-style:1px solid;
  margin-left:20px;
  margin-bottom:50px;
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
    </style>
    
</head>
<body>
    
   		<!--  start logo link-->

		<div class="logo">
		<a href="index.php" >
		<img src="images/logo.png" width="100%" height="100px" class="imgcorner"></a>		
		</div>
		<!--  end logo link-->
		
		<h2 align="center">Filter & Search Products</h2>
		<hr color=" #979a9a " width="90%">
		
		<div id="myBtnContainer">
          <button class="btn active" onclick="filterSelection('all')"> Show all</button>
          <button class="btn" onclick="filterSelection('cezve')"> Cezve</button>
          <button class="btn" onclick="filterSelection('cas')"> Cup and Saucer</button>
          <button class="btn" onclick="filterSelection('plate')">Plate</button>
          <button class="btn" onclick="filterSelection('vase')">Vase</button>
          <button class="btn" onclick="filterSelection('pot')">Pot</button>
          <button class="btn" onclick="filterSelection('mug')">Mug</button>
          <button class="btn" onclick="filterSelection('bowl')">Bowl</button>
           <button class="btn" onclick="filterSelection('map')">Mortar & Pestle</button>
          <button class="btn" onclick="filterSelection('set')">Sets</button>
       </div>
<!--  start cezve filter-->
<div class="container">
 <div  class="filterDiv cezve">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%ve'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div>
 
<!--  end cezve filter-->

<!--  start cup and saucers filter-->
 <div  class="filterDiv cas">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%er'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end cup and plate filter-->

<!--  start cup and saucers filter-->
 <div  class="filterDiv plate">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%te'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end cup and plate filter-->

<!--  start vase filter-->
 <div  class="filterDiv vase">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%se'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end vase filter-->

<!--  start pot filter-->
 <div  class="filterDiv pot">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%ot'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end pot filter-->

<!--  start mug filter-->
 <div  class="filterDiv mug">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%ug'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end mug filter-->

<!--  start bowl filter-->
 <div  class="filterDiv bowl">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%wl'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end bowl filter-->

<!--  start map filter-->
 <div  class="filterDiv map">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%le'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end map filter-->

<!--  start set filter-->
 <div  class="filterDiv set">
     
      	<?php       	     
      	     $viewquery="select * from `product` where name LIKE '%et'";
      	           foreach ($conn->query($viewquery)as $row)
        	{
?>			     	  
      	  		<div class="card">
              		<img src="earthenware/<?php echo $row['image'] ; ?>" style="width:100%" height="250px"/>            
                      <div class="con">
                        <h3><?php echo $row["name"] ; ?></h3>
                        <p class="title"><?php echo $row["price"] ; ?> USD</p>
                      </div>
                   </div>    
      	     <?php      	     
        	}      	     
      	     ?>      				
			</div> 

<!--  end set filter-->


</div>
<script>
filterSelection("all")
function filterSelection(c) 
{
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


</body>
</html>

