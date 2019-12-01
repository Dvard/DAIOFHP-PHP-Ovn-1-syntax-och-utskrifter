<?php
$myschool = 'Prakticum';
$heltal = 3;
$decimaltal = 1.2;
$länk = '<a href="https://prakticum.fi">Webbsida</a>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Övning - 1</title>
    </head>
    <body>
        <p><?php echo $myschool?></p>
        <p><?php echo $heltal . ' * ' . $decimaltal . ' = ' . ($heltal * $decimaltal)?></p>
        <?php echo $länk?>
    </body>
</html>
