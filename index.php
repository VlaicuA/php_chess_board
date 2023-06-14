<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
// 8 x 8
$r=8;
$c=0;

echo '<div class="main_div">';

for($i = 0; $i<$r; $i++) {
    echo '<div class="div_for_line">';
    for ($ii = 0; $ii<$r; $ii++) {
        if ($c%2 == 0) {
            echo '<div class="div1"></div>';
        } else {
            echo '<div class="div2"></div>';
        } 
        $c++;
    } echo '</div>';
    $c++;
}

echo '</div>';
?>

