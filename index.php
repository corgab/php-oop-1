<?php

class Production {
    public $title;
    public $language;
    public $vote;

    function __construct($_title, $_language, $_vote) {
        $this-> title = $_title;
        $this-> language = $_language;
        $this-> vote = $_vote;
    }

}

$filmone = new Production("filmone", "it", 10);
$filmino = new Production("filmino", "en", 5);
// echo $filmone->title;

// echo $filmone->title;
// echo $filmone->language;
// echo $filmone->vote;

// echo $filmino->title;
// echo $filmino->language;
// echo $filmino->vote;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .film {
            background-color: lime;
            margin: 50px 0px;
            padding: 10px 0px;
        }
        .film > * {
            text-align: center;
        }

        .film .film--title {
            text-transform: uppercase;

        }

        .film .film--body {
            font-size: 1.3rem;
        }
    </style>
</head>
<body>
    <div class="film">
        <div class="film--title">
            <h1><?php echo $filmone->title?></h1>
        </div>
        <div class="film--body">
            <p><?php echo $filmino->language?></p>
            <p><?php echo $filmino->vote?></p>
        </div>
    </div>
    <div class="film">
        <div class="film--title">
            <h1><?php echo $filmino->title?></h1>
        </div>
        <div class="film--body">
            <p><?php echo $filmone->language?></p>
            <p><?php echo $filmone->vote?></p>
        </div>
    </div>
</body>
</html>