<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head() ?>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

	<?php wp_enqueue_script('NomeScript', '/script.js', false, '2.0', false );?>
	
	<title>
	<?php 
    	if(is_home() ){
        	echo get_bloginfo('');
    	} else if(is_single()){
        	echo the_title();
      	} else{
			echo get_bloginfo('');
      	}
    ?>
	</title>
</head>
<body>
	<header class="header">
		<div class="container">	
			<div class="brand_search">
				<a href="#"> <p> Compass </p> </a>

				<?php get_search_form(); ?>
			</div>

			<div class="box-icon">
		  		<p>Ciao</p>
			</div>
		</div>
	</header>