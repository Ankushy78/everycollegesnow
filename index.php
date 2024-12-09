<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="website Icon" href="5.jpg">
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            background-image: url("5.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
           
        }
       
       
       
        .container {
          width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
           
        
        

        .welcome-text {
            font-size: 46px;
            font-weight: bolder;
            color: black;
            opacity: 2;
            transform: translateY(-100px);
            transition: opacity 1s ease, transform 1s ease;
            align-items: center;
            text-align: center;
        }

        .show {
            opacity: 1;
            transform: translateY(0);
        }

        .link {
            position: absolute;
            bottom: 200px;
            text-align: center;
            width: 100%;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
        

        
    </style>
</head>
<body >
    <div class="container">
        <div class="welcome-text">Your Best College Awaits!!!</div>
        <div class="link">
            <a class="button" href="main.php" target="_blank">Press to continue</a>
        </div>
    </div>
    </div>
    <script>
        window.addEventListener('load', () => {
            const welcomeText = document.querySelector('.welcome-text');
            welcomeText.classList.add('show');
        });
    </script>
</body>
</html>