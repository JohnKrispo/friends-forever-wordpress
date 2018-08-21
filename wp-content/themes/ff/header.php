<?php $get_template_directory_uri = get_template_directory_uri ();?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title();?></title>
	<link rel="shortcut icon" href="<?php echo  $get_template_directory_uri;?>/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo  $get_template_directory_uri;?>/img/favicon.ico" type="image/x-icon">

	<?php wp_head();?>
</head>

<body>

		<?php if(current_user_can('administrator')){
			$style = 'style="top:32px;"';
		}?>

	<div  class="wrapper <?php if(is_front_page()) echo "homepage";?>">
		<div class="top-line default" <?php echo $style;?>  id="menu">
			<div class="container">
				<div class="wrap__toogle clearfix">
					<a href="#mobile-menu" class="toggle-mnu"><span></span></a>
				</div>
				<div class="header-wrap clearfix">
				
					<div class="logo-wrap">
						<a href="/"><img src="<?php echo $get_template_directory_uri ;?>/img/cat_logo.png" alt="Alt"></a>
					</div>

					<div class="top-mnu">
						<?php 
							wp_nav_menu( array(
							'theme_location'  => 'main_menu',
							'menu'            => '', 
							'container'       => false, 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'sf-menu', 
							'menu_id'         => 'main_menu',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							//'items_wrap'      => '<ul class="%2$s">%3$s<li><a class="js-feedback-link" href="javascript:void(0);">Обратная связь</a></li><li><a class="basket js-basket active" href="javascript:void(0);"><svg class="icon icon-basket "><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="'.$get_template_directory_uri.'/img/spritesvg.svg#basket"></use></svg><span>'.$get_cart_contents_count.'</span></a></li></ul>',
							'depth'           => 0,
							'walker'          => '',
						) );			
						?>


					</div>
				</div>
			</div>
		</div>	