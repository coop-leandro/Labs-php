<?php

class Contact {
    public $name;
    public $email;
    public $phone;

    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email; 
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
}

$contato = new Contact("Leandro", "teste@gmail.com", "(xx) 0176-2623");
echo "Telefone: " . $contato->getPhone(); 
echo "<br>Email: " . $contato->getEmail();

$contato->setEmail("aosgbasg@gmail.com");
echo "<br>Email: " . $contato->getEmail();

