<?php
include 'DBConnect.php';
        session_start();
        $un = "kyaw kyaw";//$_SESSION["un"];
        $uid=1;
        $cart = $_SESSION["cart"];
        echo "<table border='1'>";
        echo "<tr><td>id</td><td>Product Name</td>
            <td>Price</td><td>Image</td>
            <td>Quantity</td><td>Amount</td></tr>";
        $total = 0;
        $pr = 0;
        foreach ($cart as $id => $qty)
        {
            $sql = "select * from product where pid='$id'";
            $r = $conn->query($sql);
            $res = $r->fetch();
            $amount = $qty * $res['price'];
            ?>
        <tr>
        	<td><?php echo $id;?></td>
        	<td><?php echo $res['name'];?></td>
        	<td><?php echo $res['price'];?></td>
        	<td><?php echo "<img src='images/".$res[5].
                "' width='100' height='100'/>";?></td>
        	<td><?php echo $qty ;?></td>
        	<td><?php echo $amount; ?></td>
        </tr>
        <?php
        $total = $total + $amount;
        }
        echo "</table>";
        echo "total price is " . $total;
        $sql = "insert into order(cname,order_date) 
                values (now(),'$un')";
        $conn->exec($sql);
        $oid = $conn->lastInsertId();
        $oid=$oid+1;
        $sql = "insert into orderline_tb values(?,?,?,?,?)";
        $stmt=$conn->prepare($sql);
        foreach ($cart as $id =>$qty)
            {
                $stmt->binValue(1,$oid);
                $stmt->binValue(2,$id);
                $stmt->binValue(3,$qty);
                $stmt->binValue(4,$amount);
                $stmt->binValue(5,'');
                $stmt->execute();
            }
           session_destroy();
        ?>
        
