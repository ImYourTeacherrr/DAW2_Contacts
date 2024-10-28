<?php
class Person {
    private $name;
    private $age;
    private $contacts;
    private $height;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        $this->contacts = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function addContact(Contact $contact) {
        $this->contacts[] = $contact;
    }

    public function getContacts() {
        return $this->contacts;
    }

    public function __toString() {
        $contactDetails = implode("\n", array_map('strval', $this->contacts));
        return "Name: {$this->name}, Age: {$this->age}\nContacts:\n{$contactDetails}";
    }
}
?>