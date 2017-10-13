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
		$fieldName=$fields[$field];
	}
		else {
			$fieldName=$field;
		}
		echo"<p> $fieldName:$value </p>";
}

?>