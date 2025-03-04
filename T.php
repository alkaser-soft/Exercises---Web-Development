
<?php
// تحديد المنطقة الزمنية الافتراضية

date_default_timezone_set('Asia/Riyadh');

// دالة للحصول على التاريخ الحالي
function getCurrentDate() {
    return date('Y-m-d'); // التنسيق: سنة-شهر-يوم
}

// دالة للحصول على الوقت الحالي
function getCurrentTime() {
    return date('H:i:s'); // التنسيق: ساعة:دقيقة:ثانية
}

// دالة للحصول على التاريخ والوقت الحالي
function getCurrentDateTime() {
    return date('Y-m-d H:i:s'); // التنسيق: سنة-شهر-يوم ساعة:دقيقة:ثانية
}

// دالة لحساب الفرق بين تاريخين (بالأيام)
function dateDifference($startDate, $endDate) {
    $start = strtotime($startDate);
    $end = strtotime($endDate);
    $diff = abs($end - $start);
    return floor($diff / (60 * 60 * 24)); // الفرق بالأيام
}

// دالة لإضافة أيام إلى تاريخ معين
function addDaysToDate($date, $days) {
    return date('Y-m-d', strtotime("$date +$days days"));
}

// دالة لطرح أيام من تاريخ معين
function subtractDaysFromDate($date, $days) {
    return date('Y-m-d', strtotime("$date -$days days"));
}

// أمثلة على الاستخدام
echo "التاريخ الحالي: " . getCurrentDate() . "<br>";
echo "الوقت الحالي: " . getCurrentTime() . "<br>";
echo "التاريخ والوقت الحالي: " . getCurrentDateTime() . "<br>";

$start = "2025-01-01";
$end = "2025-01-22";
echo "الفرق بين $start و $end بالأيام: " . dateDifference($start, $end) . " يوم<br>";

$date = "2025-01-22";
echo "إضافة 10 أيام إلى $date: " . addDaysToDate($date, 10) . "<br>";
echo "طرح 5 أيام من $date: " . subtractDaysFromDate($date, 5) . "<br>";
?>