<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>

<body>


    <div class="wrapper">
        <div class="container">
            <form action="../controller/signup.php" method="post">
                <h1>User signup</h1>

                <label>Full name:</label> <br>
                <input type="text" name="fullname" id="fullname" placeholder="fullname">

                <label>User name:</label> <br>
                <input type="text" name="username" id="username" placeholder="username">



                <label>Password:</label> <br>
                <input type="text" name="password" id="password" placeholder="password">
                <label>Re-password:</label> <br>

                <input type="text" name="repassword" id="repassword" placeholder="re-password">


                <input type="submit" value="Signup" name="save">

            </form>

        </div>
    </div>
</body>

</html>