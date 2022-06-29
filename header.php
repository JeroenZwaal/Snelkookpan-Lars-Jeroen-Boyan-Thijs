<?php require_once 'backend/config.php';?>

<header>
		<h1>Snelkookpan</h1>
		<nav>
			<a href = "drinks.html">Dranken</a>
			<a href = "houses.php">Huizen</a>
            <a href = "drinks.html">Dranken</a>
			<?php if(!isset($_SESSION['user_id'])): ?>
				<a href="<?php echo $base_url;?>inlog.php">Inloggen</a>
			<?php else: ?>  
				<a href=""><?php echo $_SESSION['name'] ?></a> | 
				<a href="<?php echo $base_url;?>logout.php">Uitloggen</a>
			<?php endif;?>  
		</nav>
</header>
