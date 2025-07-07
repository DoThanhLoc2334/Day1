<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"></form>
    <div>
        <label for="inputNumbers">Input Number</label>
        <input type="text" name="inputNumber">
    </div>
    <?php
        if(isset($_POST['btnSubmit']))
        {
            $number = $_POST['numbers'];
            $list = explode(",", $numbers);
            $max = intval($list[0]);
            for($i = 1; $i < count($list); $i++)
            {
                if($max < intval($list[$i]))
                {
                    $max = intval($list[$i]);
                }
            }
        }
        echo 'Max number is: ' . $max . '';
    ?>
</body>
</html>