<?php
if (isset($_POST['submit'])) {
    $fatherName = $_POST['fatherName'];
    $motherName = $_POST['motherName'];
    $childName = $_POST['childName'];
    $childImg = $_FILES['childImage'];

    $imageName = $childImg['name'];
    $imagePath = $childImg['tmp_name'];
    $fileError = $childImg['error'];


    $destFile = 'uploads/' . $imageName;
    move_uploaded_file($imagePath, $destFile);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($conn) {
        $final_error = "Couldn't Connect to DB";

        // header('location:index.php?final_error=' . $final_error);
    }

    // // Insert data into the database
    $insertsql = "INSERT INTO `parent` (`id`, `father`, `mother`, `add_on`) VALUES ('$fatherName', '$motherName', '');";

    $sql = "SELECT `id` FROM parent where `mother`= '$motherName' && `father`='$fatherName';";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    echo $count;
    if ($count > 0) {
        // output data of each row
        $newId = mysqli_fetch_assoc($result);
        $p_id = $newId['id'];
    } else {
        $p_id = 1;
    }

    $sql2 = "INSERT INTO `childer` (`p_id`, `child`, `child_img`) VALUES ($p_id, '$childName', '$destFile');";
    $sql_result = mysqli_query($conn, $sql2);
    if ($sql_result) {
        echo "success";
    } else {
        echo false;
    }
}
