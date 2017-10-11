<?php
$data = $params[ 'data' ];
?>
<html>
<head>
	<title>Test Application</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
</head>
<body>

<section class="section">

	<h1 class="title">Welcome to our product page</h1>


	<nav class="panel">
		<p class="panel-heading">
			Our Products
		</p>

		<?php

			if ( count( $data->products ) > 0 ) {


				foreach ( $data->products as $product_id => $product_name ) {
					echo '<a href="/info.php/' . $product_id . '" class="panel-block is-active">';
						echo $product_name;
					echo '</a>';
				}


			}

		?>

	</nav>

</section>

</body>
</html>