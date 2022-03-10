<html>
<head>
    <title>20621620
    </title>
</head>
<body>
<?php
    class Books{
        private $title;
        private $author;
        private $price;
        
        function __construct ($title, $author, $price ){
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        }
        function show_books(){
            $book = "Kнига: ".$this->title." , ".$this->author." , ".$this->price;
            echo "$book";
        }       
        }
        
        $newBook = new Books("PHP and MySQL", "Иван Иванов" , "12 лв.");
        $newBook->show_books();
    
?>
</body>
</html>