<?php 
    $id = $_GET['id'];
    include "config.php";

    $sql = "DELETE FROM movietable WHERE eventID = $id"; 

    if ($con->query($sql) === TRUE) {
        header('Location: addevent.php');
        exit;
    } else {
        echo "Error deleting record: " . $con->error;
    }
?>