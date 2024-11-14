<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>local variable, member variable</title>
</head>
<body>
    <?php
        class Member {
            public $m;
            public $m1 = "멤버변수입니다.";

            public function __construct() {
                $m = "지역변수입니다.";
                echo "{$m} <br/>";
            }
        }

        $member = new Member();
        echo "초기화하지 않은 멤버변수 : {$member->m}<br/>";
        echo "초기화한 멤버변수 : {$member->m1}<br/>";
    ?>
</body>
</html>
