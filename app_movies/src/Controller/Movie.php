<?php
namespace APP\Controller;

require "../../vendor/autoload.php";

use APP\Model\Movie;
use APP\Model\Director;
use APP\Model\MovieGender;

// Criação dos objetos

$movie_one->director = $JosephKosinski;
$movie_one->duration = 107;
$movie_one->movieGender = MovieGender::SUSPENSE;
$movie_one->title = "Spiderhead";
$movie_one->yearOfRelease = 2022;

echo "<pre>";
var_dump($movie_one);
echo "</pre>";