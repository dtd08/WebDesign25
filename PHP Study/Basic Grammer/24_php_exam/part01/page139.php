<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor</title>
</head>
<body>
    <?php
        class Constructor {
            function __construct() {
                $a = 1;
                echo $a;
            }
        }

        new Constructor();
    ?>
</body>
</html>