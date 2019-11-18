<?php
//echo "Hello world!";
#jednoriadkovy komentar
/*
 * viacriadkovy
 * komentar
 */
include 'header-novy.php';
if(isset($_POST['submit'])) {
    $dbObject->insertImage($_POST['url']);
}
$images = $dbObject->getImages();
?>
<div class="main">
    <p>
        Galeria
    </p>
    <p>
    <form action="gallery.php" method="post">
        <input type="text" name="url" maxlength="255" placeholder="Daj sem URL obrazku" value=""><br>
        <input type="submit" name="submit" value="Odoslat">
    </form>
    </p>
    <p>
        <?php
            foreach ($images as $image) {
                ?>
                <img src="<?php echo $image; ?>"><br>
                <?php
            }
        ?>
    </p>
</div>
<?php
include 'footer.php';
?>
