<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP snack-2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="container">
        
        <?php

            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            $hasDot = strpos($mail, '.');
            $hasAt = strpos($mail, '@');


            if(strlen($name) < 3 || $hasAt === false || $hasDot === false || !is_numeric($age)){
                echo 'Accesso Negato';
            }else{
                echo 'Accesso Riuscito';
            }
            
        ?>   
        
    </div>
    
</body>
</html>