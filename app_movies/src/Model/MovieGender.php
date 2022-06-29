<?php
namespace APP\Model;
enum MovieGender{
    case SUSPENSE;
    case HORROR;
    case DRAMA;
    case COMEDY;

    public function toString()
    {
        return $this->name;
    }
}