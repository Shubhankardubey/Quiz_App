<?php
include('database.php');

?>

<?php session_start();

?>

<?php
$number = (int) $_GET['n'];

	$query = "SELECT * FROM questions";
		  
$result = $conn->query($query) or die($conn->error.__LINE__);

$total = $result->num_rows;


$query = "SELECT * FROM questions 
          WHERE question_number=$number";
		  
$result = $conn->query($query) or die($conn->error.__LINE__);

$question = $result->fetch_assoc();


$query = "SELECT * FROM choices 
          WHERE question_number=$number";
		  
$choices= $conn->query($query) or die($conn->error.__LINE__);




?>

<html>
<head>
<title>Quizzer</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
<div class="container">

<h1>PHP Quizzer</h1>
</div>
</header>
<main>
<div class="container">
<div class="current">
Question <?php echo $question['question_number']; ?> of <?php echo $total;?>:
</div>
<p class="question">
<?php echo $question['text'];?>
</p>
<form method="post" action="process.php">
<ul class="choices">
<?php while($row=$choices->fetch_assoc()): ?>
<li><input type="radio" name="choice" value="<?php echo $row['id'];?>"><?php echo $row['text']; ?></li>
<?php endwhile;?>
</ul>
<input type="submit" value="Submit">
<input type="hidden" name="number" value="<?php echo $number; ?>">

</form>
</div>
</main>
<footer>
<div class="container">
<p>Copyright &copy; 2017, PHP Quizzer</p>
</div>
</footer>

</body>
</html>