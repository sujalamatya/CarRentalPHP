<?php
$conn = new mysqli("localhost:3307", "root", "", "s3car");
if ($conn->connect_error) {
    die($conn->connect_error);
}
