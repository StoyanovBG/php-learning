<html>
<head>
    <title>20621620
    </title>
</head>
<body>
<?php
    class Person{
        protected $first_name;
        protected $last_name;
        
        public function __construct ($first_name, $last_name){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        }
        public function show_person(){
            $nperson = "My name is, ".$this->first_name." ".$this->last_name."!";
            echo "$nperson";
        }       
        }
        
    class Programmer extends Person{
        private $langs;
        
        public function set_lang(){
            $langs = array("Lisp","Java");
            array_push($langs, "PHP");
           echo "<br>I know also ".end($langs).".<br>";
           print_r($langs);
        }
    }
        echo "Hello! <br>";
        $newProgram = new Programmer("Ivan","Ivanov");
        $newProgram->show_person();
        $newProgram->set_lang();

    
?>
</body>
</html>