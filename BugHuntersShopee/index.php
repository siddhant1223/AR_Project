<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login to BugHunter Shoppee</title>
        <link rel="stylesheet" href="css1.css">
    </head>
    <body>
        <div class="grid-container">
            <div class="seller">
                <h1 id="sell">For Seller</h1>
                <form action="login.php" name="Form1" class="F_seller" method="post">
                    <label id="username">Username</label><br>
                    <input name="uname" type="text" placeholder="Enter Username" id="username"><br>
                    <label id="password">Password</label><br>
                    <input name="pass" type="password" placeholder="Enter Password" id="password"><br>
                    <input type = "hidden" name="usertype" value="users_sellers" id="utype">
                    <button type="submit"><strong>Login</strong></button>
                    <p id="SellText">New to BugHunter?</p>
                    <a href="registration_seller.php">Register</a>
                </form>
            </div>
            <div class="buyer">
                <h1 id="buy">For Buyer</h1>
                <form action="login.php" name="Form2" class="F_buyer" method="post">
                    <label id="username">Username</title><br>
                    <input name="uname" type="text" placeholder="Enter Username" id="username"><br>
                    <label id="password">Password</title><br>
                    <input name="pass" type="password" placeholder="Enter Password" id="password"><br>
                    <input type = "hidden" name="usertype" value="users_buyers" id="utype">
                    <button type="submit"><strong>Login</strong></button>
                    <p id="BuyText">New to BugHunter?</p>
                    <a href="registration_buyer.php">Register</a>
                </form>
            </div>
        </div>
    </body>
</html>