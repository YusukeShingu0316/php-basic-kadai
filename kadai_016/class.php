<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>

<body>
<p>
  <?php
  class Food {

    private $name;
    private $price;
    
    Public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
    public function show_price() {
      return $this->price;
  }
}

  class Animal {

    private $name;
    private $height;
    private  $weight;

    public function __constructct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    public function show_height() {
      return $this->height;
    }
  }

  $potato = new Food('ポテト',250);
  $dog = new Animal('イヌ',60,5000);

  echo $potato->show_price();
  echo '<br>';
  echo $dog->show_height();

  print_r($potato);
  print_r($dog);
  ?>
  </p>  
</body>
</html>
