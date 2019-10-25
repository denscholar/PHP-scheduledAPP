<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<div class="dennis">

    <?php

        $dayOfTheWeek = date("w");
        switch ($dayOfTheWeek){
            case 1:
            echo "Today is Monday " . "Dennis";
            break;
            case 2:
            echo "Today is Tuesday " . "Dennis";
            break;
            case 3:
            echo "Today is Wednesday " . "Dennis";
            break;
            case 4:
            echo "Today is Thursday " . "Dennis";
            break;
            case 5:
            echo "Today is Friday " . "Dennis";
            break;
            case 6:
            echo "Today is Saturday " . "Dennis";
            break;
            case 0:
            echo "Today is Sunday " . "Dennis";
            break;
           
        }

    ?>
</div>
    
</body>
</html>



