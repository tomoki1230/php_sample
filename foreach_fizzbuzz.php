<?php

foreach(range(1, 30) as $num){
    if($num % 15 == 0){
        echo "FizzBuzz". PHP_EOL;
    }elseif($num % 3 == 0){
        echo "Fizz". PHP_EOL;
    }elseif($num % 5 == 0){
        echo "Buzz". PHP_EOL;
    }elseif($num % 4 == 0){
        continue;
    }else{
        echo $num. PHP_EOL;
    }
}

?>
