<?php
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("⚠️ خطأ: لا يمكن القسمة على الصفر!");
    }
    return $a / $b;
}

try {
    echo "النتيجة: " . divide(10, 2) . "<br>"; // ناجحة
    echo "النتيجة: " . divide(5, 0) . "<br>"; // سيؤدي إلى استثناء
} catch (Exception $e) {
    echo "❌ حدث استثناء: " . $e->getMessage();
} finally {
    echo "<br>✅ انتهى تنفيذ البرنامج.";
}
?>
