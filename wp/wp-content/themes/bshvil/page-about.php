<?php
/**
 * Template Name: About Page
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
					<div class="description">
						<h1 class="description__title">אודות העמותה</h1>
						<img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" alt="About">
						<p class="description__paragraph">עמותת “בשביל המחר” קמה עבור לוחמים ולוחמות ישראלים אשר השתחררו מהצבא, נותרו עם פגיעה פנימית שאינה מובחנת בעיני המתבונן אך מורגשת היטב לכל אחד ואחת מהם. (השריטה שלא נראית) להם תעניק העמותה את “טופס הטיולים” הרגשי הנדרש להם לטובת עיבוד, פרידה ואריזה מחדש של חוויות לחימה.</p>
						<p class="description__paragraph">המסלול אליו יוזמנו, מתקיים במסגרת תוכנית מובנית ומתודית. מסעות בסביבת טבע, מלווה על ידי טובי אנשי המקצוע, אלה יחד מהווים “מסע שחרור”, המקנה להם כלים יעילים ומוכחים, לקידומם ולהפיכתם לאזרחים במיטבם , יצרניים ופוריים עמותת “בשביל המחר” רואה עצמה כמגשימה של החובה המוסרית והציונית לפעול ולסייע לצעירים אלה, אשר פעלו ופועלים להגנתה, ובכך להיטיב את חייהם ולתרום לחוסנה של החברה בישראל.</p>
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
								<div class="carousel__slide-video"><img src="https://placeimg.com/600/301/any" alt="" class="carousel__slide-img">
									<a href="https://www.youtube.com/embed/9R-6PqE11fU?autoplay=1" class="carousel__slide-playbtn fancybox.iframe">Play</a>
								</div>
								<a href="#" class="carousel__slide-video_link"><h4 class="carousel__slide-title">סרטון תדמית</h4>
								<p class="carousel__slide-paragraph">משתתפי מסע מדבר יולי 2015</p></a>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-video"><img src="https://placeimg.com/600/302/any" alt="" class="carousel__slide-img">
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
