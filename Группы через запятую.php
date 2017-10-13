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
$avg=[];
foreach ($MaxAvgScore as $field => $value){
	$sum=$sum+$value;
}
$AvgInFaculty=$sum/count($MaxAvgScore);
echo "<p>"."Средний балл по факультету: ". $AvgInFaculty ."</p>";

foreach ($MaxAvgScore as $field => $value){
	if ($value>=$AvgInFaculty){
	$avg[]=$field;	
	}
}
echo "У групп ".implode (',',$avg)." балл выше среднего по факультету";
?>