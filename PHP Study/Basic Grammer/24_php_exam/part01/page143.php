<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>access controller - protected, public</title>
</head>
<body>
    <?php
        include "page138.php";

        class Parents2 extends Parents {
            public function echoPar() {
                echo "public <br/>";
                $this->par;
            }
        }

        $par2 = new Parents2();
        $par2->echoPar();
        
        
        class OutSider {
            protected $p = "out sider";
        }

        class OutSider2 extends OutSider {
            public function echoP() {
                echo "protected <br/>";
                echo $this->p;
            }
        }

        $outSider = new OutSider2();
        $outSider->echoP();
    ?>
</body>
</html>