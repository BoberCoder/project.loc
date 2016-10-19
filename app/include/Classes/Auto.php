<?php
class Auto {
    public $door = true;
    
    public function __construct($color) {
        $this->paint =$color;
    }
    
    public function get() {
        echo $this->paint.'<br>';
        echo $this->door;
    }
    
}


interface FirstInterface {
    public function first();
    public function second();
}
    
class someclass implements FirstInterface {
    public function first() {
        echo "First method"."<br>";
    }
    
    public function second() {
         echo 'Second method';
    }
}

Class Guest {
    var $IP;
    var $brouser;
    var $OS;
    
    public function __construct($IP,$brouser,$OS){
        $this->IP = $IP;
        $this->brouser = $brouser;
        $this->OS = $OS;
    }
}

Class User extends Guest {
    var $nickname;
    var $age;
    var $location;
    
    public function __construct($IP, $brouser, $OS,$nickname,$age,$location) {
        parent::__construct($IP, $brouser, $OS);
        $this->nickname = $nickname;
        $this->age = $age;
        $this->location = $location;
    }

}



