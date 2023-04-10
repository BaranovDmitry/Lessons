<?php
$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$age = $_POST['age'] ?? '';
$hobby = $_POST['hobby'] ?? '';
$notify = $_POST['notify'] ?? '';
$notification_channel = $_POST['way'] ?? '';
$files = $_FILES;

function handleFileErrors($error) {
    switch ($error) {
        case UPLOAD_ERR_OK:
            return "File(-s) is uploaded successfully.";
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            return "File is too large.";
        case UPLOAD_ERR_PARTIAL:
            return "File was partially uploaded.";
        case UPLOAD_ERR_NO_FILE:
            return "No file was uploaded.";
        case UPLOAD_ERR_NO_TMP_DIR:
            return "Missing temporary folder.";
        case UPLOAD_ERR_CANT_WRITE:
            return "Failed to write file to disk.";
        case UPLOAD_ERR_EXTENSION:
            return "File upload stopped by extension.";
        default:
            return "Unknown upload error.";
    }
}

foreach ($files as $file) {
    if (is_array($file['error'])) {
        foreach ($file['error'] as $error) {
            echo handleFileErrors($error) . "<br>";
        }
    } else {
        echo handleFileErrors($file['error']) . "<br>";
    }
}

function copyFile(string $dir_name, $files) {
    $path = getcwd() . '/' . $dir_name;

    if (!file_exists($path)) {
        mkdir($path);
    }

    foreach ($files as $file) {
        if (is_array($file['name'])) {
            for ($i = 0; $i < count($file['name']); $i++) {
                if ($file['error'][$i] === UPLOAD_ERR_OK) {
                    move_uploaded_file($file['tmp_name'][$i], "$dir_name/" . $file['name'][$i]);
                }
            }
        } else {
            if ($file['error'] === UPLOAD_ERR_OK) {
                move_uploaded_file($file['tmp_name'], "$dir_name/" . $file['name']);
            }
        }
    }
}

copyFile('files', $files);

$userData = [
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'mobile' => $mobile,
    'age' => $age,
    'hobby' => $hobby,
    'notify' => $notify,
    'notification_channel' => $notification_channel,
];

// Вывод массива $userData
echo '<pre>';
print_r($userData);
echo '</pre>';
