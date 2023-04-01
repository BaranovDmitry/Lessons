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

function copyFile(string $dir_name, $files){
    $path = getcwd().'/'.$dir_name;

    if (!file_exists($path)) {
        mkdir($path);
    }
    foreach ($files as $file){
        $sourceFile = $file['name'];
        move_uploaded_file($file['tmp_name'], "$dir_name/$sourceFile");
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
