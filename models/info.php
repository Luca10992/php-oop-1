<?php
class Info {
    public $genre;
    public $description;

    function __construct($genre, $description) {
        $this->set_genre( $genre );
        $this->set_description( $description );
    }
    public function set_genre($genre) {
        if (empty($genre) || !is_string($genre)) {
            throw new Exception("Il genere non può essere vuoto o diverso da una stringa");
        } else {
            $this->genre = $genre;
        }
    }
    public function set_description($description) {
        if (empty($description) || !is_string($description)) {
            throw new Exception("La descrizione non può essere vuota o diversa da una stringa");
        } else {
            $this->description = $description;
        }
    }
};