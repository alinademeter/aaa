
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Classes</title>
	<link rel="stylesheet" type="text/css" href="classes_style_2.css">
	<script type="text/javascript" src="classes_3.js"></script>
</head>
<body>
	
</header>
<body class="body">
	<div class="form-group">
		<form id="survey-form" name="f" method="post"action="insert_table_form.php">
			<h1 id="title">Formular participare curs</h1>
			<p id="description">Pentru a putea participa la cursuri va rugam sa completati formularul:</p>
			<label for="name">Nume si prenume</label><br>
			<input type="text"id="name" name="name"placeholder="Introduceti numele si prenumele" class="form-control" onsubmit="return onlyAlphabets()"><br>
			<label for="email">Email</label><br>
			<input type="email" id="email" name="email"placeholder="Introduceti adresa de mail" class="form-control" onchange="validaremail();"><br>
			<label for="age">Varsta(optional)</label><br>
			<input type="age" id="age" name="age"placeholder="Varsta" min="10" max="99" class="form-control"></input><br>
			<label for="ocupation">Care dintre optiuni vi se potriveste cel mai bine?</label><br>
			<select id="ocupation" name="ocupation" class="form-control">
				<option disabled selected value>Selectati pozitia curenta</option>
				<option value="Student">Student</option>
				<option value="Angajat full time">Angajat full time</option>
				<option value="Prefer sa nu spun">Prefer sa nu spun</option>
				<option value="Altele">Altele</option>
			</select><br>
			<br>
			<p>La ce curs doriti sa va inscrieti? </p>
			<select id="course" name="course">
				<option disabled selected value>Alegeti cursul</option>
				<option value="Curs general">Curs general</option>
				<option value="Curs tehnica servetelului">Curs tehnica servetelului</option>
				<option value="Curs pictura">Curs pictura</option>
			</select>
			<!--<input type="checkbox" id="Course"name="Course" value="Curs general"></input>
			<label for="Course">Curs pictura</label><br>
			<input type="checkbox" id="Course"name="Course" value="Curs tehnica servetelului"></input>
			<label for="Course">Curs tehnica servetelului</label><br>
			<input type="checkbox" id="Course"name="Course" value="Curs pictura"> </input>
			<label for="Course">Curs pictura</label><br>-->
			<br>
			<p>Comentarii sau sugestii?</p>
			<label for="comments"></label><br>
			<input type="comments" id="comments" name="comments" placeholder="Introduceti informatii suplimentare..."class="form-control"><br><br>

			<div class="form-control">
				<button onclick="validaremail();"type="submit"id="Submit"class="button-submit">Submit</button><br>
			</form>	
		</div>

	</div>

</body>
</html>
