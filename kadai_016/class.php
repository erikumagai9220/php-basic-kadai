<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
        <?php
        // クラスを定義する
        class Food {
          private $name;
          private $price;

          // メソッドを定義する
          public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }
          public function show_price() {
            echo $this->price;
          }
        }
        // インスタンスを作成する
        $food = new Food('potato', 250);

        // 価格を表示する
        
        print_r($food);

        echo '<br>';

        class Animal {
          private $name;
          private $height;
          private $weight;

          public function __construct(string $name,int $height,int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
          public function show_height() {
            echo $this->height;
          }
        }
        $animal = new Animal('dog',60,5000);

        
        print_r($animal);

        echo '<br>';

        $food->show_price();
        echo '<br>';
        $animal->show_height();
        
        ?>
     </p>
  </body>
</html>