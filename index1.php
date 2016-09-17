<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>OOP-Check-1</title>

    <?php include("classes.php"); ?>
</head>
<body>



<p>
<?php

$aiden = new account("Aiden Navarro", "pa55w0rd", "08/02/99");
echo "Aiden's full name: " . $aiden->get_name();

echo ", Aiden's password: " . $aiden->get_password();

echo ", 08/02/99";
?><p/>

<p>
    <?php
    $aiden->__set("Aiden Navarro", "100005945");
    $aiden->__get("Aiden Navarro");
    ?>
</p>

<p>
    <?php
    $axnav909 = new profile("Axnav909", "pa55w0rd", "08/02/99");
    echo "--->" . $axnav909->get_name();
    ?>
</p>
</body>
</html>