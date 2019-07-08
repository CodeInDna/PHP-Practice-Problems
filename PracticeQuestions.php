<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Practice Problems using PHP</title>
</head>
<body>
	<h1>Practice Problems using PHP</h1>
	<h3>1. Find 2nd largest value in an array.</h3>
	<?php
		// using default function
		$num_array = array(3,5,7,12,9,11,10);
		rsort($num_array);
		echo "Second Largest digit from the array [3,5,7,12,9,11,10] is: ".$num_array[1];
	?>
	<?php
		// without using function
		$num_array = array(3,5,7,12,9,11,10);
		$largest = 0;
		$second_largest = 0;
		foreach ($num_array as $element) {
			if($largest < $element){
				$second_largest = $largest;
				$largest = $element;
			}elseif($second_largest < $element){
				$second_largest = $element;
			}
		}
		echo "<br>Second Largest digit from the array [3,5,7,12,9,11,10] is: ".$second_largest;
	?>

	<h3>2. Find a word in a string and replace it.</h3>
	<?php
		$string = "Hello Everyone, How are you today morning?";
		echo "Before Replacing: $string<br>";
		$newString = str_replace("morning", "evening", $string);
		echo "After Replacing: $newString";
	?>

	<h3>3. Find a position of a word in a string.</h3>
	<?php
		$string1 = "Hello Everyone, How are you today morning?";
		$position = strpos($string1, "Everyone");
		echo "Everyone is at position: ".$position;
	?>

	<h3>4. How to display first 100 characters of a paragraph.</h3>
	<?php
		$paragraph = 'OOPs is a powerful software development concept and it always insists to minimize, reuse and better management of code. Inheritance is one of the powerful features of OOPs which provides re-usability of code. Traits which is a new feature introduce in PHP 5.4. The concept of traits added some extra feature in single inheritance.';
		echo substr($paragraph, 0, 100);
	?>

	<h3>5. Find last 4 letter of the string.</h3>
	<?php
		$string2 = 'OOPs is a powerful software development concept';
		echo substr($string2, -4);
	?>

	<h3>6. Extract “good blog” from of below string.
	Array99 has good blog for PHP programming.</h3>
	<?php
		$string3 = 'Array99 has good blog for PHP programming.';
		// echo substr($string3, 12, 9);
		$string_to_extract = "good blog";
		echo substr($string3, strpos($string3, "good blog"), strlen($string_to_extract));
	?>

	<h3>7. Find the index of any element in an array.</h3>
	<?php
		$array = array("Cake", "Muffins", "Ice-Cream", "Chocolates");
		echo array_search("Muffins", $array);
	?>

	<h3>8. What will be output of below code and why?
		<?php
		$string = "Array99 has good blog for PHP programming.";
		$substr = "Array99";
		if(strpos($string, $substr))
		{
		   echo "found";
		}
		else
		{
		   echo "not found";
		}
		// Ans Not Found because strpos($string, $substr) will return 0 and 0 evaluates to false
		?>
	</h3>

	<h3>8. How to remove first two elements from an array.</h3>
	<?php
		$arr = array("Cake", "Muffins", "Ice-Cream", "Chocolates");
		$new_arr = array_slice($arr, 2);
		print_r($new_arr);
	?>

	<h3>9. How to remove two elements from middle in below array.
		$colors = array("red", "green", "blue", "yellow");
	</h3>
	<?php
		$colors = array("red", "green", "blue", "yellow");
		$new_arr = array_slice($colors, 1, 2);
		print_r($new_arr);
	?>

	<h3>10. How to remove last element and insert two new elements in below array.
	$colors = array("red", "green", "blue", "yellow");
	$lastColors = array("orange", "maroon");
	</h3>

	<?php
		$colors1 = array("red", "green", "blue", "yellow");
		$lastColors = array("orange", "maroon");
		array_splice($colors1, -1, 1, $lastColors);
		print_r($colors1);

	?>
</body>
</html>