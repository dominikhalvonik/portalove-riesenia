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
                <a href="delete-images.php?image-id=<?php echo $image['id']; ?>" title="Vymazat">Vymazat</a><br>
                <a href="gallery-update.php?image-id=<?php echo $image['id']; ?>" title="Aktualizivat">Aktualizivat</a>
                <img src="<?php echo $image['url']; ?>"><br>
                <?php
            }
        ?>
    </p>
</div>
<?php
include 'footer.php';
?>
