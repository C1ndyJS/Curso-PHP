<?php

class SuperHero {
    public string $name;
    public string $power;
    public int $age;
    public string $planet;

    public function __construct(string $name, string $power, int $age, string $planet) {
        $this->name = $name;
        $this->power = $power;
        $this->age = $age;
        $this->planet = $planet;
    }

    public function getInfo(): string {
        return "Name: {$this->name}, Power: {$this->power}, Age: {$this->age}";
    }

    public function attack(): string {
        return $this->planet;
    }

    public function description(): string {
        return "{$this->name} es un superhéroe de 
                {$this->age} años y tiene el poder de 
                {$this->power}.";

    }
}

$hero = new SuperHero("Spider-Man", "Wall-Crawling", 25, "Earth");
echo $hero->getInfo();
echo "<br>";
echo $hero->description();
echo "<br>";
echo "Viene desde el planeta: " . $hero->attack();
echo "<br>";

?>