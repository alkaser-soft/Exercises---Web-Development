<?php

// __construct: الدالة السحرية للبناء
class MyClass {
    public function __construct($name) {
        echo "Constructor called with name: " . $name . "\n";
    }

    // __destruct: الدالة السحرية للتدمير
    public function __destruct() {
        echo "Destructor called\n";
    }

    // __get: الدالة السحرية للحصول على خاصية غير موجودة
    private $property = "Secret";
    public function __get($name) {
        echo "Trying to get the property: " . $name . "\n";
        return $this->property;
    }

    // __set: الدالة السحرية لتعيين قيمة خاصية غير موجودة
    public function __set($name, $value) {
        echo "Setting the property: " . $name . " to value: " . $value . "\n";
    }

    // __call: الدالة السحرية لاستدعاء دالة غير موجودة
    public function __call($name, $arguments) {
        echo "Calling method: " . $name . " with arguments: " . implode(", ", $arguments) . "\n";
    }

    // __toString: الدالة السحرية لتحويل الكائن إلى نص
    public function __toString() {
        return "MyClass Object";
    }
}

// استخدام الدوال السحرية
$obj = new MyClass("Test");

echo $obj; // __toString

$obj->unknownMethod("arg1", "arg2"); // __call

echo $obj->property; // __get

$obj->property = "New Value"; // __set

unset($obj); // __destruct
?>



