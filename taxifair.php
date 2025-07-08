<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Fare</title>
</head>
<body>
    <h1>Calculation Taxi Fare</h1>
    <form action="" method="post">
        <div>
        <label for="kilometers">Kilometers</label>
        <input name="km" id="kilometers">
    </div>

    <div>
        <input type="submit" name="btnSend" value="Send">
    </div>
    </form>
    
    <?php
    const FIRST_LEVEL = 15000;
    const SECOND_LEVEL = 12000;
    const THIRD_LEVEL = 9000;
    const FOURTH_LEVEL = 12/100;

    $amount = 0;
    if(isset($_POST['btnSend']))
    {
        if($km <=1 )
        {
            $amount = $km * FIRST_LEVEL;
        }
    else if($km <=5)
    {
        $amount = 1 * FIRST_LEVEL + ($km - 1) * SECOND_LEVEL;
    }

    else if($km <= 140)
    {
        $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL + ($km - 5) * THIRD_LEVEL;
    }
    else
    {
        $amount = (1 * FIRST_LEVEL + 4 * SECOND_LEVEL + ($km - 5) * THIRD_LEVEL) * FOURTH_LEVEL;
    }

    $amount = number_format($amount);
    echo 'The amount customer has to pay for '. $km .'km is: '. $amount .'d';
    }
    
    
    ?>
</body>
</html>