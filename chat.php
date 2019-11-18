<?php
//echo "Hello world!";
#jednoriadkovy komentar
/*
 * viacriadkovy
 * komentar
 */
include 'header-new.php';
if(isset($_POST['submit'])) {
    $dbObject->insertChat($_POST['name'], $_POST['message']);
    /*
    if(file_exists("chat.json")) {
        $chatJson = file_get_contents("chat.json");
        $chatArray = json_decode($chatJson, true);
    }
    $chatArray[] = [
        'name' => $_POST['name'],
        'message' => $_POST['message']
    ];
    $chatJsonInput = json_encode($chatArray);
    file_put_contents("chat.json", $chatJsonInput);
    */
}
$chatArray = $dbObject->getChatContent();
?>
    <div class="main">
        <p>
            Chatujeme spolu
        </p>
        <p>
            <form action="chat.php" method="post">
            <input type="text" name="name" placeholder="Meno" value=""><br>
            <input type="text" name="message" placeholder="Pis sem..." value=""><br>
            <input type="submit" name="submit" value="Odoslat">
            </form>
        </p>
        <p>
            <ul>
            <?php
            //$chatJson = file_get_contents("chat.json");
            //$chatArray = json_decode($chatJson, true);
            foreach ($chatArray as $key => $chat) {
                ?>
                <li><?php echo $chat['name'] ?> : <?php echo $chat['message'] ?></li>
                <?php
            }
            ?>
            </ul>
        </p>
    </div>
<?php
include 'footer.php';
?>