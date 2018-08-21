<?php
$get_template_directory_uri = get_template_directory_uri ();
get_header();
/*
Template Name: aboutru - О нас
Template Post Type:  page
*/
?>		
		<main class="main-content">
			
			<section class="about-section">
				
				<h1 class="h1 text-center">О нас</h1>
			
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="person">
								<div class="person__img">
									<img src="<?php echo $get_template_directory_uri ;?>/img/cutmypic_2.png" alt="">
									
								</div>
								<div class="person__title">Эндрю</div>
								<div class="person_desc">Главный по бизнесу</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="person">
								<div class="person__img">
									<img src="<?php echo $get_template_directory_uri ;?>/img/cutmypic.png" alt="">
								</div>
								<div class="person__title">Яр</div>
								<div class="person_desc">Главный по кошкам</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="person">
								<div class="person__img">
									<img src="<?php echo $get_template_directory_uri ;?>/img/cutmypic_1.png" alt="">
								</div>	
								<div class="person__title">Анита</div>
								<div class="person_desc">Главная по счастью</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="description">
								<p>Привет, нас зовут Эндрю, Анита и Яр. <br>Добро пожаловать в наше сообщество кошачьих друзей!</p>

								<p>Мы обожаем домашних животных в целом и кошек в частности. Они наши настоящие друзья и помощники. С ними мы делимся радостями и проблемами, они помогают, когда нам грустно и радуются, когда нам весело. </p>

								<p>За более чем 20 лет проживания бок о бок, мы с ними попробовали почти весь корм, который смогли найти. Нам попадался плохой и хороший, не очень дорогой и тот, после которого мы задумывались о дополнительном заработке. Единственное, чего мы так и не встретили, - это семейного и личного подхода и бренда, который относился бы к кошкам так, как мы сами, - с любовью и заботой. Мы хотели найти компанию, чьи ценности бы соответствовали нашим, но вокруг были одни корпорации. </p>

								<p>Поэтому мы сделали такую компанию сами. </p>

								<p>С самого начала мы решили, что нашей миссией будет создание крафтовых качественных продуктов для владельцев домашних животных, которые относятся к ним как к друзьям и даже как к детям. Мы сами будем искать и разрабатывать формулы продуктов, привлекать лучших партнеров для производства, создавать комьюнити людей, чьи ценности похожи на наши, и наполнять эмоциями наши продукты. </p>

								<p>Мы придерживаемся определенных ценностей, которые лежат в основе того, что мы делаем: </p>
								<ul class="dots-style">
									<li>делать добро </li>
									<li>устанавливать связи </li>
									<li>обеспечивать безусловное качество </li>
									<li>дарить радость нашим питомцам </li>
									<li>получать удовольствие</li>
								</ul>

								<p>Присоединяйтесь к нам!</p>

							</div>
						</div>
					</div>
				</div>	
			</section>

		</main>

<?php get_footer();?>