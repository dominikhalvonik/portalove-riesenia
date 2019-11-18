<?php
//$nav_items = array('Zaciname s PHP', 'O nas', 'Kontakt');
$nav_items = [
    'index' => [
        'name' => 'Zaciname s PHP',
        'menu' => 'Domov',
        'path' => 'index.php'
        ],
    'about' => [
        'name' => 'O nas',
        'menu' => 'O nás',
        'path' => 'about.php'
    ],
    'contact' => [
        'name' => 'Kontakt',
        'menu' => 'Kontakt',
        'path' => 'contact.php'
    ]
];

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
                    <a <?php if ($nav_items[$subpage_name]['name'] == $nav_item['name']) echo 'class=active'; ?> href="<?php echo $nav_item['path']; ?>">
                        <?php echo $nav_item['menu']; ?>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>
