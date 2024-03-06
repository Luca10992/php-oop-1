<?php
require_once __DIR__ . "/production.php";
class Movie extends Production {
    public $profit;
    public $duration;

    function __construct($image, $title, $language, $vote, $info, $profit, $duration) {
        parent::__construct($image, $title, $language, $vote, $info);
        $this->set_profit( $profit );
        $this->set_duration( $duration ) . "min";
    }

    public function set_profit($profit) {
        if (empty($profit) || !is_numeric($profit)) {
            throw new Exception("Il profitto non può essere vuoto o diverso da un numero");
        } else {
            $this->profit = $profit . "mil $";
        }
    }
    public function set_duration($duration) {
        if (empty($duration) || !is_numeric($duration)) {
            throw new Exception("La durata non può essere vuota o diverso da un numero");
        } else {
            $this->duration = $duration . "min";
        }
    }
};