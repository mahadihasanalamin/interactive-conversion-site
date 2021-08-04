<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page 3 [History]</title>
	<script src="history.js"></script>
</head>
<body>
	<form action="search-history.php" method="GET"  name="history" onsubmit="showHistory(this); return false;">
		<fieldset>
	<h1>Page 3 [History]</h1>

	<h2>Conversion Site</h2>
	<br>
	<td>1</td> <a href="home.php">Home</a>
	<td>2</td> <a href="conversion-rate.php">Conversion Rate</a>
	<td>3</td> <a href="history.php">History</a>
	<br>
	<h2>History:</h2>
	<br>
	<input id="search" type="text" name="search" placeholder="search by category">
	<input type="submit" name="submit" value="Submit">
	<div id="history"></div>
	</fieldset>
</form>

</body>
</html>