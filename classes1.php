<?php
    class Person {
        private $name;
        private $email;
        protected $key = 1234;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo "Constructo function running <br>";
        }

        public function __destruct(){
            echo "Class person finishing <br>";
        }
        // public function setName($name){
        //     $this->name = $name;
        // }

        public function getName() {
            return "My name is $this->name <br>";
        }

        protected function getKey() {
            return "my key is $this->key<br>";
        }
    }

    class Customer extends Person {
        private $balance;
        public function __construct($name, $email, $balance) {
            parent::__construct($name, $email);
            $this->balance = $balance;
        }
    }

    $customer1 = new Customer("Tom", "tom@email.com", 800);
    echo $customer1->getName();
    echo $customer1->getKey();

    $person1 = new Person("Mizan", "Mizan@email.com");
    // $person1 -> setName('John Doe');

    echo $person1->getName();
?>