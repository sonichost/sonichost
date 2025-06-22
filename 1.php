<?php
// ملف تجريبي للاستقبال فقط، يرد بكلمة OK
header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // لو عايز تطبع البيانات المرسلة:
    // print_r($_POST);

    // رد بسيط بالنجاح
    echo "OK";
} else {
    // لو حد فتح الرابط في المتصفح أو GET
    echo "Waiting for POST";
}
?>