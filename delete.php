<?php

require_once "config/database.php";


if (!isset($_GET["id"])) {
    header("Location: admin.php");
    exit;
}


$id = intval($_GET["id"]);


$sql = "DELETE FROM service_requests WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

$stmt->execute();


header("Location: admin.php");

exit;

?>