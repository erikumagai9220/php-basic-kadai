<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
     <p>
        <?php
        $names = ['名前' =>'玉ねぎ','値段' =>200,'産地' =>'北海道'];

        foreach ($names as $index => $value) {
          echo "{$index} : {$value}<br>";
        }
        ?>
     </p>
 </body>