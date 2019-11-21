<?php
    include 'header-novy.php';
    if(isset($_POST['submit'])) {
        $contactItems = [];
        if(file_exists('contact.json')) {
            $jsonFileContent = file_get_contents("contact.json");
            $contactItems = json_decode($jsonFileContent, true);
        }

        $contactItems[$_POST['name']] = $_POST['content'];
        $jsonFileContent = json_encode($contactItems);
        file_put_contents("contact.json", $jsonFileContent);
    }
?>
    <div class="main">
        <p>
            Trieda A. Hlinku 1 <br>
            Nitra
        </p>
        <p>
            <form action="contact.php" method="post">
                <input type="text" name="name" value="Meno"><br>
                <textarea name="content">
                    Piste sem
                </textarea><br>
                <input type="submit" name="submit" value="Odoslat">
            </form>
        </p>
    </div>
    <?php
    include 'footer.php';
    ?>