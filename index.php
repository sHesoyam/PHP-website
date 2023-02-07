<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP вебсайт</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"><!--Бутстреп-->
</head>
<body>
<!-- Шапка-->
<?php require "blocks/header.php" ?>
<!-- Заголовок-->
<div class ="container mt-5">
			<h3>Как создать первый сайт на PHP</h3>
</div>
<!-- блоки-->
<div class="cars mb-4 shadow-sm container">
<?php
	for($i = 0; $i<5; $i++):
	?>     
	<div class="row flex-lg-row-reverse align-items-center g-5 py-5 m-lg-2 ">
	<div class="col-10 col-sm-8 col-lg-6">
        <img src="img/<?php echo($i+1); ?>.jpg" class="d-block mx-lg-auto img-fluid img-thumbnail" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
	<div class="col-lg-6">
		<h1 class="display-5 fw-bold lh-1 mb-3">Познакомьтесь с bootstrap</h1>
		<p class="lead">Все статичные сайты можно копиривоать на свои хостинги, и, например, монитизировать. На bootstrap-е можно найти в примерах шаблоны для лубого сайта, подкючив библиотеку бутстрепа, они будут прекрасно работать!)</p>
	
	</div>
</div>
<?php endfor; ?>
<!-- Низ-->
<?php require "blocks/shoes.php" ?>


</body>
</html>