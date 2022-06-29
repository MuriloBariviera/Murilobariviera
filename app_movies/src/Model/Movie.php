<?php
namespace APP\Model;
class Movie{
    public string $title;
    public int $duration;
    public MovieGender $movieGender;
    public int $yearOfRelease;
    public Director $director;
}