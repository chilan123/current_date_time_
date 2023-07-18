<!DOCTYPE html>
<html>
<head>
    <title>Current Date and Time - Sri Lanka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        h1 {
            color: #007bff;
        }
        p {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Current Date and Time (Sri Lanka)</h1>
    <?php
    // Set the timezone to Sri Lanka
    date_default_timezone_set('Asia/Colombo');

    // Get the current date and time in Sri Lanka timezone
    $currentDate = date("F j, Y");
    $currentTime = date("h:i A");
    ?>
    <p><?php echo "Today is " . $currentDate . " and the time is " . $currentTime; ?></p>
</body>
</html>
