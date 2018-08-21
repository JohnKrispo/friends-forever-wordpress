	$(function() {


	$('form.ajaxform').submit(function(e){
		//if($(this).hasClass("ajaxcalc")) diafan_ajax.init(this); 

		e.preventDefault();
		console.log("ajaxform");
		var base_url = window.location.origin;
		var form  = $(this);

		var name     = $('[name=name]', form)
		var phone     = $('[name=phone]', form);
		var mail      = $('[name=email]', form);
		var message     = $('[name=message]', form);

		
		var error     = 0;

		if(phone.val() == ''){
		mail.addClass('error');
		error = 1;
		}else mail.removeClass('error');

	  // if(!isValidEmailAddress(mail.val())){
	  //   mail.addClass('error');
	  //   error = 1;
	  // }else mail.removeClass('error');
	 

		if(error == 0 ){


			var data = new FormData(this);
			
			data.append("action","sendform");
			//data.append("nonce_code", myajax.nonce);

			
			$.ajax({
			  type: "POST",
			  url: MyAjax.ajaxurl,
				contentType: false,
				processData: false,
				cache: false,
			//	headers: { 'cache-control': 'no-cache' }, // fix for IOS6 (not tested)
				dataType: 'json',
				//data: {"action":"sendform","nonce_code":myajax.nonce+form,"price":1400000,"txt":"..."},
			//	timeout: 7000,

				data: data,
			  //data: form.serialize()+'&action=sendform&nonce_code='+myajax.nonce,
			  beforeSend: function(){
				$.magnificPopup.open({
				  items: {
					src: '<div class="white-popup"></div>'
				  },
				  type: 'inline'
				});
				var magnificPopup = $.magnificPopup.instance;
				magnificPopup.updateStatus('loading', '<img src="/wp-content/themes/ff/img/loading-slider.gif" ><br>Отправляю...');
			  },
			  success: function(msg){


			    if(msg.flag == "success"){
					$.magnificPopup.open({
					  items: {
						src: '#thanks'
					  },
					  type: 'inline'
					});
					
					var magnificPopup = $.magnificPopup.instance;
					
					setTimeout(function(){
					//	magnificPopup.close();
					}, 8000);
			     }else{
					var magnificPopup = $.magnificPopup.instance;
					magnificPopup.updateStatus('loading', '<span style="color:red;">Ошибка отправки письма! <br>Попробуйте еще раз.</span>');
                    // form.find('div.fail').html('Ошибка! Попробуйте еще раз.');
                 }
			   
				// window.location.href = "thanks.html";
			   // form.trigger("reset");

			  },
              error: function (request, status, error) {
console.log('ОШИБКИ AJAX запроса: ' + status );
                    if(status==500){
                        alert('Ошибка при добавлении комментария');
                    } else if(status=='timeout'){
                        alert('Ошибка: Сервер не отвечает, попробуй ещё.');
                    } else {
                        // ворпдрессовские ошибочки, не уверен, что это самый оптимальный вариант
                        // если знаете способ получше - поделитесь
                        var errormsg = request.responseText;
console.log(request + status + error);
                      //  var string1 = errormsg.split("<p>");
                      //  var string2 = string1[1].split("</p>");
                      //  alert(string2[0]);
                    }
                },
			});
		 
		}
		
		 return false;
	});

		$("a.scrollToId").mPageScroll2id({
			offset: 70
		});
		$('input[type=number]').styler({
			selectSearch: true,
		});


		$(".sf-menu").superfish({
			delay: 200,
			speed: "fast",
			cssArrows: false
		})
		.after("<div id='mobile-menu'>").clone().appendTo("#mobile-menu");
		$("#mobile-menu").find("*").attr("style", "");
		$("#mobile-menu").children("ul").removeClass("sf-menu")
		.parent().mmenu({
			extensions : [ 'widescreen', 'theme-white', 'pagedim-black' ],
			navbar: {
				title: "Меню"
			}
		});

		$(".toggle-mnu").click(function() {
			$(this).addClass("on");
		});

		var api = $("#mobile-menu").data("mmenu");
		api.bind("closed", function () {
			$(".toggle-mnu").removeClass("on");
		});


	});


	var $menu = $("#menu");
	
	 jQuery(window).scroll(function(){
		 if ( $(this).scrollTop() > 50 && $menu.hasClass("default") ){
				 $menu.removeClass("default").addClass("fixed");  $(".top_menu .top_btn").css('display', 'inline-block');
		 } else if($(this).scrollTop() <= 50 && $menu.hasClass("fixed")) {
				 $menu.removeClass("fixed").addClass("default"); $(".top_menu .top_btn").css('display', 'none');
		 }
			
	 });//scroll

	jQuery(document).ready(function(){
			$('.grid-product--id-110485330 button.form-control__button').magnificPopup({
				items: {
					src: '#ecwid-store-14294057',
				},
				callbacks: {
					open: function() {
						$('.ec-grid').css('display', 'none');

						Ecwid.openPage('product', {'id': 110485330});
					},
					close: function() {
						$('.ec-grid').css('display', 'block');
						Ecwid.openPage('category', {});
					}
				}
			// (optionally) other options
			});

			$('.grid-product--id-110068119  button.form-control__button').magnificPopup({
				items: {
					src: '#ecwid-store-14294057',
				},
				callbacks: {
					open: function() {
						$('.ec-grid').css('display','none');
						Ecwid.openPage('product', {'id': 110068119});

					},
					close: function() {
						$('.ec-grid').css('display', 'block');
						Ecwid.openPage('category', {});
					}
				}
			// (optionally) other options
			});
			

		var magnificPopup = $.magnificPopup.instance;
		Ecwid.OnCartChanged.add(function(cart){
			console.log(cart);
			/*Ecwid.openPage('product', {'id': 110068119});
			console.log(magnificPopup);
					magnificPopup.open({
				  items: {
					src: '#ecwid-store-14294057'
				  },
				  callbacks: {
					open: function() {
						
						
					},
					close: function() {
						
					}
				},
				  type: 'inline'

				  // You may add options here, they're exactly the same as for $.fn.magnificPopup call
				  // Note that some settings that rely on click event (like disableOn or midClick) will not work here
				}, 0);	*/
			//if (page.type == "CART") {
				//Ecwid.init();
				//Ecwid.openPage('product', {'id': 110068119});
			//}
			/*if (page.type == "CATEGORY") {
				Ecwid.openPage('product', {'id': 110068119});
				magnificPopup.open({
				  items: {
					src: '#ecwid-store-14294057'
				  },
				  callbacks: {
					open: function() {
						$('.ec-grid').css('display','none');
						Ecwid.openPage('product', {'id': 110068119});

					},
					close: function() {
						$('.ec-grid').css('display', 'block');
						Ecwid.openPage('category', {});
					}
				},
				  type: 'inline'

				  // You may add options here, they're exactly the same as for $.fn.magnificPopup call
				  // Note that some settings that rely on click event (like disableOn or midClick) will not work here
				}, 0);				
			}*/

		});
				$('.grid-product--id-110068119 .grid-product__button, .grid-product--id-110068119 button.form-control__button').on('click', function(){
					//Ecwid.openPage('product', {'id': 110068119});
					$.magnificPopup.open({
					  items: {
						src: '#ecwid-store-14294057'
					  },
					  callbacks: {
						open: function() {
							$('.ec-grid').css('display','none');
							Ecwid.openPage('product', {'id': 110068119});

						},
						close: function() {
							$('.ec-grid').css('display', 'block');
							Ecwid.openPage('category', {});
						}
					},
					  type: 'inline'

					  // You may add options here, they're exactly the same as for $.fn.magnificPopup call
					  // Note that some settings that rely on click event (like disableOn or midClick) will not work here
					}, 0);
					
				});
		Ecwid.OnPageLoaded.add(function(page) {
			
//alert('load');
			var str = $('html#ecwid_html body#ecwid_body .ec-size .ec-store .grid-product--id-110068119 .grid-product__sku-inner').text();
			//Обрезаем конец:
			var from = str.search('Артикул'); 
			var to = str.length;
			var newstr = str.substring(7,to);
			//console.log(newstr);
			$('html#ecwid_html body#ecwid_body .ec-size .ec-store .grid-product--id-110068119 .grid-product__sku-inner').text(newstr);
			
			var str1 = $('html#ecwid_html body#ecwid_body .ec-size .ec-store .grid-product--id-110485330 .grid-product__sku-inner').text();
			//Обрезаем конец:
			var from = str1.search('Артикул'); 
			var to1 = str1.length;
			var newstr1 = str1.substring(7,to1);
			//console.log(newstr1);
			$('html#ecwid_html body#ecwid_body .ec-size .ec-store .grid-product--id-110485330 .grid-product__sku-inner').text(newstr1);
			
			
			$('.details-product-purchase__controls .form-control__button').on('click', function(){
				//alert('cart');
				Ecwid.openPage('cart');
			});
		
			$('.mfp-close').on('click', function(){
			//	alert('close');
				 Ecwid.init();
//				 Ecwid.openPage('category');
				
			});
			
			if (page.type == "CATEGORY") {	//button.form-control__button
				$('.grid-product--id-110068119 .grid-product__button, .grid-product--id-110068119 button.form-control__button').on('click', function(){
					//Ecwid.openPage('product', {'id': 110068119});
					$.magnificPopup.open({
					  items: {
						src: '#ecwid-store-14294057'
					  },
					  callbacks: {
						open: function() {
							$('.ec-grid').css('display','none');
							Ecwid.openPage('product', {'id': 110068119});

						},
						close: function() {
							$('.ec-grid').css('display', 'block');
							Ecwid.openPage('category', {});
						}
					},
					  type: 'inline'

					  // You may add options here, they're exactly the same as for $.fn.magnificPopup call
					  // Note that some settings that rely on click event (like disableOn or midClick) will not work here
					}, 0);
					
				});
				

				$('.grid-product--id-110485330 .grid-product__button, .grid-product--id-110485330 button.form-control__button').on('click', function(){
					Ecwid.openPage('product', {'id': 110485330});
					$.magnificPopup.open({
						callbacks: {
							open: function() {
								$('.ec-grid').css('display', 'none');

								Ecwid.openPage('product', {'id': 110485330});
							},
							close: function() {
								$('.ec-grid').css('display', 'block');
								Ecwid.openPage('category', {});
							}
						},
					  items: {
						src: '#ecwid-store-14294057'
					  },
					  type: 'inline'

					  // You may add options here, they're exactly the same as for $.fn.magnificPopup call
					  // Note that some settings that rely on click event (like disableOn or midClick) will not work here
					}, 0);
					
				});
			}

			//if (page.type == "CATEGORY") {
			$('.grid-product__image, .ec-minicart, .grid-product__title, .grid-product__price,  .grid-product__sku-inner').magnificPopup({
				items: {
					src: '#ecwid-store-14294057',
				},
				callbacks: {
					open: function() {
					// Will fire when this exact popup is opened
					// this - is Magnific Popup object

					},
					close: function() {
						Ecwid.openPage('category', {});
					}
				}
			// (optionally) other options
			});
			//} Ecwid.openPage('category');
			 if (page.type == "CART") {
				$('html#ecwid_html body#ecwid_body .ecwid').css('max-width','570px');
				$('html#ecwid_html body#ecwid_body .ecwid').css('margin','50px auto');
				$('.mfp-wrap.mfp-close-btn-in.mfp-auto-cursor.mfp-ready').css('background-color','transparent');

				$('html#ecwid_html body#ecwid_body .ec-size.ec-size--s .ec-store .ec-cart').css('display', 'block');
				$('html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-store .ec-cart__sidebar').css('width', '100%');
				$('html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-store .ec-cart__body').css('width', '100%');
				  
			  }else{
				$('html#ecwid_html body#ecwid_body .ecwid').css('max-width','100%');
				$('html#ecwid_html body#ecwid_body .ecwid').css('margin','0 auto');
				$('.mfp-wrap.mfp-close-btn-in.mfp-auto-cursor.mfp-ready').css('background-color','#fff');

				$('html#ecwid_html body#ecwid_body .ec-size.ec-size--s .ec-store .ec-cart').css('display', 'flex');
				$('html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-store .ec-cart__sidebar').css('width', '400px');
				$('html#ecwid_html body#ecwid_body .ec-size.ec-size--l .ec-store .ec-cart__body').css('width', 'calc(100% - 400px)');

			  }
		});
		
	}); 
	 window.addEventListener("beforeunload", function (event) {
		//Ecwid.openPage('category');
	});
	 
    $(document).ready(function(){
		
		
		




	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 0) {
	            $('#scroller').fadeIn();
	        } else {
	            $('#scroller').fadeOut();
	        }
	    });

	    $('#scroller').click(function () {
	        $('body,html').animate({
	            scrollTop: 0
	        }, 400);
	        return false;
	    });





		 
		 $('.popup-with-form').magnificPopup({
			type: 'inline',
			preloader: false,
			focus: '#name',
			closeOnBgClick: false,
			fixedContentPos: true,
			overflowY: 'scroll',
			preloader: true,
			mainClass: 'mfp-fade',
			//  mainClass: 'mfp-fade',
			//  removalDelay: 700,
			// When elemened is focused, some mobile browsers in some cases zoom in
			// It looks not nice, so we disable it:
			callbacks: {
				beforeOpen: function() {

					this.st.mainClass = this.st.el.attr('data-effect');

					if($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#name';
					}
					

				}
			},
		});

    });
	
	/* if(window.location.href.indexOf("cart") > -1) {
       Ecwid.openPage('cart');
    }*/
	





	

