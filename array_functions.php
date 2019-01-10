<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?php

$list = [343,34,43,232,32,23,45,5445,54];

echo max($list);
// 5445

echo "<br>";

echo min($list);

echo "<br>";

sort($list);

print_r($list);

// visit "php array functions ref" for the complete list


?>

</body>
</html>
