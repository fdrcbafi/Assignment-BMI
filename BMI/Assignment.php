<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .user-info {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .bmi-info {
            background-color: #e6f7ff;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="user-info">
        <?php
            $name = "Cadayona, Kester Lance R."; 
            $age = 21;
            $address = "Manila, Philippines";
            $contactNumber = "09236004061";
            $birthdate = "2002-04-12";
            $gender = "Male";
            $bloodtype = "N/A";

            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "<p><strong>Contact Number:</strong> $contactNumber</p>";
            echo "<p><strong>Birthdate:</strong> $birthdate</p>";
            echo "<p><strong>Gender:</strong> $gender</p>";
            echo "<p><strong>Blood Type:</strong> $bloodtype</p>";
        ?>
    </div>

    <div class="bmi-info">
        <?php
            function calculateBMI($weight, $height) {
                $heightInMeters = $height / 100;
                $bmi = $weight / ($heightInMeters * $heightInMeters);
                return $bmi;
            }

            $weight = 75; 
            $height = 175; 

            $result = calculateBMI($weight, $height);
            echo "<p><strong>BMI:</strong> " . number_format($result, 2) . "</p>";
        ?>
    </div>

</body>
</html>