<?php
session_start();

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
<h2>You are Done!</h2>
<p>Congrats! You have completed the test</p>
<p>Final Score: <?php echo $_SESSION['score'];?></p>
<a href="question.php?n=1" class="start">Take Again</a>
</div>
</main>
<footer>
<div class="container">
<p>Copyright &copy; 2017, PHP Quizzer</p>
</div>
</footer>

</body>
</html>