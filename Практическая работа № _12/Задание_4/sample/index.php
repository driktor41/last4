<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Отправка данных на сервер</h1>
	<h2>Регулярные выражения, часть 1</h2>
	
	<?php
		$list = <<< HERE
			<ul>
			<li>PostgreSQL. Мастерство разработки</li> 
			<li>Сборник рецептов MySQL</li>
			<li>Чертоги разума. Убей в себе идиота!</li>			
			<li>Рефакторинг sql-приложений</li>
			<li>Python в веб приложениях</li>
			<li>SQL. Полное руководство</li>
			</ul>
		HERE;

		echo "<h3>Исходный список:</h3>";
		echo $list;
		
		$pattern_split = "/<\/?li>/";
		$items = preg_split($pattern_split, $list, -1, PREG_SPLIT_NO_EMPTY);
		
		$pattern_search = "/sql/i";
		$filtered = preg_grep($pattern_search, $items);
		
		if (preg_last_error() == PREG_NO_ERROR) {
			echo "<h3>Отфильтрованный список (только книги с упоминанием SQL):</h3>";
			echo "<ol>";
			foreach ($filtered as $item) {
				echo "<li>" . trim($item) . "</li>";
			}
			echo "</ol>";
		} else {
			echo "<p style='color: red;'>Ошибка при выполнении регулярного выражения: " . preg_last_error_msg() . "</p>";
		}
	?>
	
</body>
</html>