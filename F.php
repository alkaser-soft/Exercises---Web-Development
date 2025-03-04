<?php

// فتح ملف وكتابته
$file = fopen("example.txt", "w");
if ($file) {
    fwrite($file, "Hello, this is a test file.\n");
    fwrite($file, "PHP is great for file handling!\n");
    fclose($file);
}

// قراءة الملف
$file = fopen("example.txt", "r");
if ($file) {
    $content = fread($file, filesize("example.txt"));
    echo "File Content:\n" . $content;
    fclose($file);
}

// الإلحاق بالمحتوى
$file = fopen("example.txt", "a");
if ($file) {
    fwrite($file, "Adding a new line.\n");
    fclose($file);
}

// قراءة كل سطر على حدة
$file = fopen("example.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo "Line: " . $line;
    }
    fclose($file);
}

// حذف الملف
if (file_exists("example.txt")) {
    unlink("example.txt");
    echo "File deleted.";
} else {
    echo "File does not exist.";
}

?>
