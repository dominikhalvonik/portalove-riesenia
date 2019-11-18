<?php
//$jsonFileContent = file_get_contents("menu-nove.json");
//$nav_items = json_decode($jsonFileContent, true);
include_once "Databaza.php";
$dbObject = new \BeginningPhp\Databaza("localhost", "3306", "root", "", "portalove");
$nav_items = $dbObject->getMenuItems();

$subpage_name = basename($_SERVER['SCRIPT_NAME'], '.php');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Portálové riešenia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1><?php echo $nav_items[$subpage_name]['name'] ?></h1>
    <nav>
        <ul>
            <?php
            foreach ($nav_items as $name => $nav_item) {
                ?>
                <li>
<a <?php if ($nav_items[$subpage_name]['name'] == $nav_item['name']) echo 'class="active"'; ?>
    href="<?php echo $nav_item['path']; ?>">
    <?php echo $nav_item['menu']; ?>
</a>
                </li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>
