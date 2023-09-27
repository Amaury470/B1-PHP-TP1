<?php
	echo"saisir la temperature en c : " ;
	$vitesse = fgets( STDIN ) ;
	echo "temperature en F : " , 1.8*$vitesse+32 ;
