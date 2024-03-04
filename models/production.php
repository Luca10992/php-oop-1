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

    public function get_title(): string
    {
        return $this->title;
    }
    public function get_language(): string
    {
        return $this->language;
    }
    public function get_vote() {
        return $this->vote;
    }
    public function get_info_gender(): string
    {
        return $this->info?->get_gender();
    }
    public function get_info_description(): string
    {
        return $this->info?->get_description();
    }
}
?>