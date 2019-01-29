<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head() ?>
	<!-- Font Awesome -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

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
				<i class="material-icons fa-star"> star </i>
				<i class="material-icons fa-star"> star </i>
				<i class="material-icons fa-star"> star </i>
				<i class="material-icons fa-star"> star </i>
			</div>
		</div>
	</header>