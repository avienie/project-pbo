<?php

class FormHandler {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }

    public function getData() {
        return [
            "fullname" => $this->getFullName(),
            "phone" => $this->phone,
            "address" => $this->address
        ];
    }
}