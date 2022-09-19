<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$certificate = $_POST['certificate'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$address = $_POST['address'];
$country = $_POST['country'];
$state = $_POST['state'];
$class = $_POST['class'];
$term = $_POST['term'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'aliyu2');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, certificate, dob, email, address, country, state,  class, term) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisssss", $firstName, $lastName, $certificate, $dob, $email,  $address, $country, $state, $class, $term);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
