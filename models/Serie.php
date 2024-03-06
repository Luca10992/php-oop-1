<?php
require_once __DIR__ . "/production.php";
class SerieTv extends Production {
    public $season;
    public $episode;

    function __construct($image, $title, $language, $vote, $info, $season, $episode) {
        parent::__construct($image, $title, $language, $vote, $info);
        $this->set_season( $season );
        $this->set_episode( $episode );
    }

    public function set_season($season) {
        if (empty($season) || !is_numeric($season)) {
            throw new Exception("La stagione non può essere vuota o diversa da un numero");
        } else {
            $this->season = $season;
        }
    }
    public function set_episode($episode) {
        if (empty($episode) || !is_numeric($episode)) {
            throw new Exception("Gli episodi non possono essere vuoti o diversi da un numero");
        } else {
            $this->episode = $episode;
        }
    }
};