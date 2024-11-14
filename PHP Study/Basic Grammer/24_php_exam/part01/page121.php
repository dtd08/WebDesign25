<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
    <?php
        for($i=0;$i<=10;$i++) {
            echo "{$i}<br/>";
            if($i==10) {
                echo "\$i가 {$i}이므로 for문을 종료됩니다.";
            }
        }
    ?>
</body>
</html>