<?php
    if(isset($_POST['button submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = ""
        $header = "From: ".$mailFrom;
        $txt = "You have recieved and email form ".$name.".\n\n".$message;
        mail($mailTo, $txt, $header);
        header("Location: index.php?mailsend");
    }