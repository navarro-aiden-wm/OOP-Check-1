<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>OOP-Check-1</title>

    <?php include("classes.php"); ?>
</head>
<body>


</body>
</html>

<?php

$aiden = new account("Aiden Navarro", "pa55w0rd", "08/02/99");
echo "Aiden's full name: " . $aiden->get_name();

echo ", Aiden's password: " . $aiden->get_password();

?>