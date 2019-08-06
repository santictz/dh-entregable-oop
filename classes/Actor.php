<?php

class Actor
{
    private $id;
    private $created_at;
    private $updated_at;
    private $first_name;
    private $last_name;
    private $rating;
    private $favorite_movie_id;

    public function __construct($first_name, $last_name, $rating)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->rating = $rating;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($date)
    {
        $this->created_at = $date;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($date)
    {
        $this->updated_at = $date;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($name)
    {
        $this->first_name = $name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($name)
    {
        $this->last_name = $name;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getFavoriteMovieId()
    {
        return $this->favorite_movie_id;
    }

    public function setFavoriteMovieId($id)
    {
        $this->favorite_movie_id = $id;
    }
}
