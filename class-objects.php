<?php
class Car {
    public $topSpeed;
    public $horsePower;
    function moveForward($topSpeed){
        $this->topSpeed = $topSpeed;
    }
}
class TV {
    public $resolution;
    public $os;
    function tvOn() {
        echo 'Телевизор включен';
    }
    function chooseOs($os) {
        $this->os = $os;
    }
}
class Pen {
    public $type;
    public $material;
    function write(){
        echo 'Напишите текст';
    }
}
class Duck {
    public $geo;
    public $color;
    function multiply(){
        echo 'Внимание! Утка снесла яйцо';
    }
}
class Product {
    public $title;
    public $price;
    function getPrice(){
        $this->price;
    }
}
$bently = new Car();
$bently->moveForward(280);
echo 'Бэнтли ездит со скоростью ' . $bently->topSpeed . ' км/ч';
$ford = new Car();

$sony = new TV();
$samsung = new TV();
echo '<br>';
$samsung->tvOn();

$bic = new Pen();
$parker = new Pen();

$eastDuck = new Duck();
$westDuck = new Duck();

$obFive = new Product();
$zero = new Product();

$filename = 'news.json';
$get = file_get_contents($filename) or exit('Ne poluchaetsya');
$json = json_decode($get,true) or exit('Can\'t decode');

class News {
    private $title;
    private $author;
    private $date;
    private $body;

    public function setTitle($jsonTitle) {
       echo $this->title = $jsonTitle;
    }

    public function setAuthor($jsonAuthor) {
        echo $this->author = $jsonAuthor;
    }

    public function setDate($jsonDate) {
        echo  $this->date = $jsonDate;
    }

    public function setBody($jsonBody) {
        echo $this->body = $jsonBody;
    }


}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEWS</title>
</head>
<body>
<h1>Последние новости</h1>
<hr>
<?php $i=1; $phpNews = new News(); foreach ($json as $data) {?>
<h3><?php $phpNews->setTitle($data['title'])?></h3>
<span> <?php $phpNews->setDate($data['author']); echo ' - '; $phpNews->setDate($data['date'])?></span>
<p><?php $phpNews->setDate($data['body'])?></p>
<b>-----</b>
<?php }?>
</body>
</html>

