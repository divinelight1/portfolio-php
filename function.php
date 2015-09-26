<?php 

function nav ($array_name){
	echo "<nav><ul>";
	foreach ($array_name as $key => $value) {		
		echo	"<li><a href='$value'>$key</a></li>";		
	}
	echo "</ul></nav>";
}

 $nav = array(
                'Home' => '#home',
                'Projects' => '#projects',
                'About Me' => '#about-me',
                'Reference\'s' => '#reference',
                'Contact' => '#contact'
                );