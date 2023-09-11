<!-- Manual --> 
<?php echo "hello world"; ?> 
<br> 
<!-- Penggunaan Variabel --> 
<?php $txt = "Hello world!"; echo $txt; ?> 
<br> 
<!-- Penggunaan Tipe Data --> 
<?php $x = "Hello World!!"; echo $x; ?> 
<br> 
<!-- For Each Loop --> 
<?php 
$colors = array("red", "green", "blue", "yellow"); 
 
foreach ($colors as $value) { 
  echo "$value <br>"; 
} 
?> 
<br> 
<!-- If Else --> 
<?php 
$t = date("H"); 
 
if ($t < "20") { 
  echo "Have a good day!"; 
} else { 
  echo "Have a good night!"; 
} 
?> 
<br> 
<!-- Switch Case --> 
<?php 
$favcolor = "red"; 
 
switch ($favcolor) { 
  case "red": 
    echo "Your favorite color is red!"; 
    break; 
  case "blue": 
    echo "Your favorite color is blue!"; 
    break; 
  case "green": 
    echo "Your favorite color is green!"; 
    break; 
  default: 
    echo "Your favorite color is neither red, blue, nor green!"; 
} 
?> 
<br> 
<!-- Function --> 
<?php 
function name($name) { 
  echo "Hello my name is $name"; 
} 
 
name("Dewi"); // call the function 
?> 
<br> 
<!-- Array --> 
<?php 
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; 
?> 
<!-- Date and Time --> 
<?php 
echo "Today is " . date("Y/m/d") . "<br>"; 
echo "Today is " . date("Y.m.d") . "<br>"; 
echo "Today is " . date("Y-m-d") . "<br>"; 
echo "Today is " . date("l"); 
?> 
<br>
