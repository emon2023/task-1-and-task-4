<?php

//**Task 4: Polymorphism**


class Animal {
    public function makeSound() {
        echo "The animal makes a sound.". '<br/>';
    }
}

class Duck extends Animal {
    public function makeSound() {
        echo "The duck quack." . '<br/>';
    }
}

class Cow extends Animal {
    public function makeSound() {
        echo "The cow moo." . '<br/>';
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "The dog barks." . '<br/>';
    }
}

$animal = new Animal();
$animal->makeSound();

$duck = new Duck();
$duck->makeSound();

$cow = new Cow();
$cow->makeSound();

$dog = new Dog();
$dog->makeSound();