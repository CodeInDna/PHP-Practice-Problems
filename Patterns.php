<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patterns using PHP</title>
</head>
<body>
	<h3>Program to print the below format
	<pre>
	* * * * * * * * * * * * * * *
	* * * * * * * * * * * * *
	* * * * * * * * * * *
	* * * * * * * * *
	* * * * * * *
	* * * * *
	* * *
	* 
	</pre>
	</h3>

	<?php
		// function defination
		function pattern1(){
			// Iterate row
			for($i=0; $i<15; $i+=2){
				// Iterate column
				for($j=15; $j>$i; $j--){
					// print *
					echo '* ';
				}
				echo '<br>';
			}
		}
		// function call
		pattern1();
	?>

	<h3>Program to print the below format
	<pre>
	1
	1 2
	1 2 3
	1 2 3 4
	1 2 3 4 5
	1 2 3 4 5 6
	1 2 3 4 5 6 7
	1 2 3 4 5 6 7 8 
	</pre>
	</h3>
	<?php
		// function defination
		function pattern2(){
			// Iterate row
			for($i=1; $i<=8; $i++){
				// Iterate column
				for($j=1; $j<=$i; $j++){
					echo $j.' ';
				}
				echo '<br>';
			}
		}
		// function call
		pattern2();
	?>

	<h3>Write a program to print the below format : 
<pre>
1 5 9
2 6 10
3 7 11
4 8 12.
</pre>
</h3>
	<?php
		// function defination
		function pattern3(){
			for($i = 1; $i <= 4; $i++){
				$num = $i;
				for($j = 1; $j <= 3; $j++){
					echo $num . ' ';
					$num+=4;
				}
				echo '<br>';
			}
		}
		// function call
		echo pattern3();
	?>

	<h3>Write a program to print the below format : 
	<pre>
	*****	00 01 02 03 04 
	*   *	10 11 12 13 14	
	*   *	20 21 22 23 24
	*   *	30 31 32 33 34
	*****	40 41 42 43 44
	</pre>
	</h3>
		<?php
			// function defination
			function pattern4(){
				// Iterate row
				for($i=0; $i<5; $i++){
					// Iterate Column
					for($j=0; $j<5; $j++){
						if($i == 0 || $i == 4 || $j == 0 || $j == 4){
							// print * only when $i or $j has value either 0 or 4
							echo '*'.' ';
						}else{
							// otherwise leave spaces
							echo '&nbsp;&nbsp;&nbsp;';
						}
					}
					echo '<br>';
				}
			}
			// function call
			echo pattern4();
		?>

	<h3>Write a program to print the below format : 
	<pre>
	*0						 	1	     = 1*
	***00					    2 = 1+2  = 3*
	******000					3 = 3+3  = 6*
	**********0000				4 = 6+4  = 10*
	***************00000		5 = 10+5 = 15*
	</pre>
	</h3>
	<?php
		// function defination
		function pattern5(){
			// Iterate row
			for($i=1; $i<=5; $i++){
				$num += $i;
				// Iterate Column
				for($j=0; $j<$num; $j++){
					echo '*';
				}
				for($k=0; $k<$i; $k++){
					echo '0';
				}
				echo '<br>';
			}
		}
		// function call
		echo pattern5();
	?>

	<h3>Write a program to print the below format : 
	<pre>
	1
	23
	456
	78910
	1112131415
	</pre>
	</h3>
	<?php
		// function defination
		function pattern6(){
			// Iterate Row
			for($i=1; $i<=5; $i++){
				// Iterate Column
				for($j=0; $j<$i; $j++){
					echo $i+$j;
				}
				echo '<br>';
			}
		}
		// function call
		echo pattern6();
	?>


</body>
</html>