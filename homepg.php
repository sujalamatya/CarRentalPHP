<?php
    include('./dbconfig.php');
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $plocation = $_POST['plocation'];
    $pdate = $_POST['pdate'];
    $ddate = $_POST['ddate'];
    $number = $_POST['number'];
    

    $save = "insert into home(`name`,`plocation`,`pdate`,`ddate`,`number`) values ('$name','$plocation','$pdate','$ddate','$number')";
    $savedata = $conn->query($save);
    header('location: ./index.php');
}