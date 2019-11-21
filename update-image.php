<?php
include_once "Databaza.php";
$dbObject = new \BeginningPhp\Databaza("localhost",
    "3306",
    "root",
    "",
    "portalove");
if(isset($_POST['image-id']) && isset($_POST['url'])) {
    $dbObject->updateImage($_POST['image-id'], $_POST['url']);
    header("Location: gallery.php");
} else {
    echo "Nezadali ste ID obrazku alebo URL";
}
?>