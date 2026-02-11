<?php

/**
 * php da o'zgaruvchilarni $ yordamida e'lon qilamiz. O'zgaruvchi nomi harf, raqam va pastki chiziq (_) dan iborat
 * bo'lishi mumkin, lekin raqam bilan boshlanmasligi kerak.
 * O'zgaruvchi nomlari katta-kichik harflarga sezgir (case-sensitive) hisoblanadi.
 */

$word = 'Hello, World!'; // string
$number = 42; // integer
$pi = 3.14; // float
$isTrue = true; // boolean
$array = [1, 2, 3, 4, 5]; // array
$object = (object) ['name' => 'John', 'age' => 30]; // object
$nullValue = null; // null
$resource = fopen('file.txt', 'r'); // resource
$mixed = 'This can be any type'; // mixed

var_dump($word);
var_dump($number);
var_dump($pi);
var_dump($isTrue);
var_dump($array);
var_dump($object);
var_dump($nullValue);
var_dump($resource);
var_dump($mixed);


/**
 * O'zgaruvchilarni e'lon qilishda, ular avtomatik ravishda ma'lumot turini aniqlaydi. PHP dinamik tipga ega bo'lgan
 * til bo'lib, o'zgaruvchilarni e'lon qilishda ma'lumot turini ko'rsatish shart emas. O'zgaruchining type'ini aniqlash
 * uchun var_dump() funksiyasidan foydalanish mumkin. PHP da asosiy ma'lumot turlari quyidagilardir:
 * string (text values)
 * int (whole numbers)
 * float (decimal numbers)
 * bool (true or false)
 * array (multiple values)
 * object (stores data as objects)
 * null (empty variable)
 * resource (references external resources)
 * mixed (any value)
 */