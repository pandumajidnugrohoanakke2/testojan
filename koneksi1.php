<?php
$koneksi = mysqli_connect("localhost","root","","pasrah");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO pasrah VALUES('$email','$password')";
mysqli_query($koneksi,$query);



?>