<?php

$conn=mysqli_connect("localhost", "root", "", "detsdb");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  

$user_id = mysqli_real_escape_string($conn, $_GET['Userid']);

$sql = "DELETE FROM tbl_brkdwn_details WHERE user_id='$user_id'";

if ($conn->query($sql) === TRUE) {

$sql = "DELETE FROM tbl_brkdwn_details WHERE user_id='$user_id'";
if ($conn->query($sql) === TRUE) {
} else {
}

    echo "	records successfully deleted";
} else {
    echo "	canceled";
}

$conn->close();
?>
