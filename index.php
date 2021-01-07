<?php

//Asignación
$num=9;
$lang=['es'=>'español','en'=>'inglés'];

//Aritmética
echo "Suma 2+2 " . ((int)2+(int)2);
echo "Resta 2-2 " . ((int)2-(int)2);
echo "Multiplica 2*2 " . 2*2;
echo "Divide 2/2 " . 2/2;
echo "Módulo 2%2 " . 2%2;
echo "Exponencial 2**2 " . 2**2;

//Comparacion
//Igual == valor    '9'==9
//Igual === valor-tipo  9===9
//Diferencias !=, valor
//Diferencias !==, valor-tipo
//<,>,<=,>=

//Variables
$app = 'name';
$name='platzi';

echo $$app; //platzi
echo $app; //name
echo $name; //platzi