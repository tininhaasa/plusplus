<?php
	$url      = $this->helpers['URLHelper']->getURL();
	$location = $this->helpers['URLHelper']->getLocation();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="Psymeet">
	<title><?php $this->helpers['URLHelper']->getTitle(); ?></title>

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