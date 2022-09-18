<?php
$n = rand(1, 13);
echo "класс " . $n . "</br>";
switch ($n) {
    case 1:echo "Учим буквы";
        break;
    case 2:echo "Учим таблицу умножения";
        break;
    case 3:echo "Учим что то";
        break;
    case 4:echo "учим дроби";
        break;
    case 5:echo "Учим учим геометрию";
        break; 
    case 6:echo "Учим алгебру";
        break;
    case 7:echo "Учим высшую алгебру)))";
        break; 
    case 8:echo "Учим высшую геометрию)))";
        break;   
    case 9:echo "ну что то сложное";
        break;
    case 10:echo "астраномия";
        break;  
    case 11:echo "стереометрия";
        break;   
    case 12:echo "ультрагеоалгеброметрия";
        break;                                                                                                          
    default:echo "ну ладно";
}