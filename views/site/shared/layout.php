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
	<!-- Styles -->
	<?php $this->helpers['URLHelper']->getStyles(); ?>

</head>

<body>

	<header>Header</header>

	<main>
		<?php require $file; ?>
	</main>

	<footer>Footer</footer>

	<script type="text/javascript">
		var URL = "<?php echo $url; ?>";
		var Helpers = {};
	</script>

	<!-- Scripts -->
	<?php $this->helpers['URLHelper']->getScripts(); ?>

</body>
</html>