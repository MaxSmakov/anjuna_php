<footer>
	<!-- <div class="footer-overlay"></div> -->
	<div class="social-links" id="fotoram">
		<a href="#"><i class="fa fa-2x fa-vk"></i></a>
		<a href="#"><i class="fa fa-2x fa-youtube"></i></a>
		<a href="#"><i class="fa fa-2x fa-facebook"></i></a>
		<a href="#"><i class="fa fa-2x fa-instagram"></i></a> 
	</div>
	<div class="contacts">
		<h2>Контакты</h2>
		<p>8 (905) 702 85 30 - Екатерина <br>indolu@rambler.ru</p>
		<!-- <a href="https://vk.com/anjunaband">https://vk.com/anjunaband</a> -->
	</div>
	<div class="rider">
		<h2>Тех Райдер</h2>
		<p>Скачать</p>
	</div>
	<!-- <div class="vk_groups">
	<h4>Подпишись на нашу группу Вконтакте</h4>
	<div id="vk_groups"></div>
	</div> -->		
</footer>

<!-- группа вк -->
<!-- <script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 1, width: "auto"}, 11300735);
</script> -->

	<!-- скрипты -->
<script type="text/javascript">	
	$(function() {
        	//Плавный скролл по якорям (не нужен ёпты!!!)
       /* $("#arrow").on("click","a", function (event) {
		        //отменяем стандартную обработку нажатия по ссылке
		    event.preventDefault();

		        //забираем идентификатор блока с атрибута href
		    var id  = $(this).attr('href'),

		       //узнаем высоту от начала страницы до блока на который ссылается якорь
		    top = $(id).offset().top;
		        
		        //анимируем переход на расстояние - top за 500 мс
		    $('body,html').animate({scrollTop: top}, 500);
		});*/
         	//Меню навигации:
		var d = 300;
		$('#navigation a').each(function () {
			var $this = $(this);
			var r = Math.floor(Math.random()*41)-20;
			$this.css({'-moz-transform':'rotate('+r+'deg)','-webkit-transform':'rotate('+r+'deg)','transform':'rotate('+r+'deg)'});
			$this.stop().animate({
				'marginTop': '-70px'
			}, d += 150);				
		});			
		$('#navigation > li').hover(
			function () {
				var $this = $(this);
				$('a',$this).stop().animate({
					'marginTop':'-40px'
				}, 200);
			},
			function () {
				var $this = $(this);
				$('a',$this).stop().animate({
					'marginTop':'-70px'
				}, 200);
			}
		);
		//раскрывающeeся БУРГЕР-меню		
		$('.hamburger_btn').on('click', function () {
			$('.hamburger_wrapper').toggleClass('open');
		});
	});                    
</script>



<!-- Подключаем всякие нужные скрипты  -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>