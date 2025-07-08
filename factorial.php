<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Factorial</title>
</head>
<body>
    <?php
    function factorial($n)
    {
        if($n ==0) 
        {
            return 1;
        }
        return $n * (factorial($n - 1));
    }
    if(isset($_POST['btnSend']))
    {
        $n = $_POST['n'];
        $result = 1;
        for($i = $n; $i >= 1; $i--)
        {
            $result *= $i;
        }
    }

    ?>
</body>
</html>