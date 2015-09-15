<?php
/**
 * Template Name: News Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bshvil
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main common-page" role="main">
			
			<section class="main__section white">
				<div class="main__section-inner">
					<div class="news__wrapper">
						<h1 class="news__title">כתבות בעיתונות</h1>
						<div class="news">
							<div class="news__avatar">
								<img src="<?php echo get_template_directory_uri(); ?>/images/avatar1.png" alt="news">
							</div>
							<div class="news__text">
								<h2 class="news__title">לשם ובחזרה / עמנואל רוזן</h2>
								<span class="news__date"> פורסם:  15.05.09</span>
								<p class="news__paragraph">ב־6 ביוני 1982, בתוך שדה קוצים כואב, שכבנו כולנו עם הפרצוף בתוך האדמה וחיכינו שזה יעבור. הייתי ילד בן 22, כתב צבאי בשירות קבע של העיתון "במחנה". לידי שכבו ילדים אחרים, רובם צעירים יותר, לוחמי גדוד 890 של הצנחנים - ומולנו, כנראה מתוך אחד הבתים בכפר המחורבן שלמרגלותיו התפזרנו, הסתתר מישהו עם רובה וטיווח בנו.<a href="#" class="news__link">קראו עוד</a></p>
							</div>
						</div>

						<div class="news">
							<div class="news__avatar">
								<img src="<?php echo get_template_directory_uri(); ?>/images/avatar2.png" alt="news">
							</div>
							<div class="news__text">
								<h2 class="news__title">לשם ובחזרה / עמנואל רוזן</h2>
								<span class="news__date"> פורסם:  15.05.09</span>
								<p class="news__paragraph">ב־6 ביוני 1982, בתוך שדה קוצים כואב, שכבנו כולנו עם הפרצוף בתוך האדמה וחיכינו שזה יעבור. הייתי ילד בן 22, כתב צבאי בשירות קבע של העיתון "במחנה". לידי שכבו ילדים אחרים, רובם צעירים יותר, לוחמי גדוד 890 של הצנחנים - ומולנו, כנראה מתוך אחד הבתים בכפר המחורבן שלמרגלותיו התפזרנו, הסתתר מישהו עם רובה וטיווח בנו.<a href="#" class="news__link">קראו עוד</a></p>
							</div>
						</div>

						<div class="news">
							<div class="news__avatar">
								<img src="<?php echo get_template_directory_uri(); ?>/images/avatar3.png" alt="news">
							</div>
							<div class="news__text">
								<h2 class="news__title">לשם ובחזרה / עמנואל רוזן</h2>
								<span class="news__date"> פורסם:  15.05.09</span>
								<p class="news__paragraph">ב־6 ביוני 1982, בתוך שדה קוצים כואב, שכבנו כולנו עם הפרצוף בתוך האדמה וחיכינו שזה יעבור. הייתי ילד בן 22, כתב צבאי בשירות קבע של העיתון "במחנה". לידי שכבו ילדים אחרים, רובם צעירים יותר, לוחמי גדוד 890 של הצנחנים - ומולנו, כנראה מתוך אחד הבתים בכפר המחורבן שלמרגלותיו התפזרנו, הסתתר מישהו עם רובה וטיווח בנו.<a href="#" class="news__link">קראו עוד</a></p>
							</div>
						</div>

					</div>

					<div class="form__wrapper">
						<h2 class="form__title">תודה...</h2>
						<p class="form__description"><strong>מעוניינים לתרום?</strong></p>
						<p class="form__description">אנא מלאו פרטים וניצור עמכם קשר בהקדם</p>
						<div class="wpcf7">
							<form action="" class="form">
								<p>
									<span><input type="text" placeholder="שם מלא"></span>
								</p>
								<p>
									<span><input type="text" placeholder="טלפון"></span>
								</p>
								<p>
									<span><input type="email" placeholder="דוא”ל"></span>
								</p>
								<p>
									<span class="helper"></span>
									<span><input type="submit" value="שלח"></span>
								</p>
							</form>
						</div>
					</div>

					<div class="form__wrapper">
						<h2 class="form__title">מועמד למסע?</h2>
						<p class="form__description"><strong>מעוניינים להצטרף למסע?</strong></p>
						<p class="form__description">אנא מלא/י פרטים וניצור עמכם קשר בהקדם</p>
						<div class="wpcf7">
							<form action="" class="form">
								<p>
									<span><input type="text" placeholder="שם מלא"></span>
								</p>
								<p>
									<span><input type="text" placeholder="טלפון"></span>
								</p>
								<p>
									<span><input type="email" placeholder="דוא”ל"></span>
								</p>
								<p>
									<span class="helper"></span>
									<span><input type="submit" value="שלח"></span>
								</p>
							</form>
						</div>
					</div>

				</div>
			</section><!-- section -->

			<section class="main__section white">
				<div class="main__section-inner">
					<div class="carousel carousel-yt carousel-last divide">
						<h3 class="carousel__title">בשביל המחר ב - <span>YOU TUBE</span></h3>
						<div class="owl-carousel owl-carousel-yt">
							<div class="carousel__slide">
								<div class="carousel__slide-video"><img src="<?php echo get_template_directory_uri(); ?>/images/yt_slide1.jpg" alt="" class="carousel__slide-img">
									<a href="https://www.youtube.com/embed/9R-6PqE11fU?autoplay=1" class="carousel__slide-playbtn fancybox.iframe">Play</a>
								</div>
								<a href="#" class="carousel__slide-video_link"><h4 class="carousel__slide-title">סרטון תדמית</h4>
								<p class="carousel__slide-paragraph">משתתפי מסע מדבר יולי 2015</p></a>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-video"><img src="<?php echo get_template_directory_uri(); ?>/images/yt_slide2.jpg" alt="" class="carousel__slide-img">
									<a href="https://www.youtube.com/embed/9R-6PqE11fU?autoplay=1" class="carousel__slide-playbtn fancybox.iframe">Play</a>
								</div>
								<a href="#" class="carousel__slide-video_link"><h4 class="carousel__slide-title">סרטון תדמית</h4>
								<p class="carousel__slide-paragraph">משתתפי מסע מדבר יולי 2015</p></a>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-video"><img src="https://placeimg.com/600/300/any" alt="" class="carousel__slide-img">
									<a href="https://www.youtube.com/embed/9R-6PqE11fU?autoplay=1" class="carousel__slide-playbtn fancybox.iframe">Play</a>
								</div>
								<a href="#" class="carousel__slide-video_link"><h4 class="carousel__slide-title">סרטון תדמית</h4>
								<p class="carousel__slide-paragraph">משתתפי מסע מדבר יולי 2015</p></a>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-video"><img src="https://placeimg.com/600/301/any" alt="" class="carousel__slide-img">
									<a href="https://www.youtube.com/embed/9R-6PqE11fU?autoplay=1" class="carousel__slide-playbtn fancybox.iframe">Play</a>
								</div>
								<a href="#" class="carousel__slide-video_link"><h4 class="carousel__slide-title">סרטון תדמית</h4>
								<p class="carousel__slide-paragraph">משתתפי מסע מדבר יולי 2015</p></a>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-video"><img src="https://placeimg.com/600/303/any" alt="" class="carousel__slide-img">
									<a href="https://www.youtube.com/embed/9R-6PqE11fU?autoplay=1" class="carousel__slide-playbtn fancybox.iframe">Play</a>
								</div>
								<a href="#" class="carousel__slide-video_link"><h4 class="carousel__slide-title">סרטון תדמית</h4>
								<p class="carousel__slide-paragraph">משתתפי מסע מדבר יולי 2015</p></a>
							</div>
						</div>
					</div> 

				</div>
			</section><!-- section -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
