<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        nav ul li a{
            float:right;
            clear: left;
            margin: 2em;
            text-decoration:none;
            font-size:22px;
            margin-top:9px;
            color:rgb(0, 255, 242);
        }
        nav ul li a:hover{
            color:rgb(255, 255, 255);
        }
        nav{
            background-color:black;
            height:10vh;
            transition:1s;
            /* position: fixed; */
        }
        /* nav:hover{
            background-color: crimson;
        } */
        .logo img{
            margin-left: 0px;
        }
        body{
            /* background-color:rgb(236, 236, 236); */
            background: url("./images/reader4.jpg")no-repeat center;
            height: 110vh;
        }
        span hr{
            float: right;
            clear: left;
        }
        form{
            border: 2px solid black;
            position: absolute;
            right: 55px;
            top: 7rem;
            height: 70%;
            border-radius: 27px;
            padding: 15px;
            width: 27%;
            box-shadow: 2px 5px 15px rgb(28, 142, 255);

        }
        input,input[type="email"], input[type="password"]{
            font-size: 20px;
            width: 100%;
            color: rgb(100, 0, 0);
            border: 1px solid rgb(0, 0, 0);
            border-left: 3px solid rgb(2, 0, 0);
            border-bottom: 3px solid rgb(2, 0, 0);
            border-top: 1px solid rgb(177, 177, 177);;
            border-right: none;
            /* margin: 15px ; */
            border-radius: 10px;
            padding: 5px;
            box-shadow: 2px 7px 6px #444444;
            background: cyan;
            margin: 5px;
            
        }
        p,p a{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px;
            text-decoration: none;
            font-size: 17px;
            color: black;
            font-weight: bold;
            /* border: 2px solid black ; */
            /* color: black; font-weight: bold; font-size: 23px ; font-family: cursive; */
        }
        #button a{
            border: 2px solid black;
            background-color: rgb(0, 255, 221);
            box-shadow: 2px 5px 7px rgb(44, 44, 44);
            padding: 9px;
            margin: 5px;
            margin-left: 30px;
            border-radius: 5px;
        }
        p a:hover{
            opacity: 0.8;
            color: black;
        }
        #logooo{
            font-size: 30px;
            font-family: cursive;
            -webkit-text-stroke: 1px cyan;
            color: rgb(0, 0, 0);
            position:absolute;
        }
        .fa{
            font-size: 45px;
            margin: 15px;
            border: 2px solid rgb(0, 67, 83);
            border-radius: 12px;
            padding: 5px;
            color: rgb(0, 0, 0);
            background:rgb(0, 238, 255);
            text-decoration: none;
            box-shadow: -5px 5px 7px black;
            /* margin: auto; */
        }
        .fa:hover{
            color: rgb(255, 255, 255);
            background: rgb(0, 238, 255);
            border: 2px solid rgb(114, 0, 0);
            transition: 500ms;
        }
        .edit{
            height: 19vh;
        }
        .premain h3{
            color: rgb(77, 77, 77); 
            text-align: right; 
            font-size: 40px; 
            position: absolute; 
            right: 45px;
            font-family:cursive;
        }
        #logooo sub{
            color: white;
            -webkit-text-stroke: black; 
            font-size: 12px;
        }
        @media only screen and (max-width: 600px){
            nav ul li{
                margin: 5px;
                padding: 0px;

            }
            nav ul li a{
                font-size: 13px;
                margin: 9px;
                /* padding: 7px ; */

            }
            nav ul li img{
                height: 60px;
                width: 65px;
                left: ;
            }
            nav{
                height: 7vh;
            }
            #logooo{
                font-size: 19px;
                left: 45px;
                top: 12px;
            }
            #logooo sub{
                font-size: 7px;
            }
            .premain h3{
                font-size: 16px;
                margin-top: 92%;
                color: rgb(0, 0, 0);
                margin-right: 0px;
                right: 7px;
            }
            .binay form{
                width: 55%;
                padding-right: 0px;
                margin-right: 0px;
                font-size: 15px;
                position: absolute;
                right: 5px;
                top: 53%;
                /* bottom: 0px; */
                margin: 0px;
                padding: 0;
                height: fit-content;


                /* top: -15px; */
            }
            .binay form input{
                font-size: 13px;
                margin: 7px;
                /* padding: 7px ; */
            }
            .binay form  p{
                font-size: 12px;
                /* margin: auto; */
            }
            .binay form p a{
                font-size: 12px;
                /* padding: 5px ; */
            }
            #button a{
                margin-left: 2px;
            }
            .fa{
                font-size: 45px;
                padding: 3px;
                margin: 15px;
                margin-top: 25px;
            }
            body{
                background-color: rgb(0, 71, 71);
            }
            footer h3{
                font-size: 17px;
                position: absolute;
                bottom: 0px;
                right: 45px;
            }
            footer small{
                position: absolute;
                bottom: -19px;
                right: 105px;
            }
        }
    </style>
</head>
<body>
    <nav class="nav">
        <ul type="none">
            <li><a href="about.html">About</a></li>
            <li><a href="sevice.html">Service</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#" id="logooo">e-LIBRARY<sub>Best e-web on internet</sub> </a></li>
            <li >
                <img src="./images/large.png"  height="60px" width="85px" center  alt="logo image did not load">
            </li>
        </ul>   
    </nav>

    <div class="premain">
        <h3>To Visit e-BOOKS Universe</h3>
    </div>

    <div class="binay">
        <form action="process.php" method="post">
            <p style="color: black; font-weight: bold; font-size: 23px ; font-family: cursive;" >
                Register Now!!!
            </p>
            <p>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
            </p>
            <p>
                <input type="password" name="password" id="password" placeholder="Enter Password"  required>
            </p>
            <p id="button">
                <a href="main.html">SignIn</a>
                <!-- if userdetails match only then redirect into the sign in page i.e main.html  -->

                <a href="forget.html">Forget PassWord</a>
            </p>
            <p>
                -----------------OR---------------------
            </p>
            <p>
                I don't have account .... 
            </p>
            <p id="button">

                <a href="newaccount.php" style="margin-left: opx; width: 100%;">Create New Account</a>
            </p>
        </form>
    </div>
    <div class="yubraj">
        <ul type="none">
            <li><a href="#" class="fa fa-instagram"style="height: 45px; width: 45px; text-align: center;"></a></li>
            <li><a href="#" class="fa fa-telegram" style="height: 45px; width: 45px; text-align: center;"></a></li>
            <li><a href="#" class="fa fa-whatsapp" style="height: 45px; width: 45px; text-align: center;"></a></li>
            <li><a href="contact.php" class="fa fa-address-book" style="height: 45px; width: 45px; text-align: center;"></a></li>
            <li><a href="contact.php" class="fa fa-map-marker" style="height: 45px; width: 45px; text-align: center;"></a></li>
            <li><a href="about.html" class="fa fa-info" style="height: 45px; width: 45px; text-align: center;"></a></li>
        </ul>
    </div>
    
    <div class="edit">

    </div>
    <div class="foot">
        
        <footer>
            <h3 style="text-align: center;">Thanks For Choosing Us....Now Enjoy </h3> 
            <small style="text-align: right; font-weight: bold;">&copy: 2022 Suman Sharma</small>
        </footer>
    </div>
</body>
</html>