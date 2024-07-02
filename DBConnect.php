<?php
$sn = "localhost";
$un = "root";
$pw = "";
$db = "ecom";

try
{
    $conn = new PDO("mysql:host=$sn;dbname=$db",$un,$pw);
    #    echo "<script type='text/javascript'>
    #            alert ('Connection Successful');</script>";
}
catch (PDOException $e)
{
    echo "<script type='text/javascript'>
            alert ('Connection Fail');</script>";
    $e->getMessage();
}
