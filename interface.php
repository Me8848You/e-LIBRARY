<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to The e-LIBRARY platform</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; 
            align-items: center;
            min-height: 100vh;
            background:#031321;
            font-family: consolas;

        }
        a{
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            color: aqua;
            text-transform: uppercase;
            letter-spacing: 4px;
            overflow: hidden;
            transition: 0.2s;
            text-decoration: none;
            font-size: 3em;
            /* box-shadow: 0px 10px 10px 10px yellow; */
            border: 0.125rem solid cyan;
            border-radius: 25px;

        }
        a:hover{
            color: #255784;
            background:#2196f3;
            box-shadow: 0 0 10px #2196f3, 0 10px 400px #2196f3, 0 0 80px #0f64ad;
            border-radius: 25px;
            transition-delay: 0.1s;
        }
        nav{
            height: 9vh;
            /* color: rgb(119, 255, 244); */
            position: absolute;
            top: 0;
            font-size: 55px;
            text-decoration: underline;
            -webkit-text-stroke: 2px cyan;
            animation-name: gaurab;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }
        @keyframes gaurab{
            from{color: rgb(0, 136, 255);}
            to{color: transparent;
            -webkit-text-stroke: 2px rgb(255, 255, 255);}
        }
    </style>
</head>

<body>
    <nav>
        Welcome BOOK LOVER!!!
    </nav>
    <div class="button">
        <a href="homee.php">
            <!-- <span></span>
            <span></span>
            <span></span>
            <span></span> -->
            CLICK HERE
        </a>
    </div>
</body>
</html>