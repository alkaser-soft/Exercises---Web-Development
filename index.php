<?php
 //التحقق من تطابق البريد الإلكتروني

$email = "test@example.com";
if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "البريد الإلكتروني صحيح.";
} else {
    echo "البريد الإلكتروني غير صحيح.";
}

//. البحث عن الأرقام داخل النص:

$text = "My phone number is 123-456-7890.";
preg_match_all("/\d+/", $text, $matches);
print_r($matches);

// استبدال جزء من النص:

$text = "I have a cat";
$newText = preg_replace("/cat/", "dog", $text);
echo $newText;

// التحقق من تطابق النص مع الأحرف والأرقام فقط:

$string = "abc123";
if (preg_match("/^[a-zA-Z0-9]+$/", $string)) {
    echo "النص صالح.";
} else {
    echo "النص غير صالح.";
}

// استخراج الرقم بعد علامة الدولار:

$text = "The price is $150";
preg_match("/\$(\d+)/", $text, $matches);
echo "السعر هو: " . $matches[1];

// تقسيم النص باستخدام الفواصل:

$text = "apple,banana,orange";
$fruits = preg_split("/,/", $text);
print_r($fruits);

// التحقق من وجود كلمة كاملة داخل النص:

$text = "I have a dog";
if (preg_match("/\bdog\b/", $text)) {
    echo "تم العثور على الكلمة dog";
} else {
    echo "الكلمة dog غير موجودة.";
}

?>
