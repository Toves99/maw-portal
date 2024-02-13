<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loading</title>

    <style>
    #div {
        width: 700px;
        height: 300px;
        background: white;
        margin-top: 100px;
        margin-left: 350px;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    #h2 {
        text-align: center;
        margin-top: 10px;
        padding: 20px;
    }

    #p {
        margin-left: 30px;
        margin-top: 10px;
        position: absolute;
        width: 600px;
        font-size: 20px;
        text-align: center;
    }

    #btn {
        margin-top: 130px;
        margin-left: 280px;
        position: absolute;
        width: 150px;
        height: 30px;
        color: white;
        background: blue;
        border: none;
        border-radius: 7px;
    }

    /* Media screen responsiveness */
    @media screen and (max-width: 768px) {
        #div {
            width: 90%;
            height: 340px;
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
        }

        #p {
            width: 80%;
            margin-left: 10px;
            font-size: 16px;
            text-align: left;
        }

        #btn {
            margin-top: 150px;
            margin-left: 40%;
            transform: translateX(-50%);
        }
    }
    #h3{
        color:blue;
        font-size:25px;
        font-weight:bold;
        margin-left:20px;
    }
</style>

</head>
<body id="img">
    <h2 id="h3">MAW<br>INSTITUTE</h2>
<div id="div">
    <h2 id="h2">Wow!</h2>
    <p id="p">
    Consider your course application successful and is pending 
    approval from  our prefessional
    panel.In the meantime you can track your course's approval
    status in my learning tab. 
    </p>
    <a href="mylearning.php">
    <button id="btn">Go to my learning</button>
    </a>
    </div>
</body>
</html>