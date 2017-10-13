<?php
$MaxAvgScore=[
'101'=>4.2,
'102'=>4.0,
'103'=>4.8,
'104'=>4.6,
'105'=>3.8,
];
$sum=0;
$AvgInFaculty=0;

foreach ($MaxAvgScore as $field => $value){
	$sum=$sum+$value;
}
$AvgInFaculty=$sum/count($MaxAvgScore);
echo "Средний балл по факультету: ". $AvgInFaculty;

foreach ($MaxAvgScore as $field => $value){
	if ($value>=$AvgInFaculty){
	echo "<p>"."У группы ". $field ." балл выше среднего"."</p>";
	}
}
?>