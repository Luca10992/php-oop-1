<?php
class Info {
    public $gender;
    public $description;

    function __construct(string $gender, string $description) {
        $this->gender = $gender;
        $this->description = $description;
    }

    public function get_gender(): string
    {
        return $this->gender;
    }
    public function get_description(): string
    {
        return $this->description;
    }
}
?>