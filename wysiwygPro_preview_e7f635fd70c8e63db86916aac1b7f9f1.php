<?php
if ($_GET['randomId'] != "vCBGlqf5F1wKu5xGbaqulxsPR6qX5lzNZO6PxJHdyE48dzJfHkzgm993pIO1hYyB") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
