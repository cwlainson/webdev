<!doctype html>
<html>

<head>
	<title>
		this is a title
	</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<h1>Madlib Exercise</H1>
<?php
$noun1 = '';
$noun2 = '';
$maleCelebrity = '';
$adverb = '';
$adjective = '';
if (isset($_POST['submitButton'])) {
	$isInvalid = false;
	if (trim($_POST["noun1"]) == '') {
		echo "<h1>Error; cannot leave Noun1 box blank</h1>";
		$isInvalid = true;
	}
	if (trim($_POST["noun2"]) == '') {
		echo "<h1>Error; cannot leave Noun2 box blank</h1>";
		$isInvalid = true;
	}
	if (trim($_POST["adverb"]) == '') {
		echo "<h1>Error; cannot leave Adverb box blank</h1>";
		$isInvalid = true;
	}
	if (trim($_POST["maleCelebrity"]) == '') {
		echo "<h1>Error; cannot leave Male Celebrity box blank</h1>";
		$isInvalid = true;
	}
	if (trim($_POST["adjective"]) == '') {
		echo "<h1>Error; cannot leave Adjective box blank</h1>";
		$isInvalid = true;
	}

	$noun1 = $_POST["noun1"];
	$noun2 = $_POST["noun2"];
	$maleCelebrity = $_POST["maleCelebrity"];
	$adverb = $_POST["adverb"];
	$adjective = $_POST["adjective"];
	if (!$isInvalid) {
		echo "while walking down the street yesterday I looked down and saw a $noun1, <br>";
		echo "it had a name tag on it that said it belonged to $maleCelebrity. <br>";
		echo "I thought it was a little bit $adjective for a celebrity like him, but I picked it up anyway <br>";
		echo "and brought it to a pawn shop to see if I could trade it for 2 $noun2 t-shirts once owned by OJ Simpson. <br>";
		echo "The pawn guy said best he could do is one t-shirt so I $adverb accepted the trade.<br>";
	}
}
?>
<form action="madlibz.php" method="post">
	Noun1 <input type="text" name="noun1" <?= ($noun1 ? 'value="' . $noun1 . '"' : ''); ?> required />
	<br />
	Male Celebrity: <input type="text" name="maleCelebrity" <?= ($maleCelebrity ? 'value="' . $maleCelebrity . '"' : ''); ?> required />
	<br />
	Noun2: <input type="text" name="noun2"  <?= ($noun2 ? 'value="' . $noun2 . '"' : ''); ?> required />
	<br />
	Adverb: <input type="text" name="adverb" <?= ($adverb ? 'value="' . $adverb . '"' : ''); ?> required />
	<br />
	Adjective: <input type="text" name="adjective" <?= ($adjective ? 'value="' . $adjective . '"' : ''); ?> required />
	<br />
	<input type="submit" name="submitButton" />
</form>
