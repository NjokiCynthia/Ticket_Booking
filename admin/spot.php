<?php
include "config.php";

if (isset($_POST['submit'])) {
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['email'];
    $mobile = $_POST['pNumber'];
    $sitting = $_POST['sitting_slot'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $time = $_POST['hour'];
    $eventID = $_POST['eventID'];
    $amount = $_POST['cash'];
    $order = "cash";



    $qry = "INSERT INTO `bookingtable`('eventID`, `sitting_slot`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`, `bookingEmail`,`amount`, `ORDERID`) VALUES  
			('$eventID', '$sitting', '$type', '$date', '$time', '$fname', '$lname', '$mobile','$email', '$amount' ,'$order')";

    $rs = mysqli_query($con, $qry);

    if ($rs) {
        echo "<script>alert('Sussessfully Submitted');
              window.location.href='add.php';</script>";
    }
} else {
    echo "error" . mysqli_error($conn);
}
