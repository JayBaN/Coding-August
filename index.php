<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            text-align: center;
            padding:2em;
            background-color:black;
            color:white;
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <?php 
        $name =  $_GET['name'];


    ?>
   <header>
        <h1><?=  $name; ?></h1>
   </header>

   
</body>
</html>