<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>replace grammer</title>
</head>
<body>
    <?php
        echo "if 대채문법 <br/>";

        $score = 100;
        if($score == 100):
    ?>
    <div>점수는 100점입니다</div>

    <?php
        else if($score == 90):
    ?>
    <div>점수는 90점입니다.</div>
    
    <?php
        else:
    ?>
    <div>점수는 90점 미만입니다.</div>

    
    <?php
        endif;
        echo "for 대채문법 <br/>";

        for($i=0; $i<10; $i++):
    ?>
    <div><? echo $i; ?></div>

    <?php
        echo "if 대채문법 <br/>";

        endfor;
    ?>
    <div>점수는 100점입니다</div>
</body>
</html>