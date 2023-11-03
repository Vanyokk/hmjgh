<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>Задание 1</h1>

    <?php
    $array = ['Сидоров', 'Емелина', 'Иванова', 'Петров', 'Антонова', 'Валиуллин'];
    print_r($array);
    echo '<br>Количество студентов: ' . count($array);
    if (in_array('Сидоров', $array)) {
        echo '<br>yes';
    } else {
        echo '<br>no';
    }

    $expelled = array_pop($array);
    echo '<br>Удаленная фамилия: ' . $expelled . '<br>';
    ?>

    <br>
    <h1>Задание 2</h1>
    
    <?php

    $array2 = [
        'Спортивный' => 'Сидоров',
        'Художественный' => 'Емелина',
        'Музыкальный' => 'Иванова',
        'Литературный' => 'Петров',
        'Биологический' => 'Антонова'
    ];
    asort($array2);
    foreach ($array2 as $arr => $meaning) {
        echo '<br>' . $arr . ' - ' . $meaning;
    }
    ?>

    <br>
    <h1>Задание 3</h1>
    
    <?php
        $student = [
        'name' => 'Рамиль',
        'surname' => 'Валиуллин',
        'group' => '427 web',
        'hobby' => 'code',
        'networks' => ['vk' => 'test', 'tg' => 'test']
    ];
    echo '<br>' . $student['name'];
    echo '<br>' . $student['surname'];
    echo '<br>' . $student['group'];
    echo '<br>' . $student['hobby'];
    echo '<br>' . $student['networks']['vk'];
    echo '<br>' . $student['networks']['tg'];
    ?>
</body>

</html>