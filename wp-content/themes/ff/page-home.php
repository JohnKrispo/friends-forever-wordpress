<?php 
$get_template_directory_uri = get_template_directory_uri ();
/*
Template Name: homepage
Template Post Type:  page
*/
get_header(); 

?>


		<header class="header main-header">
			
				<h1 class="tn-atom h1" >Относитесь к кошке,<br>как к ребенку или другу?</h1>
				<div class="inner__block">
					<h3 class="tn-atom__subtitle h3">Мы сделали идеальный корм для этого.</h3>
				</div>
				<a class="btn redcolor scrollToId" href="#shedevr">ПОСМОТРЕТЬ</a>			
			</div>

		</header>

		<section class="features">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="features__title h2">Мы воплощаем вашу нежность и заботу о пушистых членах семьи в превосходной итальянской еде для ваших кошечек.</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/meat.png" alt="">
							<h3 class="t-title h3">Натуральное мясо</h3>
							<p>Только чистое мясо. Никаких субпродуктов и костной муки.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/control.png" alt="">
							<h3 class="t-title h3">Семейный контроль</h3>
							<p>Мы не еще одна корпорация. Нам на самом деле не все равно.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/italy.png" alt="">
							<h3 class="t-title h3">Итальянское качество</h3>
							<p>Это локальные ингредиенты, культура и личные отношения.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/conserv.png" alt="">
							<h3 class="t-title h3">Без консервантов</h3>
							<p>Мы не увеличиваем срок хранения нашей еды такими методами.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/kras.png" alt="">
							<h3 class="t-title h3">Без красителей</h3>
							<p>Все должно пахнуть так, как должно. И мы видим, что кошки это ценят.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/gmo.png" alt="">
							<h3 class="t-title h3">Без ГМО</h3>
							<p>Потому что мы не хотим есть это сами, и не заставляем наших друзей.</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="shedevr" id="shedevr">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<h2 class="h2">Попробуйте шедевр</h2>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row">
					<!--<div class="srollwrap clearfix">
						<div class="fixwidth clearfix">-->
							<div class="col-xs-6 w100">
								<div class="text-center product_card">
									<div class="mark_wrapper">
										<div class="t776__mark">пакет 2 кг</div>
									</div>
									
									<div class="item">
										<a href="#zakaz" class="popup-with-form"><img class="product_foto" src="<?php echo $get_template_directory_uri ;?>/img/2000_turkey_white.jpg"></a>
									</div>
									<div class="product_name">100% Индюшка</div>
									<div class="product_description">для взрослых (от года) кастрированных кошек</div>
									<div class="product_price">990 р.</div>
									<a href="#zakaz_1" class="btn redcolor  popup-with-form">В корзину</a>
								</div>	
							</div>
							<div class="col-xs-6 w100">
								<div class="text-center  product_card">
									<div class="mark_wrapper">
										<div class="t776__mark">пакет 2 кг</div>
									</div>
									<div class="item">
										<a  href="#zakaz" class="popup-with-form"><img class="product_foto" src="<?php echo $get_template_directory_uri ;?>/img/2000_lamb_white.jpg"></a>
									</div>
									<div class="product_name">100% Ягненок</div>
									<div class="product_description">для взрослых (от года) НЕкастрированных кошек</div>
									<div class="product_price">990 р.</div>
									<a href="#zakaz_2" class="btn redcolor popup-with-form">В корзину</a>						
								</div>
							</div>
						<!--</div>
					</div>-->
					
				</div>
			</div>

		</section>



		<section class="lovemade">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-md-6 w100 text-center">
						<img class="image" src="<?php echo $get_template_directory_uri ;?>/img/3_2.jpg" >
					</div>
					<div class="col-xs-6 col-md-6 w100">
						<div class="item">
							<h2 class="h2">Сделано с любовью</h2>
							<p>В нашей еде нет ГМО, красителей, консервантов, субпродуктов и костной муки. Зато там идеальный баланс натурального мяса, специальных масел, злаков и трав, витаминов и минералов. Вся еда производится на семейном заводе в Ломбардии (Италия), и в результате получается корм, который с удовольствием eдят наши пушистые дети и друзья.</p>
							
						</div>
					</div>
				</div>
			</div>		
		</section>
		
		<section class="formula">
			<div class="container">
				<div class="row">
					<div class=" col-xs-6 w100">
						<div class="f-title"><h2 class="h2">Уникальная формула</h2></div>
						<div class="unic">	
							<p>Happy Cat Formula - это результат исследований совместно с Университетом Болоньи. Корма с такой формулой учитывают особенности домашних кошек и обеспечивают все необходимые питательные вещества вместе с удовольствием от еды.</p>	
						</div>
					</div>
					<div class=" col-xs-6 text-center w100">
						<div class="item">
							<img class="image" src="<?php echo $get_template_directory_uri ;?>/img/HCF-05.png" >
						</div>
					</div>
				</div>
			</div>		
		</section>
		
		<section class="balance">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="h2">Идеальный баланс</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/Untitled_design_2.jpg" alt="">
							<p>Идеальное количество натурального мяса для поддержания идеального веса вашей кошечки.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/Untitled_design_3.jpg" alt="">
							<p>Столько, сколько нужно Омега-3 и Омега-6 для здорового сердца и блестящей шерстки.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="item">
							<img src="<?php echo $get_template_directory_uri ;?>/img/Untitled_design_4.jpg" alt="">
							<p>Витамины, минералы и антиоксиданты укрепляют иммунную систему и стоят на страже здоровья.</p>
						</div>
					</div>
				</div>
				<a href="#shedevr" class="btn redcolor scrollToId">Купить уже</a>
			</div>			
		</section>
		

		<?php get_footer();?>	
		
		