<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            <form action="" method="post">
        <div> 
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="btnLogin">
        </div>
        </form>
            </div>
        </div>
    </div>
    <h1>Login
        <?php
        if(isset($_POST['btnLogin']))
        {
            $u = $_POST["username"];
            $p = $_POST["password"];
            if($u == 'Hutech' && $p = '123')
            {
                echo '<h2>Welcome' . $u . '</h2>';
            }else
            {
                echo '<h2 style="color:red;">Invalid username or password</h2>';
            }
        }
        ?>

        
        
        
    </h1>
</body>
</html>