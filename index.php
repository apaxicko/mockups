<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Journey</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css" media="only screen and (min-width:480px)">
	<link rel="stylesheet" href="css/mstyle.css" media="only screen and (max-width:480px)">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
</head>
<body class="page">

		<div class="top">
			<header class="header">

				<div class="header__line">
					<img src="img/logo.png" alt="my journey | simple way to do it today" class="header__logo">
				</div>

				<ul class="header__social social">
					<li><a href=""><i class="social__facebook social__item"></i></a></li>
					<li><a href=""><i class="social__twitter social__item"></i></a></li>
					<li><a href=""><i class="social__google social__item"></i></a></li>
				</ul>

			</header>

			<h1 class="top__title">
				Hello! You are looking at MyJourney HTML theme.
				<br>
				Express your thought and emotions about Journey of your life.
			</h1>
		</div>


		<div class="slider">
			<ul class="slider__list fix">
				<li><img src="img/picture1.png" alt="slide 1" class="slider__pic"></li>
				<li><img src="img/picture2.png" alt="slide 2" class="slider__pic"></li>
			</ul>	
		</div>



		<div class="features">
			<div class="features__item features__item_1">
				<img src="img/counter1.png" alt="light and fast">
				<h3 class="features__title">light and fast</h3>
				<div class="features__border border"></div>
				<p class="features__text">Clean & Beautiful Design, HTML5 & CSS3
				valid code provide good readability 
				and smooth performance.</p>
			</div>

			<div class="features__item features__item_2">
				<img src="img/counter2.png" alt="responsive design">
				<h3 class="features__title">responsive design</h3>
				<div class="features__border border"></div>
				<p class="features__text">Responsive designed and Retina Ready. 
				MyJourney will look perfect on any 
				device you can imagine.</p>
			</div>

			<div class="features__item features__item_3">
				<img src="img/counter1.png" alt="easy to customize">
				<h3 class="features__title">easy to customize</h3>
				<div class="features__border border"></div>
				<p class="features__text">Optimized and valid code using the latest  technologies allows to make changes in the page structure of the template.</p>
			</div>
		</div>



		<div class="content">
			<div class="content__pic">				
					<img src="img/text-pic.png" alt="slide 1" class="slider__pic">
			</div>
			
			<div class="content__text">
				<h2 class="content__title">So simple, so beautiful</h2>
				<p class="content__article article_1">MyJourney HTML template is a landing page with clean structure and 
				beautiful minimalistic design. It can be useful in so many ways, 
				including the most obvious, whis is to Tell a story.</p>
				<p class="content__article article_2">Optimized and valid code using the latest HTML5 and CSS3 technologies 
				allows to make changes in the page structure of the template as it is
				requared by your needs.</p>
			</div>
		</div>



		<div class="info">
			<div class="info_r">
				<div class="info__pic">					
						<img src="img/s2-pic1.jpg" alt="slide 1" class="slider__pic">					
				</div>				
			</div>	

			<div class="info_l">
				<h2 class="info__title_l">Right here, right now</h2>
				<p class="info__text_l">MyJourney is all about being useful when you need nice and simple way to tell the people about what you've seen and felt about something important. Something that really means a lot.</p>
				<button class="info__btn_l">More information</button> 
				<p class="info__get_l">or<span class="info__get_span"> get it right now!</span></p>
			</div>		

	
		</div>



		<div class="follow-slider">
			<div class="follow-slider__i">
				<ul class="slider__list">
					<li class="follow-slider__item"><img src="img/bird.jpg" alt="bird" class="follow-slider__img"><p class="follow-slider__text">First of many freebies from #PixelBuddha on @dribbble <br>
					<a href="https://dribbble.com/shots/plates" class="follow-slider__link">https://dribbble.com/shots/plates</a> Follow us to be in touch!</p>
					<p class="follow-slider__signature"><span>@PixelBuddha</span> long ago</p></li>

					<li class="follow-slider__item"><img src="img/google.png" alt="google" class="follow-slider__img"><p class="follow-slider__text">We have comunity on google+<br>
					<a href="https://plus.google.com" class="follow-slider__link">https://plus.google.com</a> follow us</p>
					<p class="follow-slider__signature"><span>@apaxicko</span></p></li>

					<li class="follow-slider__item"><img src="img/fb.png" alt="fb" class="follow-slider__img"><p class="follow-slider__text">Latest news only on our facebook account<br>
					<a href="https://www.facebook.com" class="follow-slider__link">https://www.facebook.com</a> Subscribe on facebook</p>
					<p class="follow-slider__signature"><span>designer</span></p></li>
				</ul>
			</div>
		</div>



		<footer class="footer">
			<h2 class="footer__title">Subscribe to our newsletter</h2>
			<form action="#" method="POST">
				<input type="text" class="footer__field" placeholder="Your email adress">
				<button class="footer__btn"></button>
			</form>
			<p class="footer__text">Subscribe now if you want to recieve updates and news via email.
				<br>Don’t worry, it won’t happen often.
			</p>
			<div class="footer__border border"></div>
			<ul class="footer__social social">
				<li><a href=""><i class="social__facebook social__item"></i></a></li>
				<li><a href=""><i class="social__twitter social__item"></i></a></li>
				<li><a href=""><i class="social__google social__item"></i></a></li>
			</ul>
			<img src="img/footer.jpg" alt="footer" class="footer__background">
		</footer>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script>
	$(document).ready(function(){
		$('.footer__field').placeholder();

		var width = document.body.clientWidth;   	

    	$('.slider__list').bxSlider({
    		auto:true,
    		autoStart:true,
    		speed:500,
    		controls:false,
    		pause:2000
    	});
	});
</script>

</body>
</html>
