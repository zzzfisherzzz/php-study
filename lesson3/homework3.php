<?php
  $name = 'Iphone';
  $price = 31333;
  $new_price = $price * (20 / 100); 
?>

<div class="product">
    <p>Название товара: <span><?php echo $name?></span></p>
    <p>цена товара: <span><?php echo $price?></span></p>
    <p>цена товара со скидкой: <span><?php echo $new_price?></span></p>
</div>