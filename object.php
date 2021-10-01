<?php

class Car {
    //プロパティを追加で定義
    private $color;
    private $price;
    private $capacity;

    //constructメソッドにも引数を追加
    public function __construct($color, $price, $capacity) {
        $this->color = $color;
        $this->price = $price;
        $this->capacity = $capacity;
    }


    public function getColor() {
        return $this->color;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCapacity() {
        return $this->capacity;
    }
}

//インスタンス化する際にconstructソッドに値を渡す
$car1 = new Car("red", 1000000, 4);
$car2 = new Car("green", 1500000, 5);
$car3 = new Car("blue", 3000000, 8);


echo $car1->getColor();
echo $car2->getColor();
echo $car3->getColor();

echo $car1->getPrice();
echo $car2->getPrice();
echo $car3->getPrice();

echo $car1->getCapacity();
echo $car2->getCapacity();
echo $car3->getCapacity();

?>
