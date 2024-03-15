<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "connection.php";
    $ID = $_POST['ID'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $establishment_date = $_POST['date'];
    $opening_time = $_POST['opening_time'];
    $closing_time = $_POST['closing_time'];
    $sql = "UPDATE colleges SET Name = '$name', Phone_no = '$phone', Est_date = '$establishment_date', opening_time = '$opening_time', closing_time = '$closing_time' WHERE ID = $ID";
    if($conn->query($sql) === TRUE){
        echo "Record updated successfully";
        header("Location: index.php");
            exit();

    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
