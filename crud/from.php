<?php
    include("connection.php");
    error_reporting (0);
?>
<html>
<hade>
    <meta charset = "utf-8">
    <meta name="viewport" content="widdth=device-width , initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> PHP CRUD Operations</title>

</head>


<body>
        <div class="container">
            <form action="#" method="POST">
            <div class="title">     
                    Registration Form
            </div>
         <div class="from">
             <div class="input_field">
                <label> First Nmae </label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label> Last Nmae </label>
                <input type="text" class="input" name="lname" required>
            </div>

            <div class="input_field">
                <label> Password </label>
                <input type="password" class="input" name="password" required>
            </div>
            
            <div class="input_field">
                <label> Conform password </label>
                <input type="password" class="input" name="conpassword" required>
            </div>
            
            <div class="input_field">
                <label> Gender </label>
                <div class="custom_select">
                <select name="gender" required>
                    <option value=""> Select </option>
                    <option value="male"> Male </option>
                    <option value="female"> Female </option>
                 </select>
                </div>
            </div>
            
            <div class="input_field">
                <label> Email </label>
                <input type="text" class="input" name="email" required>
            </div>
            
            <div class="input_field">
                <label> Phone number </label>
                <input type="text" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label style="margin-right: 15px;"> Caste </label>
                <input type="radio" name="r1" value="Genral" required><lable style="margin-left: 5px;">General</lable>
                <input type="radio" name="r1" value="ST" required><lable style="margin-left: 5px;">ST</lable>
                <input type="radio" name="r1" value="OBC" required><lable style="margin-left: 5px;">OBC</lable>
                <input type="radio" name="r1" value="SC" required><lable style="margin-left: 5px;">SC</lable>
            </div>
            
            <div class="input_field">
                <label> Address </label>
                <textarea class="textarea" name="address" required></textarea>
            </div>
            
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p> Agree to terms and conditions </p>          
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
           
        </div>
</form>
        </div>


</body>


</html>

<?php
    if($_POST['register'])
    {
        $fname   = $_POST['fname'];
        $lname   = $_POST['lname'];
        $pwd     = $_POST['password'];
        $cpwd    = $_POST['conpassword'];
        $gender  = $_POST['gender'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $Caste   = $_POST['r1'];
        $address = $_POST['address'];


            
        $query = "INSERT INTO darshit (fname,lname,password,conpassword,gender,email,phone,caste,addres) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$Caste','$address')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "data inserted into database";
        }
        else
        {
            echo "failed";
        }
    }

?>
