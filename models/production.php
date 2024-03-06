<?php
require_once __DIR__ . "/info.php";
class Production {
    public $title;
    public $language;
    public $vote;
    public $info;

    function __construct($title, $language, $vote, $info) {
        $this->set_title( $title );
        $this->set_language( $language );
        $this->set_vote( $vote ) . "/10";
        $this->info = $info;
    }

    public function set_title($title) {
        if (empty($title) || !is_string($title)) {
            throw new Exception("Il titolo non può essere vuoto o diverso da una stringa");
        } else {
            $this->title = $title;
        }
    }
    public function set_language($language) {
        if (empty($language) || !is_string($language)) {
            throw new Exception("Il linguaggio non può essere vuoto o diverso da una stringa");
        } else {
            $this->language = $language;
        }
    }
    public function set_vote($vote) {
        if (empty($vote) || !is_numeric($vote)) {
            throw new Exception("Il voto non può essere vuoto o diverso da un numero");
        } else {
            $this->vote = $vote;
        }
    }
};