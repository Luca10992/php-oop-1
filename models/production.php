<?php
require_once __DIR__ . "/info.php";
class Production {
    public $title;
    public $language;
    public $vote;
    public $info;

    function __construct(string $title, string $language, int $vote, Info $info) {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote . "/10";
        $this->info = $info;
    }
}
?>