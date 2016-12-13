<?php

function testGLOBALS(){
	
	$x = "local variable";

	echo '$x in global scope: '.$GLOBALS["x"]."\n";
	echo '$x in current scope: '. $x . "\n";
}
$x = "example content";

//the function testGLOBALS makes $x as a 




?>
