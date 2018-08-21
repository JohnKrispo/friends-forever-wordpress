<?php
$get_template_directory_uri = get_template_directory_uri ();
get_header();
/*
Template Name: contactsru - contacts
Template Post Type:  page
*/
?>			
		<main class="main-content ">
			
			<section class="about-section">
				
				<h1 class="h1 text-center">Контакты</h1>
				<div class="description subtitle">
					<p>Мы любим получать сообщения и отвечать на них.</p>
				</div>

			
				<div class="container">
					<div class="row">
						<div class="col-sm-5 col-sm-offset-1">
							<div class="description">
								<div class="description__title">Для прессы:</div>
								<div class="description__content">press@friendsforever.pet </div>

								<div class="description__title">Есть идея или предложение?</div>
								<div class="description__content">business@friendsforever.pet </div>

								<div class="description__title">Просто написать:</div>
								<div class="description__content">hello@friendsforever.pet  </div>

								<div class="contact_line">
									<p>Офис в РФ: СПб, Каменноостровский пр. 26-28, лит А</p>
									<p>Офис в США: 254 5th Avenue, NYC, NY, USA</p>
								</div>
			
							</div>
						</div>
						<div class="col-sm-5">
							<form id="send-modal" class=" page__contants ajaxform">
							   
								<div class="form-group clearfix">

									<div class="col-lg-12">
									    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
									</div>
								</div>

								<div class="form-group clearfix">

									<div class="col-lg-12">
									    <input type="text" class="form-control" id="name" name="name" placeholder="Имя и Фамилия"  required="">
									</div>
								</div>

								<div class="form-group clearfix">
									<div class="col-lg-12">
									    <textarea rows="5" type="text" class="form-control" id="message" name="message" placeholder="Сообщение"></textarea>
									</div>
								</div>								
							    <div class="buttons ">
							    	<div class="col-lg-12">
							    		 <button class="btn redcolor" id="send">Отправить</button>
							    	</div>

							    </div>
							
							</form>
						</div>
					</div>
				</div>

			</section>
									

		</main>

		<?php get_footer();?>