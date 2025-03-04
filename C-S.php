<?php

class Test {
    // تعريف ثابت باستخدام const
    const PI = 3.14;

    // تعريف متغير static
    public static $counter = 0;

    // دالة لزيادة المتغير static
    public function incrementCounter() {
        self::$counter++; // تعديل قيمة المتغير static
        echo "Static Counter: " . self::$counter . "\n";
    }

    // دالة لعرض الثابت
    public function showConstant() {
        echo "Constant PI: " . self::PI . "\n"; // الوصول إلى الثابت
    }
}

// الوصول إلى الثابت مباشرة دون الحاجة لإنشاء كائن
echo "Accessing constant directly: " . Test::PI . "\n";

// استخدام المتغير static داخل الكائن
$test1 = new Test();
$test1->incrementCounter(); // Static Counter: 1
$test1->incrementCounter(); // Static Counter: 2

// استخدام الكائن الثاني، ستلاحظ أن المتغير static مشترك بين الكائنات
$test2 = new Test();
$test2->incrementCounter(); // Static Counter: 3

// عرض القيمة الثابتة عبر الدالة
$test2->showConstant();

?>