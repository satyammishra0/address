<!-- WAP To calculate AVERAGE of 10 student's marks  -->


<?php

$marks = [89, 67, 98, 78, 01, 91, 71, 83, 91, 81, 81];

$average = 0;
for ($i = 0; $i < count($marks); $i++) {
    # code...
    $average = $average + $marks[$i];
    echo $average;
    echo "</br>";
}

// echo $average / count($marks);

echo "<pre>";
// print_r($marks);
echo "</pre>";
// 
$val = count($marks);
$newArr = [];
for ($i = $val - 1; $i >= 0; $i--) {
    # code...
    $newArr[] = $marks[$i];
}

echo "<pre>";
// print_r($newArr);
echo "</pre>";


// Password Encryptions
$password = "thapa";

$str_password = password_hash($password, PASSWORD_BCRYPT);

// echo $str_password;

echo "<br>";

$pass_check = password_verify($password, $str_password);
// echo $pass_check;

// CURL Opearation

?>
<form action="" method="GET">
    <input type="text" name="country">
    <input type="submit" name="submit">
</form>
<?php

$country = $_GET['country'];

if (!isset($country)) {
    $country = 'india';
}

$curl = curl_init(); //Intialiaze the curl operation

curl_setopt_array($curl, [
    CURLOPT_URL => "https://get-population.p.rapidapi.com/population/country?country=" . $country,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: get-population.p.rapidapi.com",
        "X-RapidAPI-Key: fa82bd94d4msh7b2d2a97a2125c4p1b6a4cjsnb0485b6c575e"
    ],
]);


$res = json_decode(curl_exec($curl));

echo "<br><br> ==========================================  <br><br>";




echo "<pre>";
print_r($res);
echo "</pre>";

echo "Current population of " . $country . " is " .  $res->count;

curl_close($curl);


echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
