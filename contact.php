<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="contact.css"> -->
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
    font-size:23px;
    margin-top:9px;
    color:rgb(0, 255, 242);
}
nav ul li a:hover{
    color:rgb(255, 255, 255);
}
nav{
    background-color:black;
    height:9vh;
    /* position: fixed; */
}
.logo img{
    margin-left: 0px;
}
#logooo{
    font-size: 30px;
    font-family: cursive;
    -webkit-text-stroke: 1px cyan;
    color: rgb(0, 0, 0);
    position: absolute;
}
body{
    background:url("./images/suphi.jpg")no-repeat center ;
    background-color: bisque;
    border-radius: 35px;
}
/* .fa{
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
.main1 ul li{
    /* display: flex;
    justify-content: center;
    align-items: center; */
    color: rgb(0, 0, 0);
    font-size: 23px;
    margin: 25px;
}
.main1 ul li a{
    display: flex;
    justify-content: center;
    align-items: center;
}
.main2{ 
    float: right;
    clear: both;
} 
/* form{
    width: 25%;
    height: 1120px;
    height: fit-content; 
    border-radius: 27px;
    border: 2px solid black;
    padding: 5px;
    margin: 10px;
    display: inline-block;
    justify-content: center;
    align-items: center;
    position: relative;
    top:35px;
    right: 7px;
    color: rgb(0, 0, 0);
    font-size: xx-large;
    background-color: rgb(207, 162, 95);
    text-align: center; 
    box-shadow:2px 5px 9px rgb(8, 255, 255);
} */
/* .main2 form input,textarea{
    margin: 7px;
    font-size: 21px;
    font-family: unset;
    border: 1px solid wheat;
    width: 90%;
    border-radius: 12px;
    /* height: 21px; */
    /* padding: 7px;
    background-color: rgb(44, 44, 44);
    color: white;
    border: 2px solid aqua;
}
input[type="button"]:hover{
    opacity: 0.8;
    cursor: pointer;
}   */
@media only screen and (max-width: 600px){
    nav ul li{
                margin: 5px;
                padding: 0px;

            }
            nav ul li a{
                font-size: 13px;
                margin: 9px;
                float: right;
                clear: left;
                margin-right: 20px;
                /* padding: 7px ; */
                margin-top: 17px;
                color: rgb(255, 255, 255);
                
                text-transform:uppercase;


            }
            nav ul li img{
                height: 50px;
                width: 65px;
            }
            nav{
                height: 6vh;
                background-color: transparent;
                transition: 1s;
            }
            nav:hover{
                background-color: rgb(226, 34, 34)34);
            }
            #logooo{
                font-size: 19px;
                left: 45px;
                top: 12px;
                display: none;
            }
            #logooo sub{
                font-size: 7px;
            }
            .main2 form{
                width:60%;
                position: relative;
                /* right: ; */
                /* margin: 12px; */

            }
            .main2 form h3{
                font-size: 15px;

            }
            .main2 form p input,textarea {
                /* width: 80%; */
                font-size: 13px;
                margin: 0;
                padding: 0;
                border-radius: 5px;
                
            }
            textarea{
                height:130px;
                /* width: 25px; */
                position: relative;
                right: 15px;
            }
            .main1 ul li{
                color: aqua;
                margin: 7px;
                font-size: 14px;
                
            }
            body{
        background: url("./images/7.jpg");
    }
}
/* @media (min-aspect-ratio:16/9){
    img{
        width: 100%;
        height: auto;
    }
} */
/* @media (max-aspect-ratio:16/9){
    img{
        width: auto;
        height: 100%;
    }
} */

    </style>
