<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <img src="img/stand.jpg" alt="">


    <div class="card">
        <div class="container">
            <div>
                <p class="size">Create an<br> Account</p>
                <p>Lorem ipsum dolor sit.</p>
                <form action="insert.php" method="post" class="regs">
                    <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
            <p>
                <label for="password"> Password:</label>
                <input type="Password" name="pas" id="Passw1">
            </p>
            <p>
                <label for="password"> Password Retype:</label>
                <input type="Password" name="pass" id="Passw2">
            </p>
             <label>
                   <input type="checkbox"> You agree to our terms of service and privacy policy
            </label>
            <br>
            <p><button type="submit" placeholder="Register">Register</button></p>

                    



                </form>
            </div>

        </div>
    </div>

</body>

</html>