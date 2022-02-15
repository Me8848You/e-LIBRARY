<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        form{
            border:2px solid red;
            border-radius:25px;
            width: 30%;
            display: grid;
            justify-content: center;
            align-items: center;
            text-align:center;
            position:absolute;
            top: 5px;
            left: 35%;
            background-color:cyan;
        }
    input[type="text"],input[type="email"],input[type="date"],input[type="color"],input[type="phone"],input[type="submit"]{
            width:100%
            height:3px;
            border-left:3px solid crimson;
            border:3px solid crimson;
            font-size:19px;
            border-top:none;
            border-right:none;

        }
        input[type="radio"]{
            width:7%;
            margin:2px;
            height:15px;
        }
        input[type="date"], input[type="color"]{
            width:55%;
            margin:7px;
        }
        input[type="submit"]{
            margin:7px;
            background-color:black;
            color:white;
            height:29px;
            
        }
        input[type="submit"]:hover{
            opacity:0.7;   
            mouse:pointer;         
        }
        input[type="color"]{
            margin:5px
        }
        input{
            margin-top:2px;
            border-radius:7px;
            margin-left:0px;
            width:100%;
            margin:9px;
            height: 27px;
            /* position:absolute;
            left:5px; */
            border:
            color: black;
        }
        img{
            border-radius:50%;
            border:1px solid purple;
        }
        p, label{
            color:crimson;
            font-size:22px;
            position:relative;
            left:0px;
        }
        body{
            background-color:crimson;
        }
        #butt{
            width: 65px;
            position: absolute;
            top:5px;
            right: 0%;
            
        }
    </style>
</head>
<body>
    <div class="apple">
        <form action="apple.php" method="post">
            <span style="color: purple; font-size:19px;">Login Form</span>
            <div class="img_section">
                <img src="download.png" height="150px" width="150px" alt="">
                <input id="butt" type="button" value="Magic">
            </div>
            
            <p>
                <!-- <label for="fname">First Name:</label> -->
                <input type="text" name="fname" id="fname" placeholder="First Name" required>
            </p>

            <p>
                <!-- <label for="lname">Last Name:</label> -->
                <input type="text" name="lname" id="lname" placeholder="Last Name" required>
            </p>

            <p>
                <!-- <label for="email">Email:</label> -->
                <input type="email" name="email" id="email" placeholder="Enter Your Valid Email" required>
            </p>
            <p>
                <!-- <label for="phone">Phone No:</label> -->
                <input type="phone" name="phone" id="email" placeholder="Enter Your Valid Phone Number" required>
            </p>

            <p>
                <input type="radio" name="gender" id="">Male <input type="radio" name="gender" id=""> Female <input type="radio" name="gender" id="gender"> Others
            </p>
            <p>
                Date Of Birth:<input type="date" name="date" id="date">
            </p>
            <P>
                Fav. Color: <input type="color" name="color" id="color">
            </P>
        
            <input type="submit" value="LogIn" onclick=dark();>
        


        </form>
    </div>
</body>
<script src="dark.js"></script>
</html>