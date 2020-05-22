<?php

function maze($size=15)
{
	echo "<pre>";
		for ($i=1; $i<=$size; $i++) {
			if ($i%2 == 0) {
				for ($a=1; $a<=$size; $a++) {
					if ($a==1 || $a==$size) {
						echo "@";
					} else {
						echo " ";
					}	
				}
				echo "<br/>";
			} else {
				if ($i%4 == 1) {
					for ($b=1; $b<=$size; $b++) {
						if ($b == 2) {
							echo " ";
						} else {
							echo "@";
						}	
					}
				} else if ($i%2 == 1) {
					for ($c=1; $c<=$size; $c++) {
						if ($c+1 == $size) {
							echo " ";
						} else {
							echo "@";
						}	
					}
				}
				echo "<br/>";
			}	
		}
	echo "</pre>";
}

maze(31);