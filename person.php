<?php 
class Person {
    public string $name; 
    private int $age; 

    public function __construct($name, $age){
        $this->name = $name; 
        $this->set_age($age); 
    }

    public function set_age($age): void
    {
        $this->age = $age >= 0 ? $age : 0;
    }

    public function get_age()
    {
        return $this->age; 
    }
}