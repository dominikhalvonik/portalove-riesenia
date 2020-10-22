<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);
$menuItems = $db->getMenuItems();
?>
<nav class="tm-nav">
    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div>
        <div class="tm-brand-box">
            <h1 class="tm-brand">Upright</h1>
        </div>
        <ul id="tm-main-nav">
            <?php
            foreach ($menuItems as $key => $menuItem) {
                if ($menuItem['meno'] === 'External') {
                    ?>
                    <li class="nav-item">
                        <a href="<?php echo $menuItem['file_path']; ?>" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fas <?php echo $menuItem['icon']; ?> nav-icon"></i>
                            <?php echo $menuItem['meno']; ?>
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a href="#<?php echo $menuItem['file_path']; ?>" class="nav-link">
                            <div class="triangle-right"></div>
                            <i class="fas <?php echo $menuItem['icon']; ?> nav-icon"></i>
                            <?php echo $menuItem['meno']; ?>
                        </a>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <footer class="mb-3 tm-mt-100">
        Design: <a href="https://templatemo.com" target="_parent" rel="sponsored">TemplateMo</a>
    </footer>
</nav>