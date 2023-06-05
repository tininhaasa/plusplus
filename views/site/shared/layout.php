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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



	<link rel="stylesheet" href="<?= $url?>/assets/css/fonts.css">
	<link rel="stylesheet" href="<?= $url?>/assets/css/loader.css">
	<link rel="shortcut icon" href="<?= $url ?>/assets/img/logo.png" type="image/x-icon">
	<!-- Styles -->
	<?php $this->helpers['URLHelper']->getStyles(); ?>

</head>

<body>

	<div id="loader-overlay" style="display:none">
        <span class="loader loader-circles"></span>
    </div>
    <header>
    <header class="header-menu" style="background-color: black;">

        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">

              <a class="navbar-brand" href="<?= $url ?>/">
                 <img src="<?= $url ?>/assets/img/logoplusplus.png" alt="logoplusplus">
              </a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>
              </button> 
              <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end;">

                <ul class="navbar-nav ml-auto">

                  <li class="nav-item">
                    <a class="nav-link" href="<?= $url ?>/login" style="color: white;font-size: 20px;">Entrar</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>

    </header>

	<main>
		<?php require $file; ?>
	</main>

	<footer></footer>

	<script type="text/javascript">
		var PATH = "<?php echo $url; ?>";
		var Helpers = {};
	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Scripts -->
	<?php $this->helpers['URLHelper']->getScripts(); ?>

</body>
</html>