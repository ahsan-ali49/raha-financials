<?php

$connection = mysqli_connect('localhost', 'admin_reviews', 'ttE2koQemA', 'admin_reviews');
// $connection = mysqli_connect('localhost', 'root', '', 'raha_financials');
if (!$connection) {

    // If connection failed, print the error message

    die("Connection failed: " . mysqli_connect_error());

}

?>