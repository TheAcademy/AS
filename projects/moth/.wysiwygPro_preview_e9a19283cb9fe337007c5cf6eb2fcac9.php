<?php
if ($_GET['randomId'] != "qYw5PFzPfNrQltK9EuOHVYaBbBOp3VCKqjAcUgoGd4ybG75RvxnAvRwN1O7eGuT4") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
