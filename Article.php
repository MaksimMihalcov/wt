<?php

class Article
{
    public $id, $name, $recipe, $author_name;

    public function __construct($name, $recipe, $author_name)
    {
        $this->name = $name;
        $this->recipe = $recipe;
        $this->author_name = $author_name;
    }
}