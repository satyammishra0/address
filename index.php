<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <style>
        .error {
            color: #d62e74;
        }

        .success-message {
            color: #00a67d;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <!-- main login form here  -->
        <form method="POST" enctype="multipart/form-data" action="validate_form.php">
            <label for="fatherName">Father Name:</label>
            <input type="text" name="fatherName" id="fatherName"><br>
            <label for="motherName">Mother Name:</label>
            <input type="text" name="motherName" id="motherName"><br>
            <label for="childName">Child Name:</label>
            <input type="text" name="childName" id="childName"><br>
            <label for="childImage">Child Image:</label>
            <input type="file" name="childImage" id="childImage"><br>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>


    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = "SELECT childer.p_id, parent.father, parent.mother,childer.child FROM `childer` LEFT JOIN `parent` on `childer`.`p_id`=`parent`.`id`;";

    $runQuery = mysqli_query($conn, $query);
    $result = mysqli_num_rows($runQuery);
    $row = mysqli_fetch_assoc($runQuery);
    for ($i = 0; $i < $result; $i++) {
        # code...
        print_r($result);

    ?>

        <table>
            <thead>
                <tr>
                    <th>Serial</th>
                    <th>father</th>
                    <th>mother</th>
                    <th>child</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $row['p_id'] ?></td>
                    <td><?= $row['father'] ?></td>
                    <td><?= $row['mother'] ?></td>
                    <td><?= $row['child'] ?></td>
                </tr>
            </tbody>
        </table>

    <?php
    }
    ?>
</body>

</html>