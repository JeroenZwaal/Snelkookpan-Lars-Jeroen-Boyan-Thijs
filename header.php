<?php require_once 'backend/config.php';?>

<header>
		<h1>Snelkookpan</h1>
		<nav>
			<a href = "index.php">Home</a>
			<a href = "houses.php">Huizen</a>
			<a href = "create.php">Huis toevoegen</a>
			<a href = "status.php">Status veranderen</a>
			<?php if(!isset($_SESSION['user_id'])): ?>
				<a href="<?php echo $base_url;?>inlog.php">Inloggen</a>
			<?php else: ?>  
				<a href=""><?php echo $_SESSION['name'] ?></a> | 
				<a href="<?php echo $base_url;?>logout.php">Uitloggen</a>
			<?php endif;?>  
		</nav>
</header>
