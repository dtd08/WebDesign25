<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If ElseIf Else</title>
</head>
<body>
    <?php
        $weather = "sunny";
        $friendsInHome = false;

        if ($weather == "rainning") {
            echo "집에서 잠이나 자자..";
        }
        elseif ($friendsInHome) {  // php의 elseif문은 'else if' 여도 되고 'elseif' 여도 된다. 다만 한가지로 통일하여 사용하자.
            echo "친구 집으로 놀러가자!";
        } else echo "에효.. 집에서 놀자";

    // 24.11.08
    ?>
</body>
</html>
