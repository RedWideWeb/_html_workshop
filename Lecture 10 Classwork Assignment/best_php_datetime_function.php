<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Best PHP Form</title>
</head>
<body>
<?php
$date = new DateTime();
$result = $date->format('Y-m-d H:i:s');
echo $result
?>
</body>
</html>