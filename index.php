<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset "UTF-8">
        <title>Registartion Form</title>
        <style>
            form{text-align: center; background-color: #fc766aff;}
        </style>
        <script type="text/javascript">
        function validate(){
            if (document.myform.fname.value == ""|| !isNaN(document.myform.fname.value)){
                alert("Please Make Sure the First Name is Correct");
                document.myform.fname.focus();
                return false;
            }if (document.myform.lname.value == ""|| !isNaN(document.myform.lname.value)){
                alert("Please Make Sure the Last Name is Correct");
                document.myform.lname.focus();
                return false;
            }if (document.myform.age.value == ""|| isNaN(document.myform.age.value)){
                alert("Please Make Sure the Age is Correct");
                document.myform.age.focus();
                return false;
            }
            var emailid = document.myform.email.value;
            posat = emailid.indexOf("@")
            posdot = emailid.lastIndexOf(".")
            if (posat < 1 || posdot-posat < 2 ){
                alert("Please Make Sure the E-Mail is Correct");
                document.myform.email.focus();
                return false;
            }
            if (document.myform.password.length < 6){
                alert("Please Make Sure the Password is Long");
                document.myform.password.focus();
                return false;
            }
        }
        </script>
    </head>
<body style="background-color: #5b84b1ff;" >
    <form name = "myform" onsubmit="return(validate())" action="signup.inc.php" method="POST">
        <h1><strong><u>Registartion Form</u></strong></h1>
        <p>First Name:<input type="text" name="fname"></p>
        <p>Last Name:<input type="text" name="lname"></p>
        <p>Age:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="age"></p>
        <p>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="email"></p>
        <p>Password:&nbsp&nbsp<input type="text" name="password"></p>
        <p>SEX:: <input type="radio" name="gender">Male<input type="radio" name="gender">Female</p>
        <p>Checkbox: <input type="checkbox" name="student">I am a student<input type="checkbox" name="business">
            I am a Business Man</p>
        <p>Birthday:</p>
        <p>Day:<input type="number" min="1" max="31">Month:<input type="number" min="1" max="12">
            Year<input type="number" min="1900" max="2021"></p>
        <p>Submit Button:<input type="submit" name="submit"></p>
        <p>Reset Button:&nbsp&nbsp<input type="reset"></p>
        <?php

        ?>
    </form>
</body>
</html> 
