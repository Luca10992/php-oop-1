<?php
class Info {
    public $gender;
    public $description;

    function __construct(string $gender, string $description) {
        $this->gender = $gender;
        $this->description = $description;
    }
}
?>