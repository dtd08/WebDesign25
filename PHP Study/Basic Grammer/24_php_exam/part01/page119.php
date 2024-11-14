<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <?php
        $score = 90;
        switch($score) {
            case 100:
                echo "점수는 100점입니다. <br/>";
                break;
            case 90:
                echo "점수는 90점입니다. <br/>";
                break;
            case 80:
                echo "점수는 80점입니다. <br/>";
                break;
            default:
                echo "점수는 70점입니다. <br/>";
                break;
        }
    ?>
</body>
</html>