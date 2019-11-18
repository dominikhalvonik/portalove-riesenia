<?php
    //$nav_items = array('Zaciname s PHP', 'O nas', 'Kontakt');
    $nav_items = ['Zaciname s PHP', 'O nas', 'Kontakt'];

    $subpage_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    if ($subpage_name == 'index')
        $subpage_name = $nav_items[0];
    elseif ($subpage_name == 'about')
        $subpage_name = $nav_items[1];
    else
        $subpage_name = $nav_items[2];
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
    <h1><?php echo $subpage_name ?></h1>

    <nav>
        <ul>
            <li><a <?php if ($subpage_name == $nav_items[0]) echo 'class=active'; ?> href="index.php">Domov</a></li>
            <li><a <?php if ($subpage_name == $nav_items[1]) echo 'class=active'; ?> href="about.php">O nás</a></li>
            <li><a <?php if ($subpage_name == $nav_items[2]) echo 'class=active'; ?> href="contact.php">Kontakt</a></li>
        </ul>
    </nav>
</header>
