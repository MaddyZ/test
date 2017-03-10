<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4</title>
</head>
<body>
	<form name="balance" action="" method="post" >
		<label>Введите сумму:</label>
		<input type="text" name="sum" placeholder="сумма">
		<input type="submit" name="Посчитать">
	</form>

	<?php 

	


	function getBalance($balanceUSD){
		$rate = 59;
		$balanceRUR = $balanceUSD*$rate;
		echo "у Вас {$balanceUSD}$, что составляет {$balanceRUR}RUB ";

	}

		$balance = $_POST["text"];
		$balance = getBalance(0);
	 ?>
</body>
</html>