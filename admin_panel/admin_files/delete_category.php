<?php

include('db.php');

if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $id = $_GET['id'];
    $del_query = $conn->prepare("DELETE FROM categories WHERE cat_id = ?");
    $del_query->bind_param('i',$id);
    $del_query->execute();
    $del_query->close();
    header("Location: view_category.php");

}
?>