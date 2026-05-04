<?php
include "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM blood_tb WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Donor Deleted Successfully'); window.location='donorlist.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
