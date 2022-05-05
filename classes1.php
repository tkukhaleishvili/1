<?php
class Person {
    public $name;
    public $surname;
    private $age;

    function __construct($name = null, $surname = null)
    {
        $this->name =$name;
        $this->surname =$surname;
    }


     public function hello()
     {
        return 'hello I am ' .$this->name . ' ' .$this->surname ;
     }
     public function setAge($age)
     {
        if ($age > 0){
            $this->age = $age;
        }else{
            throw new Exception("Invalid Age",);
        }
     }

     public function getAge()
     {
       return $this->age;
     }

}

 ?>
