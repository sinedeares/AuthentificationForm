<?php
    echo "Задача 1 \n\r<br>";
    $a = rand (0,100);
    $b = rand (0,100);
    echo "$a + $b = ". ($a + $b)."<br><br>";
   
    echo "Задача 2 \n\r<br>";
    $string1 = "Ну привет, ";
    $string2 = "чел";
    echo ($string1.$string2)."<br><br>";

    echo "Задача 3 \n\r<br>";
    $type_animal = "fish";
    switch($type_animal){
        case "dog": 
            echo "Шарик";
            break;
        case "cat": 
            echo "Барсик";
            break;
        case "fish": 
            echo "Немо";
            break;
        default:
            echo "error";
    }

    