<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Age</title>
</head>

<?php
    $myYear = 2004;
    $currentYear = date('Y');
    $myAge = $currentYear - $myYear;
    echo 'My age is:' . $myAge. 'year old'; 
?>
<body>
    <form action="" method="post"></form>
    <div>
        <label for="BirthYear">Birth Year</label>
        <input type="text" name="birthYear">
    </div>

    <div>
        <label for="CurrentYear">Current Year</label>
        <input type="text" name="currentYear">
    </div>
</body>
</html>