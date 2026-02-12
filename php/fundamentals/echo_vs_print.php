<?php

/**
 * PHP da matnni ekranga chiqarish uchun echo va print funksiyalaridan foydalaniladi. Ikkalasi ham matnni ekranga chiqarish uchun ishlatiladi, lekin ularning o'ziga xos farqlari mavjud:
 * * 1. Echo: Echo bir nechta argumentni qabul qilishi mumkin va ularni birgalikda ekranga chiqaradi. Echo tezroq ishlaydi, chunki u qiymat qaytarmaydi.
 * * 2. Print: Print faqat bitta argumentni qabul qiladi va u qiymat qaytaradi (har doim 1). Print biroz sekinroq ishlaydi, chunki u qiymat qaytaradi.
 */

// Echo misoli
echo "Hello, World!\n"; // Echo bir nechta argumentni qabul qilishi mumkin
echo "The sum of 2 and 3 is: ", 2 + 3; // Echo bir nechta argumentni qabul qilishi mumkin

// Print misoli
print "\nHello, World!"; // Print faqat bitta argumentni qabul qiladi
$result = print "\nThe sum of 2 and 3 is: " . (2 + 3); // Print faqat bitta argumentni qabul qiladi
print "\nPrint returned: " . $result; // Print har doim 1 qaytaradi, shuning uchun $result 1 bo'ladi

$a = 5;
$b = 10;
$c = $a + $b;

# print $a, $b, $c; // Print faqat bitta argumentni qabul qiladi, shuning uchun bu xato bo'ladi
echo "\n$a, $b, $c"; // Echo bir nechta argumentni qabul qilishi mumkin, shuning uchun bu to'g'ri ishlaydi
