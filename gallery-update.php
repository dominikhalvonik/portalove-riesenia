<?php
//echo "Hello world!";
#jednoriadkovy komentar
/*
 * viacriadkovy
 * komentar
 */
include 'header-novy.php';
?>
    <div class="main">
        <p>
            Aktualizacia obrazku
        </p>
        <p>
            <form action="update-image.php" method="post">
                <input name="url" type="text" placeholder="Zadajte URL..." value=""><br>
                <input type="hidden"
                       name="image-id"
                        value="<?php if(isset($_GET['image-id'])) { echo $_GET['image-id']; } ?>">
                <input type="submit" name="submit" value="Aktualizovat">
            </form>
        </p>
    </div>
<?php
include 'footer.php';
?>