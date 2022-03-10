<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <style>
        body{
            background: url("images/book9.webp") ;
        }
        *{
            margin: 0;
            padding: 0;
        }
        form{
            border-left: 2px solid whitesmoke;
            border-right:  2px solid whitesmoke;
            border-radius: 27px;
            box-shadow: 2px 5px 15px purple;
            width: 60%;
            /* text-align: center; */
            margin: 20%;
            /* height: 100%; */
            margin-top: 25px;
            padding: 2px;
        }
        input[type="text"],input[type="password"],input[type="email"],input[type="phone"],input[type="submit"] {
            width: 95%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 23px;
            font-family: cursive;
            padding: 3px;
            border-left: 2px solid black;
            border-bottom: 2px solid black;
            border: 2px solid black;
            box-shadow: 2px 5px 7px purple;
            margin: 25px;
            border-radius: 12px;
            background-color: cyan;
        }
        input[type="radio"]{
            height: 23px ;
            width: 23px;
            padding: 10px;
            margin: 20px;
            border: 2px solid black;
            border-radius: 50%;

        }
        input{
            display: inline-block;
            justify-content: center;
            align-items: center;
        }
        p{
            color: rgb(0, 255, 255);
            font-family: cursive;
            font-size: 23px;
        }
        input[type="submit"]
        {
            background-color: cyan;
            cursor: pointer;

        }
        input[type="submit"]:hover{
            opacity: 0.8;
        }
        @media only screen and (max-width:600px){
           form {
                font-size: 10px;
                width: 75%;
                position: relative;
                right: 30px;
                /* margin: 10px ; */
            }
            input[type="text"],input[type="password"],input[type="email"],input[type="phone"],input[type="submit"]{
                font-size: 13px;
                width: 84%;
            }
            input[type="radio"]{
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <span>
        <a href="homee.php">
            <img src="./images/back.jpg" height="45px" width="45px" style="border-radius: 50% ;position:fixed;" alt="">
            <h2 style="text-align: center; text-decoration: none; color:rgb(255, 255, 255);font-family: cursive;">Happy Face Happy Reader :)</h2>
        </a>
    </span>
    <div class="main">
        <form action="" method="post">
            <h2 style="text-align:center; color:rgb(255, 69,255);font-family:cursive;">Create e-LIBRARY ID</h2>
            <p>
                <input type="text" name="fname" id="fname" placeholder="First Name" required>
            </p>
            <p>
                <input type="text" name="fname" id="lname" placeholder="Last Name" required>
            </p>
            <p>
                <input type="email" name="email" id="email" placeholder="Enter Your Valid Email" required>
            </p>
            <p>
                <input type="password" name="password" id="password" placeholder="Enter Password(Create new)" required>
            </p>
            <p>
                <input type="password" name="password" id="password" placeholder="Re-Enter Password " required>
            </p>
            <p>
                <input type="phone" name="phone" id="phone" placeholder="Your Phone Number">
            </p>
            <p>
                <input type="text" name="nickname" id="nickname" placeholder="Enter Your e-LIBRARY nickname">
            </p>
            <p>
                <input type="radio" name="gender" id="gender">Male <input type="radio" name="gender" id="gender">Female <input type="radio" name="gender" id="gender">Others
            </p>
            <br>
            <hr style="color: black; ">
            <br>
            <p>
                <input type="submit" value="Submit Now">
                <!-- using php redirect This to the main page i.e homee.php  -->
            </p>
        </form>
        <p style="text-align: center;">

            Thank You For The Registration 🤑
        </p>
    </div>
</body>
</html>