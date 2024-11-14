<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    <?php
        $fruits = [
            "사과" => "apple",
            "딸기" => "strawberry",
            "바나나" => "banana"
        ];

        echo "값만 사용 <br/>";
        foreach($fruits as $fruit) {
            echo "{$fruit}<br/>";
        }

        echo "<br/>";

        echo "키와 값 모두 사용 <br/>";
        foreach($fruits as $kor => $eng) {
            echo "{$kor} => {$eng}<br/>";
        }
    ?>
</body>
</html>