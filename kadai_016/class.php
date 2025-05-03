<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>

<body>
<p>
  <?php
  class food {
    Public function _construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
  }

  class Animal {
    public function _construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weght = $weight;
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
  ?>
  </p>  
</body>
</html>