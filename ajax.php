<?php
include_once("classes/DB.php");

use classes\DB;

$db = new DB("localhost", "root", "", "portalove", 3306);

if($_GET['show'] == 1) {
    $zamestnanci = $db->getZamestnanci();

    foreach ($zamestnanci as $key => $zamestnanec) {
        ?>
        <div class="tm-carousel-item">
            <figure class="effect-honey mb-4">
                <img src="<?php echo $zamestnanec['image_path']; ?>" alt="Featured Item">
                <figcaption>
                    <ul class="tm-social">
                        <li><a href="https://facebook.com" class="tm-social-link"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </figcaption>
            </figure>
            <div class="tm-about-text">
                <h3 class="mb-3 tm-text-primary tm-about-title"><?php echo $zamestnanec['meno']; ?></h3>
                <p><?php echo $zamestnanec['popis']; ?></p>
                <h4 class="tm-text-secondary tm-about-subtitle"><?php echo $zamestnanec['pozicia']; ?></h4>
            </div>
        </div>
        <?php
    }
} else {
    echo "No data found";
}
die();
