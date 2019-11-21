<?php
include_once "Databaza.php";
$dbObject = new \BeginningPhp\Databaza("localhost",
    "3306",
    "root",
    "",
    "portalove");
if(isset($_GET['image-id'])) {
    $dbObject->deleteImage($_GET['image-id']);
    header("Location: gallery.php");
} else {
    echo "Nezadali ste ID obrazku";
}
?>