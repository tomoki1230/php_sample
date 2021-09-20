<?php

//$nameが変数
//"yamada"が変数に格納される値
$name = "yamada";

?>

<?php

$name = "tanaka";
$item = "pen";
$price = 200;

?>

<?php

//constが定数の意味
//NAMEが定数の名前
//"yamada"が定数に格納される値
const NAME = "yamada";

//define()を使っても関数を定義できる
define("NAME" , "yamada");

?>

<?php

    //円周率は変わることがないので定数で定義する
    const PI = 3.14;
    //半径は変わる可能性があるので変数で定義する
    $radius = 10;
    echo $radius * $radius * PI;

?>
