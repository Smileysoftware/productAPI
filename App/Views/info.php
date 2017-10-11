<?php
$product = $params[ 'info' ];
?>
<html>
<head>
	<title>Test Application</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">

</head>
<body>

<section class="section">

	<h1 class="title">Welcome to the "<?php echo $product->name; ?>" information page</h1>

	<p><a href="/" class="button"><< Back</a></p> <br/>


	<div class="card">
		<header class="card-header">
			<p class="card-header-title">
				<?php echo $product->name; ?>
			</p>
		</header>
		<div class="card-content">
			<div class="content">
				<p><?php echo $product->description; ?></p>
				<p class="subtitle">Type: <?php echo ucwords($product->type); ?></p>
				<p class="subtitle">Suppliers: </p>
				<ul>
				<?php

					foreach ( $product->suppliers as $supplier ) {
						echo '<li>' . $supplier . '</li>';
					}

				?>
				</ul>
			</div>
		</div>
		<footer class="card-footer">
			<a href="/" class="card-footer-item"><< Back</a>
		</footer>
	</div>

</section>

</body>
</html>