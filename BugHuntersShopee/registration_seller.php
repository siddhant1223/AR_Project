<!DOCTYPE html>
<html lang="en">
<head>
   <title>Registeration</title>
   <link rel="stylesheet" href="css3.css">
</head>
<body>
    <div class="form-container">
        <form action="reg_seller.php" name="rgstr_buyer" class="form" method="post">
            <label for="org_name">Name of the Organisation</label>
            <input name="sname" type="text" id="org_name" placeholder="Organization Name" class="data"><br>
            <label for="first name">First Name</label><br>
            <input name="fname" type="text" id="first name" placeholder="Enter First Name" class="data"><br>
            <label for="Last name">Last Name</label><br>
            <input name = "lname" type="text" id="last name" placeholder="Enter Last Name" class="data"><br>
            <label for="email id">Email</label><br>
            <input name="email" type="email" name="email" id="email id" placeholder="Enter Email-ID" class="data"><br>
            <label id="username">Username</label>
            <input name="uname" id="username" placeholder="Enter Username" type="text" class="data">
            <label for="password">Password</label><br>
            <input name="pass" type="password" placeholder="Enter Password" id="password" class="data"><br>
            <label for="cnfm_password">Confirm Password</label><br>
            <input type="password" placeholder="Confirm Password" id="cnfm_password" class="data"><br>
            <label id="gstnum">Shop GST Number</label><br>
            <input name="gst" id="gstnum" placeholder="Enter Shop GST Number" type="text" class="data">
            <button type="submit"><strong>Submit</strong></button>
        </form>
    </div>
</body>
</html>

