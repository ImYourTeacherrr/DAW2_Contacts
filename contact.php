<?php
class Contact {
    private $type;
    private $details;

    public function __construct($type, $details) {
        $this->type = $type;
        $this->details = $details;
    }

    public function getType() {
        return $this->type;
    }

    public function getDetails() {
        return $this->details;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setDetails($details) {
        $this->details = $details;
    }

    public function __toString() {
        return "{$this->type}: {$this->details}";
    }
}
?>