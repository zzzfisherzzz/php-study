<?php
  $name = "Артем";
  $age = 28;
  $city = "Киев";
	
  define ("COLOR", "blue"); 

  $text = "Меня зовут $name, мне $age лет, я из города $city.";
?>

<p style="color:<?php echo COLOR ?>"><?=$text?></p>