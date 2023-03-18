<!-- WAP To calculate AVERAGE of 10 student's marks  -->

<form action="" method="GET">
    <input type="text" name="field_data">
    <input type="submit" name="submit">
</form>
<?php

$marks = [89, 67, 98, 78, 01, 91, 71, 83, 91, 81, 81];

$average = 0;
for ($i = 0; $i < count($marks); $i++) {
    # code...
    $average = $average + $marks[$i];
    // echo $average;
    // echo "</br>";
}

// echo $average / count($marks);

// echo "<pre>";
// print_r($marks);
// echo "</pre>";
// 
$val = count($marks);
$newArr = [];
for ($i = $val - 1; $i >= 0; $i--) {
    # code...
    $newArr[] = $marks[$i];
}

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";


$password = "thapa";

$str_password = password_hash($password, PASSWORD_BCRYPT);

// echo $str_password;

// echo "<br>";

$pass_check = password_verify($password, $str_password);
// echo $pass_check;
