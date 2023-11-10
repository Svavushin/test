<?php

echo '<pre>';
var_dump($_FILES['file1']);
var_dump($_POST['num']);
var_dump($_POST['string']);
echo '</pre>';


$files = "./files/" . $_FILES['file1']['name'];

var_dump(move_uploaded_file($_FILES['file1']['tmp_name'], $files));

if (move_uploaded_file($_FILES['file1']['tmp_name'], $files)) {
  echo $_FILES['file1']['name'] . "успешно загружен";
}

// регулярки

$str = "Stroka dlya regular 1 2_ 3 9 0 expression";

echo '<pre>';
var_dump(preg_split('/\s+/', $str));
var_dump(preg_match_all('/\d/', $str, $matches));
var_dump($matches);

foreach ($matches[0] as $value) {
  echo $value;
}


echo '</pre>';

// регулярки.


// условие тернарное

$a = 5;
$b = 6;

$result = $a < $b ? $a : $b;

echo $result;

// условия тернарное.



// сокращенное тернарное условие

$f = 10;
$t = 15;
$bool = 75;


$res = $bool ?: "non";

echo '<p>'. $res . '</p>';

// сокращенное тернарное условие


// анонимная функция
$greet = function(){
  print("dadada");
};


$greet();
// анонимная функция 
