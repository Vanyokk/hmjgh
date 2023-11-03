<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    class Animal
    {
        public $weight, $age, $color;
    }

    class Lion extends Animal
    {
        public $wool;
        function samka()
        {
            echo "<p>Возраст $this->age</P>";
            echo "<p>Вес $this->weight</p>";
            echo "<p>Цвет $this->color</p>";
            echo "<p>Покров $this->wool</p>";
            // Смотри
        }
    }
    class rabbit extends Animal
    {
        public $speed;
        function zayach()
        {

            echo "<p>Возраст $this->age</P>";
            echo "<p>Вес $this->weight</p>";
            echo "<p>Цвет $this->color</p>";
            echo "<p>Скорость $this->speed</p>";
            // что такое экземпляр
        }
    }

    class wolf extends Animal
    {
        public $flock;
        function fun()
        {

            echo "<p>Возраст $this->age</P>";
            echo "<p>Вес $this->weight</p>";
            echo "<p>Цвет $this->color</p>";
            echo "<p>Стая $this->flock</p>";
            // что такое экземпляр
        }
    }


    $lev = new Lion();
    $jerry = new rabbit();
    $gray = new wolf();

    $lev->wool = "Шерстяной";
    $lev->age = 6;
    $lev->weight = "500кг";
    $lev->color = "green";


    $jerry->speed = "500км/ч";
    $jerry->age = 2;
    $jerry->weight = "50кг";
    $jerry->color = "pink";



    $gray->flock = "есть стая";
    $gray->age = 60;
    $gray->weight = "20кг";
    $gray->color = "gray";

    echo '<div class="box1">';
    $gray->fun();
    echo "</div>";
    echo '<div class="box1">';
    $jerry->zayach();
    echo "</div>";
    echo '<div class="box1">';
    $lev->samka();
    echo "</div>";
    ?>
</body>

</html>