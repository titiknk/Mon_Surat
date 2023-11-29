<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-sacle=1">
        <title>Monitoring Surat</title>
    </head>

    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        .main{
            width: 100%;
            height: 100vh;
            background: #E0FFFF;
            background-size: cover;
            background-position: center;
        }
        .navbar{
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo{
            font-size: 36px;
            color: black;
            font-weight: bold;
            width: 120px;
            cursor: pointer;
        }
        .navbar ul li{
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }
        .navbar ul li a{
            color: black;
            text-transform: uppercase;
        }
        .navbar ul li::after{
            content: '';
            height: 3px;
            width: 100%;
            background: green;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;
        }
        .navbar ul li:hover::after{
            width: 100%;
        }
        .content{
            top: 50%;
            width: 100%;
            text-align: center;
            color: black;
            position: absolute;
            transform: translateY(-50%);
        }
        .content h1{
            font-size: 80px;
            margin-top: 80px;
        }
        .content p{
            margin: 20px auto;
            font-weight: 100;
            line-height: 25px;
        }
    </style>

    <body>
        <div class="main">
            <div class="navbar">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="suratkeluar">Surat keluar</a></li>
                    <li><a href="pengirimansurat">Pengiriman Surat</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>Monitoring Surat</h1>
                <p>Monitoring Surat Keluar dan Pengiriman Surat</p>

            </div>
        </div>
    </body>
</html>
