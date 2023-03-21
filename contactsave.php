<?php 
    include('./dbconfig.php');
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $msg = trim($_POST['msg']);
    

    $save = "insert into contact(`uname`,`email`,`sub`,`msg`) values ('$uname','$email','$sub','$msg')";
    $savedata = $conn->query($save);
    header('location: ./contact.html');
}