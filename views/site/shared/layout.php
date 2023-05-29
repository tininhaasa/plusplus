<?php
	$url      = $this->helpers['URLHelper']->getURL();
	$location = $this->helpers['URLHelper']->getLocation();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="PlusPlus">
	<title><?php $this->helpers['URLHelper']->getTitle(); ?></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?= $url?>/assets/css/fonts.css">
	<link rel="shortcut icon" href="<?= $url ?>/assets/img/logo.png" type="image/x-icon">
	<!-- Styles -->
	<?php $this->helpers['URLHelper']->getStyles(); ?>

</head>

<body>

    <header>
        <div class="container-logoplusplus">
            <img src="<?= $url ?>/assets/img/logo.png" alt="logoplusplus">
        </div>

        <div class="menu">
            <ul>
                <li><a href="<?= $url ?>/login">Entrar</a></li>

            </ul>
        </div>
    </header> 

	<main>
		<?php require $file; ?>
	</main>

	<footer>Footer</footer>

	<script type="text/javascript">
		var PATH = "<?php echo $url; ?>";
		var Helpers = {};
	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Scripts -->
	<?php $this->helpers['URLHelper']->getScripts(); ?>

</body>
</html>