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

// Objects in PHP

class mobile
{

    public $model;

    function showModel()
    {
        echo "<br>Model No :$this->model";
    }
}

// -> is used to access class member using obj
$samsung = new mobile;
$samsung->model = 'a8';
$samsung->showModel();




<html>

<head>
    <!-- <link rel="stylesheet" media="all" href="/style.css" /> -->
    <link rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" />
    <!-- <script src="/validation.js" async defer crossorigin="anonymous"></script> -->
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Javascript Validation Form</h2>
        </div>
        <!-- <form id="form" class="form">
            <div class="form-control">
                <input type="text" placeholder="username" id="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input type="email" placeholder="Email" id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input type="password" placeholder="Password" id="password" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <input type="password" placeholder="Confirm Password" id="cnfpassword" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button id="submit">Submit</button>
        </form> -->

        <button id="fetch-btn">Fetch data</button>
        <button id="backup-btn">backup data</button>

    </div>

    <script src="ajax.js"></script>
</body>

</html>


<?php

$format = "";
echo  "toady is " . date("dS") . "<br>";
echo "month is " . date('F') . "<br>";
echo "month is " . date('M') . "<br>";

echo "date is " . date('d/M/Y') . "<br>";

echo "Week day" . date('D') . "<br>";


$name = "John";
echo "Hello, $name!";

$name = "John";
echo 'Hello, $name!';



function isPrime($num)
{
    // check if the number is less than 2
    if ($num < 2) {
        return false;
    }
    // loop through all numbers from 2 to sqrt($num)
    for ($i = 2; $i <= sqrt($num); $i++) {
        // if $num is divisible by $i, it's not a prime number
        if ($num % $i == 0) {
            return false;
        }
    }
    // if the loop completes, $num is a prime number
    return true;
}

// find all prime numbers between 1 and 100
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo "<br>" . $i . " ";
    }
}
?>
