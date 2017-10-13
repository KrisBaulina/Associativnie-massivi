<?php
$MaxAvgScore=[
'101'=>4.2,
'102'=>4.0,
'103'=>4.8,
'104'=>4.6,
'105'=>3.8,
];
$max=0;
$group=0;
foreach ($MaxAvgScore as $field => $value){
	if ($max<$value){
		$max=$value;
		$group=$field;
	}
}
echo "<p>"."Максимальный средний балл у группы $group: ".$max. "</p>";

?>