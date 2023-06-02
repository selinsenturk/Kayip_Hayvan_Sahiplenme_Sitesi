<?php
$servername = "localhost";
$cins = "cins";
$neredebulunduğu = "neredebulunduğu";
$yaraizi = "yaraizi";
$tasma = "tasma";
$yas = "yas";

$conn = new mysqli($servername, $cins, $neredebulunduğu, $yaraizi, $tasma, $yas);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>