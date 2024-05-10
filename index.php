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

class Movie extends Production {
    public $profitti;
    public $durata;

    function __construct($_title, $_language, $_vote, $_profitti, $_durata) {
        parent::__construct($_title, $_language, $_vote);
        $this->profitti = $_profitti;
        $this->durata = $_durata;
    }
}

class TVSerie extends Production {
    public $numero_di_stagioni;

    function __construct($_title, $_language, $_vote, $_numero_di_stagioni) {
        parent::__construct($_title, $_language, $_vote);
        $this->numero_di_stagioni = $_numero_di_stagioni;
    }
}

$filmone = new Production("filmone", "it", 10);
$filmino = new Production("filmino", "en", 5);

$movie1 = new Movie("movie 1", "it", 10, 2000, 3);
$movie2 = new Movie("movie 2", "en", 5, 40, 1,50);

$serie1 = new TVSerie("serie 1", "en", 5, 4)

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
    <div class="film">
        <div class="film--title">
            <h1><?php echo $movie1->title?></h1>
        </div>
        <div class="film--body">
            <p><?php echo $movie1->language?></p>
            <p><?php echo $movie1->vote?></p>
            <p><?php echo $movie1->profitti?></p>
            <p><?php echo $movie1->durata?></p>
        </div>
    </div>
    <div class="film">
        <div class="film--title">
            <h1><?php echo $serie1->title?></h1>
        </div>
        <div class="film--body">
            <p><?php echo $serie1->language?></p>
            <p><?php echo $serie1->vote?></p>
            <p><?php echo $serie1->numero_di_stagioni?></p>
        </div>
    </div>
</body>
</html>