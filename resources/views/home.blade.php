<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1, h2{
            text-align: center;
        }

        h1:hover{
            cursor: pointer;
            color: #fff;
            text-shadow: 
            0 0 42px rebeccapurple,
            0 0 82px rebeccapurple,
            0 0 92px rebeccapurple,
            0 0 102px rebeccapurple,
            0 0 151px rebeccapurple;
        }

        h2:hover{
            cursor: pointer;
            color: #fff;
            text-shadow: 
            0 0 42px dodgerblue,
            0 0 82px dodgerblue,
            0 0 92px dodgerblue,
            0 0 102px dodgerblue,
            0 0 151px dodgerblue;
        }
    </style>
</head>
<body>
    <main>
        <h1>{{$title}}</h1>
        <h2>{{$title2}}</h2>
    </main>
</html>