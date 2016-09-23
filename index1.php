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
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$foo = new foo;
$bar = new bar;

$bar->sayHello();

$aiden1 = new account("Aiden Navarro", "pa55w0rd", "08/02/99");
echo "Aiden's full name: " . $aiden1->get_name();

echo ", Aiden's password: " . $aiden1->get_password();

echo ", 08/02/99";
?><p/>

<p>
    <?php
    $aiden1->__set("Aiden Navarro", "100005945");
    $aiden1->__get("Aiden Navarro");
    ?>
</p>

<p>
    <?php
        $you = new aiden();
        $you->name = 'Aiden';
        $you->DOB = '08/02/99';
        echo  $you->describe();

    ?>
</p>

<p>
    <?php
    $you = new Bill();
    $you->name = 'Bill';
    $you->DOB = '12/05/93';
    echo  $you->describe();

    ?>
</p>

<p>
    <?php
    $you = new Frank();
    $you->name = 'Fank';
    $you->DOB = '03/21/82';
    echo  $you->describe();

    ?>
</p>
</body>
</html>