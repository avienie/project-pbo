<?php
session_start();

if (!isset($_SESSION['data'])) {
    header("Location: index.php");
    exit();
}

$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<h2>Hasil Input</h2>

<p>Hi, my name is <?= $data['fullname']; ?></p>
<p>Phone Number: <?= $data['phone']; ?></p>
<p>Address: <?= $data['address']; ?></p>

<a href="index.php">Kembali</a>

</body>
</html>