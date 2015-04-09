<?php
// Alphabet
$alphabet = array_combine(range(1, 26), range('A', 'Z'));

// Comets
$comets = array('HALLEY', 'ENCKE', 'WOLF', 'KUSHIDA');

// Groups
$groups = array('AMARELO', 'VERMELHO', 'PRETO', 'AZUL');

// Amount of Comets and Groups
$amount_comets_groups = count($comets);

for($i = 0; $i < $amount_comets_groups; $i++) {
	// Remainder of division for comets
	$comet_remainder_division = get_remainder_division($comets[$i], $alphabet);
	
	// Remainder of division for groups
	$group_remainder_division = get_remainder_division($groups[$i], $alphabet);

	// These groups will not be taken
	if($comet_remainder_division != $group_remainder_division) {
		echo "O grupo formado pelo cometa " . $comets[$i] . " e pelo grupo " . $groups[$i] . " não será levado.";
		echo "<br />"; 
		echo "Resto da divisão pro cometa " . $comets[$i] . ": " . $comet_remainder_division . ".";
		echo "<br />"; 
		echo "Resto da divisão pro grupo " . $groups[$i] . ": " . $group_remainder_division . ".";
		echo "<br /><br />";
	}
}

// Get Remainder of Divisions
function get_remainder_division($comet_group, $alphabet) {
	// Split every letter to an array
	$comet_group_array = str_split($comet_group);

    // Multiplication
    $multiplication = 1;
    foreach($comet_group_array as $letter) {
    	$multiplication = $multiplication * array_search($letter, $alphabet);
    }
	
	// Remainder of division
	$remainder_division = $multiplication % 45;

	return $remainder_division;
}
?>