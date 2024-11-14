<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>access controller</title>
</head>
<body>
    <?php
        class OutSider {
            private $p = "out sider";
        }

        $o = new OutSider();
        // 에러 발생
        echo $o->p;
    ?>
</body>
</html>