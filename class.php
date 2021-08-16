<?php
//Класс (дробь) и его значения с поведением
class Fraction
{
    public int $numerator; //числитель
    public int $denominator; //знаменатель


 public function __construct(int $num, int $den) //в скобках внешние переменные которые ниже в создание объекта
 {
     if($den==0) {
       throw new Exception(message: 'Нельзя создать нулевую дробь');
     }

     $this->numerator= $num;
     $this->denominator= $den;

 }

//сложение
    public function add(int $number)
{


}

//умножение
    public function mult(int $number)
    {
    }
//Печать
    public function _print()
    {
    }

}

//Создание Объекта
$a = new Fraction(2,3);// это идет в функцию выше в скобкиконтрусктора ()
//Инициализация
$fraction->numerator=1;
$fraction->denominator=2;


