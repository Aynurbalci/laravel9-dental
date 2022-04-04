<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Test Page</title>
</head>
<body>
    <h1>Welcome to laravel</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, doloremque!

    </p>
    Id no: {{$id}} <br>
    Name : {{$name}}
    <?php
    echo "Id number :", $id;
    echo "<br>Name :",$name;
    ?>
    <a href="{{'home'}}">Ana Sayfa</a>
</body>
</html>
