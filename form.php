<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Student Registration</title>
    <style>
        body{
        background-image: url("pexels-photo-2559941.jpeg");
        background-repeat: no-repeat;
        background-size: 110% 110%;}
    </style>
</head>
<body>




    <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>

                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>

                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="pass" required>
                </div>

                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" class="input" name="conpass" required>
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <select class="selectbox" name="gender" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option>Other</option>
                    </select>
                </div>


                <div class="input_field">
                    <label>Email Address</label>
                    <input type="email" class="input" name="email" required>
                </div>


                <div class="input_field">
                    <label>Phone No</label>
                    <input type="text" class="input" name="phone" required>
                </div>

                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address" required></textarea>
                </div>


                <div class="input_field terms">
                    <label class="check">
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to terms and conditions</p>
                </div>


                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name ="register"> 
                </div>
            </div>
        </form>

    </div>

</body>
</html>





<?php
    if(isset($_POST['register']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['pass'];
        $conpass = $_POST['conpass'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];


        if($fname !="" && $lname !="" && $pass !="" && $conpass !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
        {

            $query =  "INSERT INTO form_details values('$fname','$lname','$pass','$conpass','$gender','$email','$phone','$address')";
            $data = mysqli_query($conn,$query);

            if($data)
            {
                    echo "<script>alert('Data Inserted');</script>";
            }

            else
            {
                    echo "<script>alert('Failed');</script>";
            }
        }

        else
        {
            echo "<script>alert('Fill the form fully');</script>";
        }
    }
?>