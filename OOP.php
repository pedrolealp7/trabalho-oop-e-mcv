<?php
class Animal {
    public function falar() {
        return "Algum som";
    }
}

class Cachorro extends Animal {
    public function falar() {
        return "Latido";
    }
}

$cao = new Cachorro();
echo $cao->falar(); // Latido


?>