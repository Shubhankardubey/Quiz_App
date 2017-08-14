<?php
include('database.php');

?>

<?php 

$query = "SELECT * FROM `questions`";
		  
$results = $conn->query($query) or die($conn->error.__LINE__);

$total = $results->num_rows;
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
<h2>Test Your PHP Knowledge</h2>
<p>This is a multiple choice quiz to test your knowledge of PHP</p>
<ul>
<li><strong>Number Of Questions: </strong><?php echo $total; ?></li>
<li><strong>Type: </strong>Multiple Choice</li>
<li><strong>Estimated Time: </strong><?php echo $total* .5; ?> Minutes</li>
</ul>
<a href="question.php?n=1" class="start">Start Quiz</a>
</div>
</main>
<footer>
<div class="container">
<p>Copyright &copy; 2017, PHP Quizzer</p>
</div>
</footer>

</body>
</html>