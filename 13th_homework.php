<?php
require_once './func/functions.php';

session_start();
getMessage('warning');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
</head>
<body>

<div class="">
    <div class="row position-absolute top-50 start-50 translate-middle">
        <div class="col-sm-10">
            <form action="controllers/registration.php" method="post" >
                <h1 class="fs">Registration</h1>
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label ps-1">Full Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter your full name">
                </div>
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label ps-1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter your email">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label ps-1">Password</label>
                    <input type="password" name="email" class="form-control" id="exampleInputPassword1" 
                    placeholder="Password">
                </div>
                <div class="mb-1">
                    <label for="exampleInputPassword1" class="form-label ps-1">Confirm Password</label>
                    <input type="password_confirm" name="password_confirm" class="form-control"
                           id="exampleInputPassword1" placeholder="Confirm your password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>