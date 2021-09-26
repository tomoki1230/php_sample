<?php

$fruits = "apple";

switch($fruits) {
    case "banana":
        echo "バナナです";
        break;
    case "apple":
        echo "りんごです";
        break;
    case "orange":
        echo "オレンジです";
        break;
    case "mango":
        echo "マンゴーです";
        break;
    default:
        echo "不正な名前です";
}

?>

<?php

$month = 6;

switch($month) {
    case 3:
    case 4:
    case 5:
        echo "春です";
        break;
    case 6:
    case 7:
    case 8:
        echo "夏です";
        break;
    case 9:
    case 10:
    case 11:
        echo "秋です";
        break;
    case 12:
    case 1:
    case 2:
        echo "冬です";
        break;
    default:
        echo "不正な値です";
}

?>
