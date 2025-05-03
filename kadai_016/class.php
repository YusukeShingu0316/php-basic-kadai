<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>

<body>
<p>
  <?php
  class food {

    public $name;
    public $price;
    
    Public function _construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
  }

  class Animal {

    public $name;
    public $height;
    public $weight;

    public function _construct(string $name, int $height, int $weight) {
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
  echo '<br>';
  echo $dog->show_weight();

  print_r($Animal);
  ?>
  </p>  
</body>
</html>
