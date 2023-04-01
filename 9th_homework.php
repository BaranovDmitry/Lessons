<?php
$vacancies = [
0 => ['id' => 1, 'title' => 'PHP Programmer', 'salary' => 2500, 'sector_id' => 1],
1 => ['id' => 2, 'title' => 'Designer', 'salary' => 3000, 'sector_id' => 1],
2 => ['id' => 3, 'title' => 'Finance Manager', 'salary' => 3500, 'sector_id' => 2],
3 => ['id' => 4, 'title' => 'Finance Director', 'salary' => 3500, 'sector_id' => 2],
];

$sectors = [
0 => ['id' => 1, 'title' => 'IT'],
1 => ['id' => 2, 'title' => 'Finance']
];

$newArray = [];
foreach ($vacancies as $key => $vacancy){
    foreach ($sectors as $sector){
        if($vacancy['sector_id'] == $sector['id']){
            $vacancy['sector_name'] = $sector['title'];
            $newArray[] = $vacancy;
        }
    }
    
    //print_r($sectorId);
}
//echo '<pre>';
//print_r($newArray);
//print_r($newArray);
//echo '<pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Home work 9</title>
    
</head>
<body>
    <div>
        <h2 class="ta-center">HTML Table. Масиви</h2>
        <table cellspacing="0" class="table">
            <tbody>
            <tr>
                <th colspan="20" class="table-bordered">ID</th>
                <th colspan="20" class="table-bordered">Title</th>
                <th colspan="20" class="table-bordered">Salary</th>
                <th colspan="20" class="table-bordered">Sector ID</th>
                <th colspan="20" class="table-bordered">Sector Name</th>
            </tr>
            <?php
            for ($i = 0; $i < count($newArray); $i++) {
            ?>
                <tr>
                    <td colspan="20" class="table-bordered"> 
                        <?php echo $newArray[$i]['id'] ?> 
                    </td>
                    <td colspan="20" class="table-bordered"> 
                        <?php echo $newArray[$i]['title'] ?> 
                    </td>
                    <td colspan="20" class="table-bordered"> 
                        <?php echo $newArray[$i]['salary'] ?> 
                    </td>
                    <td colspan="20" class="table-bordered"> 
                        <?php echo $newArray[$i]['sector_id'] ?> 
                    </td>
                    <td colspan="20" class="table-bordered"> 
                        <?php echo $newArray[$i]['sector_name'] ?> 
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>



