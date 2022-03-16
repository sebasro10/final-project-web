<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="center">
        <div class="container">
            <div class="closebtn">
                <a href="../index.php">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>

            </div>

            <div class="text"> Sign up Form</div>
            <form action="">
                <div class="data">
                    <label for="lastName">LastName</label>
                    <input type="text" required>
                </div>
                <div class="data">
                    <label for="Name">Name</label>
                    <input type="text" required>
                </div>
                <div class="data">
                    <label for="emailAddress">Email Address</label>
                    <input type="text" required>
                </div>
                <div class="data">
                    <label for="Confirm_email">Confirm email</label>
                    <input type="text" required>
                </div>
                <div class="data">
                    <label for="phoneNumber">Phone number</label>
                    <input type="text" required>
                </div>
                <div class="data">
                    <label for="services">Services</label>
                    <input type="text" value="to modify-> spinner">
                </div>
                <div class="data">
                    <label for="password">Password</label>
                    <input type="password" required>
                </div>
                <div class="data">
                    <label for="cPassword">Confirm Password</label>
                    <input type="password" required>
                </div>

                <div class="btn">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>