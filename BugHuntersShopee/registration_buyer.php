<!DOCTYPE html>
<html lang="en">
<head>
   <title>Registeration</title>
   <link rel="stylesheet" href="css2.css">
</head>
<body>
    <div class="form-container">
        <form style="font-family: Bahnschrift SemiBold;" action="reg_buyer.php" name="rgstr_buyer" class="form" method="post">
            <label for="fname">First Name</label><br>
            <input name="fname" id="first name" placeholder="Enter First Name" type="text" class="data"><br>
            <label for="lname">Last Name</label><br>
            <input name="lname" id="last name" placeholder="Enter Last Name" type="text" class="data"><br>
            <label for="email-id">Email</label><br>
            <input name="email" id="email id" placeholder="Enter Email-ID" type="email" class="data"><br>
            <label for="username">Username</label><br>
            <input name="uname" id="username" placeholder="Enter Username" type="text" class="data"><br>
            <label for="password">Password</label><br>
            <input name="pass" placeholder="Enter Password" id="password" type="password" class="data"><br>
            <label for="cnfm_password">Confirm Password</label><br>
            <input placeholder="Confirm Password" id="cnfm_password" type="password" class="data"><br>
            <button type="submit"><strong>Submit</strong></button>
        </form>
    </div>
</body>
</html>

