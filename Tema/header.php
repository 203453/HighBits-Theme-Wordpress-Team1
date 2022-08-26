<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	wp_head();
	?>
</head> 

<body>  
	<!-- Menu -->
	<nav class="navbar navbar-expand-lg">

			<?php if ( has_custom_logo() ) { 
				the_custom_logo();
			} 
			?>
			
		<h1><?php echo get_bloginfo('name');?></h1>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navigation" class="collapse navbar-collapse" >	
			<ul class="navbar-nav ml-auto">
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container'=> '',
							'theme_location' => 'primary',
							'items_wrap' => ' <li class="nav-item"><a class="nav-link">%3$s</a></li> ',
							'item_spacing' => '',
						)
						);
				?>
			</ul>
		</div>	
	</nav>

<div class="main-wrapper">
	<header class="page-title theme-bg-light text-center gradient py-3">
		<h1 class="heading"><?php the_title();?></h1>
</div>
	</header>