<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>
    <body>
        <p>
        <?php
         // クラスを定義する
                           
          

class Food {
          private $name;
          private $price;
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
  }
    
    public function show_price() {
        return $this->price;
    }
  }


 // クラスを定義する
                     
 

class Animal {
  private $name;
  private $height;
  private $weight;
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    
    public function show_height() {
        return $this->height;
    }
}


$potato = new Food('potato', 250);
$dog = new Animal('dog', 60, 5000);


print_r($potato);
echo '<br>';
print_r($dog);
echo '<br>';

// priceを表示
echo $potato->show_price(); 
echo '<br>';
// heightを表示
echo $dog->show_height(); 
?>
        </p>
    
    </body>
</html>

