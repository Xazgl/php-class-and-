<?php

//создаем класс 
//Характеристики: Имя
class Cat 
{ 
public $name;

public function __construct($newName)
{
$this->name=$newName;
echo "Родилась кошечка" . $this->name . "\n";
}

// очитска памяти зарезервированой 
public function __destruct()
{
    echo $this->name . "удалили\n";
}

//Поведение:

//1
public function meow ()
{
echo "Мяу-Мяу";
}

//2
public function eat ()
{
echo "Попил молока";
}
}
//Создание объекта + инициалзицая
$cat = new Cat('Мурзик');

//Инициализация объекта
//$cat->name = 'Мурзик';

//использование объекта (цикл  for на 10 мяу и еда)
for($i=0; $i<10; $i++)
{
    $cat->meow ();
}
$cat->eat();
 






?>