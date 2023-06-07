<!DOCTYPE html>
<html>
<head>
	<title>Пошук мов, які знає студент</title>
</head>
<body>
	<h1>Пошук мов, які знає студент</h1>
	<form method="POST">
		<label for="name">Введіть ім'я студента:</label><br>
		<input type="text" id="name" name="name"><br>
		<input type="submit" value="Пошук">
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["name"];
			$languages = get_languages_for_student($name);
			if ($languages == "NotFound") {
				echo "<p>Студента з таким іменем не знайдено</p>";
			} else {
				echo "<p>Студент володіє наступними мовами:</p>";
				echo "<ul>";
				foreach ($languages as $language) {
					echo "<li>$language</li>";
				}
				echo "</ul>";
			}
		}

		function get_languages_for_student($name) {
			// Зчитування даних з файлу
			$data = file_get_contents("students.json");
			$students = json_decode($data, true);

			// Пошук студента в масиві
			foreach ($students as $student) {
				if ($student["name"] == $name) {
					return $student["languages"];
				}
			}

			return "NotFound";
		}
	?>
</body>
</html>