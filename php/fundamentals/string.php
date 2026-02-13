<?php

/**
 * PHP da string functions odatda matnni manipulyatsiya qilish, qidirish, almashtirish va formatlash uchun ishlatiladi. Quyida ba'zi asosiy string funksiyalarining misollari keltirilgan:
 * strlen() - String uzunligini aniqlash
 * strpos() - String ichida qidirish
 * str_replace() - String ichida almashtirish
 * substr() - Stringning bir qismini olish
 * strtolower() - Stringni kichik harflarga aylantirish
 * strtoupper() - Stringni katta harflarga aylantirish
 * trim() - Stringning boshidagi va oxiridagi bo'sh joylarni olib tashlash
 * explode() - Stringni bo'laklarga ajratish
 * implode() - Array elementlarini stringga birlashtirish
 * sprintf() - String formatlash
 * strrev() - Stringni teskari qilish
 * str_repeat() - Stringni takrorlash
 * str_shuffle() - Stringni aralashtirish
 * str_split() - Stringni belgilangan uzunlikdagi bo'laklarga ajratish
 * str_pad() - Stringni belgilangan uzunlikka to'ldirish
 * str_word_count() - Stringdagi so'zlar sonini hisoblash
 * strcasecmp() - Stringlarni taqqoslash (kattalikni e'tibor qilmasdan)
 * strncmp() - Stringlarni taqqoslash (belgilangan uzunlikda)
 * str_contains() - String ichida belgilangan substring mavjudligini tekshirish
 * str_starts_with() - String belgilangan substring bilan boshlanadimi tekshirish
 * str_ends_with() - String belgilangan substring bilan tugaydimi tekshirish
 * str_ireplace() - String ichida belgilangan substringni almashtirish (kattalikni e'tibor qilmasdan)
 * strtr() - String ichida belgilangan substringlarni almashtirish (bir nechta substringni bir vaqtning o'zida almashtirish)
 */

$string = "Hello, World!";

// String uzunligini aniqlash
echo strlen($string) . "\n"; // 13
echo strpos($string, '0') . "\n"; // 4
echo str_replace('World', 'Sobirjon', $string) . "\n"; // Hello, Sobirjon!
echo substr($string, 3, 7) . "\n"; // lo, Wor
echo strtolower($string) . "\n"; // hello, world!
echo strtoupper($string) . "\n"; // HELLO, WORLD!
echo trim("   Hello, World!   ") . "\n"; // Hello, World!
print_r(explode(', ', $string)); // Array ( [0] => Hello [1] => World! )
echo implode(' - ', ['Hello', 'World']) . "\n"; // Hello - World
echo sprintf("The string is: %s", $string) . "\n"; // The string is: Hello, World!
echo strrev($string) . "\n"; // !dlroW ,olleH
echo str_repeat($string, 2) . "\n"; // Hello, World!Hello, World!
echo str_shuffle($string) . "\n"; // Randomly shuffled string
print_r(str_split($string, 5)); // Array ( [0] => Hello [1] => , Wor [2] => ld! )
echo str_pad($string, 20, "*") . "\n"; // Hello, World!*******
echo str_word_count($string) . "\n";
echo strcasecmp("hello, world!", $string) . "\n"; // 0 (taqqoslash natijasi)
echo strncmp("Hello, World!", $string, 5) . "\n"; //
echo str_contains($string, 'World') ? 'Yes' : 'No' . "\n"; // Yes
echo str_starts_with($string, 'Hello') ? 'Yes' : 'No' . "\n"; // Yes
echo str_ends_with($string, 'World!') ? 'Yes' : 'No' . "\n"; // Yes
echo str_ireplace('Hello', 'World!', $string) . "\n"; // World!, World!
echo strtr($string, ['Hello' => 'Hi', 'World' => 'Everyone']) . "\n"; // Hi, Everyone!
