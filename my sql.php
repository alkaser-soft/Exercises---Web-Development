<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "soha";

// إنشاء اتصال باستخدام mysqli
$conn = new mysql($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

echo "تم الاتصال بقاعدة البيانات بنجاح";

// إغلاق الاتصال
$conn->close();
?>

