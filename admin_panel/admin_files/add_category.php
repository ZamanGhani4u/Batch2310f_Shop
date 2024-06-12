<?php
    include('db.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $c_name = $_POST['categoryname'];
    $query = $conn->prepare("INSERT INTO `categories`(`cat_Name`) VALUES (?)");
    $query->bind_param("s",$c_name);
    $query->execute();
    $query->close();
    header("Location: view_category.php"); 
}

else
{
    echo "Record not inserted...";
    die("Any Error");
}



?>
