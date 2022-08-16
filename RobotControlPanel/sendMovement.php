<?php

$conn = mysqli_connect("localhost", "root", '', "sensor_record");

if (mysqli_connect_errno()) {
    die('Unable to connect to database ' . mysqli_connect_error());
}

$direction = $_POST['direction'];

$qry = $conn->prepare("INSERT INTO movements VALUES ('" . $direction . "')");

if ($qry->execute()) {
    echo "Add Success";
} else {
    echo "Add Failed";
}