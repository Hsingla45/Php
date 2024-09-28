<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner HTML Page</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-size: larger;
        }

    </style>
</head>
<body>
        <h1> Cilents name </h1>

        <?php
            $cilents = [
                "Jayden",
                "May",
                "Sia"   
            ]
        ?>

        
        <ul>
            <?php foreach ($cilents as $i) : ?>
                <li> <?= $i ?> </li>
            <?php endforeach ?>
            
        </ul>
    
    


</body>
</html>
