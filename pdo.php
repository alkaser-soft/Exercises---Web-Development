<?php
$localhost = "localhost";
$dbname = "soha";
$usernameDB = "root";
$passwordDB = "";

try {
    // إنشاء اتصال باستخدام PDO
    $dsn = "mysql:host=$localhost;dbname=$dbname";
    $conn = new PDO($dsn, $usernameDB, $passwordDB);

    // تعيين وضع الخطأ إلى الاستثناءات
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "تم الاتصال بنجاح";
} catch (Exception $e) {
    echo "فشل الاتصال: " . $e->getMessage();
}
?>