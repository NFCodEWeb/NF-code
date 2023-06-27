<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #181818;
    }

    div {
        width: 200px;
        height: 200px;
        box-shadow: 16px 14px 20px #0000008c;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    div::before{
        content: "";
        background-image: conic-gradient(
            #ff0052 20deg,
            transparent 120deg
        );
        width: 150%;
        height: 150%;
        position: absolute;
        animation: rotate 2s linear infinite;
    }
    div::after{
        content: "Welcome";
        width: 190px;
        height: 190px;
        background: #101010;
        position: absolute;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ff0052;
        font-size: larger;
        letter-spacing: 5px;
        box-shadow: inset 20px 20px 20px #0000008c;
        
    }
    @keyframes rotate {
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(-360deg);
        }
    }


    
</style>

<body>
<div >
    </div>
</body>

</html>