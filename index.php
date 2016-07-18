<?php

// на вход приходит два массива с метками времени
// очередность не имеет значения, можно пердвавть в любой последовательности
function cross($x,$y){
	if($x[1]<=$y[0] || $y[1]<=$x[0]){
		echo "Промежутки не пересекаются!";
		return false;
	}	
	
	$cross = array();

	// Если больший промежуток времени - $y
	if($x[1]<=$y[1])
	{	
		// один Промежуток полностью внутри другого
		if($x[0]>=$y[0] && $x[1]<=$y[1]){
		$cross = $x;
		}
		else{
		$start = $y[0]; 
		$end = $x[1];
		$cross = array($start, $end);
		}
				
	} 
	
	// Если больший промежуток времени - $x
	elseif($x[1]>=$y[1])
	{	
		// один Промежуток полностью внутри другого
		if($y[0]>=$x[0] && $y[1]<=$x[1]){
		$cross = $y;
		}
		else{
			$start = $x[0]; 
			$end = $y[1];
			$cross = array($start, $end);
		}	
	}
	
	else{
		echo "ERROR_DATA";
	}
	
	
	//print_r($cross);
		return $cross;
}


$start = array(500,2000);
$end = array(1000,5000);

$say = cross($start,$end);
print_r($say);

// Вернется массив с метками времени Unix, соответсвенно [0] - начало, [1] - конец пересечения
