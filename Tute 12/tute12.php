<?php include("connection.php")?>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>
            <div class="form">
                <div class="input_field">
                    <label for="">First Name: </label>
                    <input type="text" class="input" name="fname">
                </div>

                <div class="input_field">
                    <label for="">Last Name: </label>
                    <input type="text" class="input" name="lname">
                </div>

                <div class="input_field">
                    <label for="">Username: </label>
                    <input type="text" class="input" name="uname">
                </div>

                <div class="input_field">
                    <label for="">Password: </label>
                    <input type="password" class="input" name="password">
                </div>

                <div class="input_field">
                    <label for="">Gender: </label>
                    <input type="radio" class="input" name="gender" value="M">Male
                    &nbsp
                    <input type="radio" class="input" name="gender" value="F" >Female
                </div>

                <div class="input_field">
                    <label for="">Academic Year: </label>
                    <select class="selectbox" name="ayear">
                        <option value="first_yr">1st Year</option>
                        <option value="second_yr">2nd Year</option>
                        <option value="third_yr">3rd Year</option>
                        <option value="fourth_yr">4th Year</option>
                    </select>
                </div>

                <div class="input_field">
                    <label for="">Email : </label>
                    <input type="text" class="input" name="email">
                </div>

                <div class="input_field">
                    <label for="">Phone No: </label>
                    <input type="text" class="input" name="phone">
                </div>

                <div class="input_field">
                    <label for=""></label>
                    <input type="submit" class="btn" value="Submit" name="register">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if($_POST['register'])
    {
        $fname  = $_POST['fname'];
        $lname  = $_POST['lname'];
        $uname  = $_POST['uname'];
        $pwd    = $_POST['password'];
        $gender = $_POST['gender'];
        $acyear = $_POST['ayear'];
        $email  = $_POST['email'];
        $phone  = $_POST['phone'];

        if($fname != "" && $lname != "" && $uname != "" && $pwd != "" && $gender != "" && $acyear != "" && $email != "" && $phone != "")
        {

        $query = "INSERT INTO FORM VALUES('$fname','$lname','$uname','$pwd','$gender','$acyear','$email','$phone')";
        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "Data Inserted into Database";
        }
        else
        {
            echo "Failed";
        }
    }
    else
    {
        echo "Please fill the form";
    }
    }
?>