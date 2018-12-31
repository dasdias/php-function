<?php

function week($userName = 'Гость', $numberDay = "default") {
	switch ($numberDay) {
		case 1:
			echo "Привет $userName! Хорошего и продуктивного рабочего дня!";
			break;
		case 2:
			echo "Привет $userName! Хорошего и продуктивного рабочего дня!";
			break;
		case 3:
			echo "Привет $userName! Хорошего и продуктивного рабочего дня!";
			break;
		case 4:
			echo "Привет $userName! Хорошего и продуктивного рабочего дня!";
			break;
		case 5:
			echo "Привет $userName! Хорошего и продуктивного рабочего дня!";
			break;
		case 6:
			echo "Привет $userName! Желаю вам хорошо отдохнуть в этот день!";
			break;
		case 7:
			echo "Привет $userName! Желаю вам хорошо отдохнуть в этот день!";
			break;
		case 'default':
			echo "Привет $userName! Желаю вам хорошего времени суток!";
			break;
		default:
			echo "Такого деня недели нет!";
			break;
	}
}

week("Alex", 4);

 ?>