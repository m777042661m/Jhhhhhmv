<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (isset($input['phoneNumber'])) {
    $phoneNumber = $input['phoneNumber'];
    // هنا يمكنك حفظ رقم الهاتف في قاعدة البيانات الخاصة بك.
    // في الوقت الحالي، سنقوم فقط بإرجاع رسالة نجاح.

    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'لم يتم توفير رقم الهاتف']);
}
?>