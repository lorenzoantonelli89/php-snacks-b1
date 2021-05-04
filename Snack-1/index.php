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
        <ul>
            <?php
                $matches = [
                    [
                        'home_team' => 'Chigaco Bulls',
                        'away_team' => 'Los Angeles Lakers',
                        'home_score' => 112,
                        'away_score' => 119
                    ],
                    [
                        'home_team' => 'Boston Celtic',
                        'away_team' => 'New York Nets',
                        'home_score' => 154,
                        'away_score' => 143
                    ],
                    [
                        'home_team' => 'Miami Heat',
                        'away_team' => 'Golden State Warriors',
                        'home_score' => 108,
                        'away_score' => 123
                    ],
                    [
                        'home_team' => 'Dallas Mavericks',
                        'away_team' => 'Denver Nuggets',
                        'home_score' => 110,
                        'away_score' => 99
                    ]
                ];

                for($i = 0; $i < count($matches); $i++){
                    $home = $matches[$i]['home_team'];
                    $away = $matches[$i]['away_team'];
                    $score_home = $matches[$i]['home_score'];
                    $score_away = $matches[$i]['away_score'];
                    echo '<li>'.$home.' - '.$away.' | '.$score_home.' - '.$score_away;
                }
            
            ?>   
        </ul>
    </div>
    
</body>
</html>