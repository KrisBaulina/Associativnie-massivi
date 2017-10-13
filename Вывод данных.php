<?php
$person=[
'lastName'=>'Иванов',
'firstName'=>'Иван',
'patronimicName'=>'Иванович',
'avgOrderCost'=>'15000',
];
$fields=[
'lastName'=>'Фамилия',
'firstName'=>'Имя',
'patronimicName'=>'Отчество',
//'avgOrderCost'=>'Ср.сумма.заказа',
];


foreach ($person as $field => $value){
	if (isset ($fields[$field])){
		echo "<p>".$fields[$field].": ".$value."</p>";
	}
}

?>