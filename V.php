<?php

class MyClass {
    private $value;

    // الدالة لضبط القيمة
    public function setValue($value) {
        $this->value = $value;
    }

    // الدالة لاسترجاع القيمة
    public function getValue() {
        return $this->value;
    }
}

// إنشاء الكائن
$obj = new MyClass();

// تعيين قيمة
$obj->setValue("2004");

// استرجاع القيمة
echo $obj->getValue(); // سيتم طباعة "2004"

?>