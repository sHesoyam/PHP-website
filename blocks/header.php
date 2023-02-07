<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom container">
	<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
		<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
		<span class="fs-4">PHP project</span>
	</a>

	<ul class="nav nav-pills">
		<li class="nav-item"><a class="nav-link" href="/contacts.php">Отпраить письмо</a>
	</ul>
	
	<?php if($_COOKIE['user'] == 'Да'): ?>
		<a class="btn btn-outline-primary" href="/comein.php">Кабинет пользователя</a>
	<?php else: ?>
		<a class="btn btn-outline-primary" href="/comein.php">Войти</a>
	<?php endif; ?>
</header>