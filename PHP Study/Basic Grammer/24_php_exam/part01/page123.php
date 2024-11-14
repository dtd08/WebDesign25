<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while, do while</title>
</head>
<body>
    <?php
        $i = 1;

        while($i <= 10) {
            echo "${i} <br/>";
            if($i==10) echo "i가 ${i}이므로 while문을 종료합니다. <br/>";
            $i++;
        }

        echo "<br/>";
        $i = 1;

        do {
            echo "${i} <br/>";
            if($i==10) echo "i가 ${i}이므로 do while문을 종료합니다. <br/>";
            $i++;
        }while($i <= 10);

        echo "<br/>";
        $i = 11;

        do {
            echo "${i} <br/>";
            if($i==10) echo "i가 ${i}이므로 do while문을 종료합니다. <br/>";
            $i++;
        }while($i <= 10);
    ?>
</body>
</html>