</head>
<body>
    <nav class="nav">
        <ul type="none">
            <li><a href="about.php">About</a></li>
            <li><a href="sevice.php">Service</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="homee.php">Home</a></li>
            <li><a href="homee.php" id="logooo">e-LIBRARY<sub style="color: white; -webkit-text-stroke: black; font-size: 12px;">Best e-web on internet</sub> </a></li>
            <li >
                <img src="./images/large.png"  height="60px" width="85px" center  alt="logo image did not load">
            </li>
        </ul>   
    </nav>
        <div class="main1">
            <ul type="none">
                <!-- <h3 style="font-size: x-large;"> Better You Visit Our Office</h3> -->
                <li><a href="#" class="fa fa-map-marker" style="height: 45px; width: 45px; text-align: center;"></a>e-LIBRARY 
                <br>Head Office <br>
                Balkumari-13, Lalitpur Nepal</li>
                <li>
                    <!-- <li><a href="#" class="fa fa-map-marker" style="height: 45px; width: 45px; text-align: center;"></a>e-LIBRARY 
                        <br>
                        Balkumari-13, Lalitpur Nepal</li>
                        <li>
                            <li><a href="#" class="fa fa-map-marker" style="height: 45px; width: 45px; text-align: center;"></a>e-LIBRARY 
                                <br>
                                Balkumari-13, Lalitpur Nepal</li> -->
                                <li>
                                    <a href="#" class="fa fa-phone" style="height: 45px; width: 45px; text-align: center;"></a> Suman Sharma(CEO)
                                    <br>+097 9866134804 <br>
                                    Email:hello@elibrary.edu.np <br>
                                    Fax: 034 234 44
                                </li>
                                <li><a href="#" class="fa fa-handshake-o" style="height: 45px; width: 45px; text-align: center;"></a>In Collaboration With <br>
                                Binay Rijal(MD) <br>
                                Sunil Sharma(HR) <br>
                                Gaurab Poudyal (DM) <br>
                                Yubraj Adhikari (GR)</li>
                                <li>
            </ul>
        </div>
        <div class="main2">
            <form action="usercontact.php" method="post">
                <h3 style="text-align: center; animation-name:apple; animation-duration:1s;animation-iteration-count:infinite;">
                    Get In Touch 
                </h3>
                <p>
                    <input type="text" name="username" id="username" placeholder="Your Name">
                </p>
                <p>
                    <input type="email" name="useremail" id="useremail" placeholder="Your Email">
                </p>
                <!-- <p>
                    <!-- <input type="phone" name="useremail" id="userphone" placeholder="Your Contact No"> -->
                <!-- </p> -->
                <p>
                    <textarea name="usermessage" id="usermessage" cols="20" rows="8" placeholder="Your Message Here"></textarea>
                </p>
                <p>
                    <input type="button" value="Sent" style="border: 2px solid cyan; background-color: rgb(0, 0, 0); color: white;">
                </p>
            </form>
        </div>
    <style>
        @keyframes apple{
            from{color: black;}
            to{color: transparent;}
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
        .main1 ul li{
            /* display: flex;
            justify-content: center;
            align-items: center; */
            color: rgb(0, 0, 0);
            font-size: 23px;
            margin: 25px;
        }
        .main1 ul li a{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .main2{ 
            float: right;
            clear: both;
        } 
        form{
            border-radius: 27px;
            border: 2px solid black;
            padding: 15px;
            margin: 10px;
            display: inline-block;
            justify-content: center;
            align-items: center;
            position: absolute;
            top:70px;
            right: 5px;
            color: rgb(0, 0, 0);
            font-size: xx-large;
            background-color: rgb(207, 162, 95);
            /* text-align: center; */
            box-shadow: 2px 5px 9px rgb(0, 245, 245);
        }
        .main2 form input,textarea{
            margin: 13px;
            font-size: 21px;
            font-family: unset;
            border: 1px solid wheat;
            width: 90%;
            border-radius: 12px;
            /* height: 21px; */
            padding: 7px;
            background-color: rgb(44, 44, 44);
            color: white;
            border: 2px solid aqua;
        }
        input[type="button"]:hover{
            opacity: 0.8;
            cursor: pointer;
        }
        
    </style>
</body>
</html>