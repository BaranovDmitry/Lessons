<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>My Header</title>
</head>
<body>
<form action="data.php" method="post" enctype="multipart/form-data" class="width-full">
    <table class="table">
        <tbody>
        <tr>
            <th colspan="100">
                <h1 style="text-transform: uppercase">
                    Fill up your information
                </h1>
            </th>
        </tr>
        <tr>
            <td colspan="50">
                <div>
                    <div class="label">
                        <label for="first_name">Enter Your First Name</label>
                    </div>
                    <div class="value">
                        <input type="text" name="first_name" class="c-gray">
                    </div>
                    <div class="label">
                        <label for="email">Enter Your Email</label>
                    </div>
                    <div class="value">
                        <input type="text" name="email" class="c-gray">
                    </div>
                    <div class="label">
                        <label for="age">Enter Your Age</label>
                    </div>
                    <div class="value">
                        <input type="text" name="age" class="c-gray">
                    </div>
                </div>
            </td>
            <td colspan="50">
                <div>
                    <div class="label">
                        <label for="last_name" >Enter Your Last Name</label>
                    </div>
                    <div class="value">
                        <input type="text" name="last_name" class="c-gray">
                    </div>
                    <div class="label">
                        <label for="mobile">Enter Your Phone</label>
                    </div>
                    <div class="value">
                        <input type="text" name="mobile" class="c-gray">
                    </div>
                    <div class="label">
                        <label for="hobby">Enter Your Hobby</label>
                    </div>
                    <div class="value">
                        <input type="text" name="hobby" class="c-gray">
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="100">
                <div class="c-gray">
                    <input type="file" value="attachment" name="files" formenctype="multipart/form-data">
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="50">
                <div class="value c-gray">
                    <input type="checkbox" name="notify">
                    <label for="notify">Notify</label>
                </div>
            </td>
            <td colspan="50">
                <div class="value c-gray">
                    <input type="radio" name="way" value="mail">
                    <label for="mail">Email</label>
                    <input type="radio" name="way" value="sms">
                    <label for="sms">SMS</label>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="100" class="ta-center">
                <input type="submit" value="Confirm" style="background-color: #a4c3b7">
            </td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>
