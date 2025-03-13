<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Moja prvá PHP stránka</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
            background-color: #f0f0f0;
        }
        .box {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Vitaj na mojej PHP stránke!</h1>
    <p>Dnes je: <strong><?php echo date("d.m.Y"); ?></strong></p>
    <p>Aktuálny čas: <strong><?php echo date("H:i:s"); ?></strong></p>
</div>

</body>
</html>
