<?php

/**
 * PHP da variables (o'zgaruvchilar) 3 ta scope (doira) ga ega:
 * 1. Local Scope (Mahalliy doira) - O'zgaruvchi faqat o'z e'lon qilingan funksiyada mavjud
 * 2. Global Scope (Global doira) - O'zgaruvchi butun skript bo'ylab mavjud, lekin funksiyalar ichida to'g'ridan-to'g'ri foydalanib bo'lmaydi
 * 3. Static Scope (Statik doira) - O'zgaruvchi faqat o'z e'lon qilingan funksiyada mavjud, lekin uning qiymati funksiyalar chaqirilganda saqlanadi
 */

// Local Scope (Mahalliy doira)
function localScopeExample() {
	$localVariable = 'I am a local variable';
	echo $localVariable . "\n"; // Bu yerda localVariable ga murojaat qilish mumkin
}

// Global Scope (Global doira)
$globalVariable = 'I am a global variable';

function globalScopeExample() {
	global $globalVariable; // global kalit so'zi yordamida global o'zgaruvchini funksiyada ishlatish mumkin
	echo $globalVariable . "\n"; // Bu yerda globalVariable ga murojaat qilish mumkin
}

// Static Scope (Statik doira)
function staticScopeExample() {
	static $staticVariable = 0; // static o'zgaruvchi e'lon qilinadi
	$staticVariable++; // static o'zgaruvchi qiymati saqlanadi va har chaqirilganda oshadi
	echo $staticVariable . "\n"; // Bu yerda staticVariable ga murojaat qilish mumkin
}

// Funksiyalarni chaqirish
localScopeExample(); // Output: I am a local variable
globalScopeExample(); // Output: I am a global variable
staticScopeExample(); // Output: 1
staticScopeExample(); // Output: 2
staticScopeExample(); // Output: 3
staticScopeExample(); // Output: 4