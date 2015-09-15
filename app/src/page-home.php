<?php
/**
 * Template Name: Homepage
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
		<main id="main" class="site-main" role="main">
			
			<section class="main__section white">
				<div class="main__section-inner">
					<div class="description">
                        <?php echo get_the_content(); ?>
						<p class="description__paragraph">עמותת “בשביל המחר” קמה עבור לוחמים ולוחמות ישראלים אשר השתחררו מהצבא, נותרו עם פגיעה פנימית שאינה מובחנת בעיני המתבונן אך מורגשת היטב לכל אחד ואחת מהם. (השריטה שלא נראית) להם תעניק העמותה את “טופס הטיולים” הרגשי הנדרש להם לטובת עיבוד, פרידה ואריזה מחדש של חוויות לחימה</p>
						<p class="description__paragraph">המסלול אליו יוזמנו, מתקיים במסגרת תוכנית מובנית ומתודית. מסעות בסביבת טבע, מלווה על ידי טובי אנשי המקצוע, אלה יחד מהווים “מסע שחרור”, המקנה להם כלים יעילים ומוכחים, לקידומם ולהפיכתם לאזרחים במיטבם , יצרניים ופוריים עמותת “בשביל המחר” רואה עצמה כמגשימה של החובה המוסרית והציונית לפעול ולסייע לצעירים אלה, אשר פעלו ופועלים להגנתה, ובכך להיטיב את חייהם ולתרום לחוסנה של החברה בישראל.</p>
						<h1 class="description__title">כל לוחם ראוי לקבל ולחוות את מסע השחרור הזה...</h1>
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
				</div>

			</section><!-- section -->
			<section class="main__section grey">
				
				<div class="main__section-inner">

					<div class="carousel carousel-first">
						<h3 class="carousel__title">מסעות שחרור בארץ</h3>
						<div class="owl-carousel owl-carousel-pic">
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="<?php echo get_template_directory_uri(); ?>/images/slide4.jpg" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/400/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/300/400/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/300/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/600/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/300/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/300/400/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
						</div>
					</div> <!-- 1st carousel -->

					
					<div class="carousel carousel-second">
						<h3 class="carousel__title">מסעות שחרור בחו”ל</h3>
						<div class="owl-carousel owl-carousel-pic">
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
							<div class="carousel__slide">
								<div class="carousel__slide-img_wrap"><img src="https://placeimg.com/500/500/any" alt="" class="carousel__slide-img"></div>
								<div class="carousel__slide-decription">
									<h4 class="carousel__slide-title">הר יללת התנים</h4>
									<p class="carousel__slide-date">גדוד 99 / יולי 2014</p>
									<p class="carousel__slide-paragraph">אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים. אם נתקרב, נגלה שלחלק מהמושכים בחבל חסרים אברי גוף, אחרים פגועי ראש או אברים אחרים אבל שום דבר לא עוצר אותם. כולם מושכים בחבל בנחישות ולכולם ברור: אין מפסידים בתחרות הזאת. רק מנצחים.</p>
									<a href="#" class="carousel__slide-link">Learn more...</a>
								</div>
							</div>
						</div>
					</div>	<!-- 2nd carousel -->

					<div class="carousel carousel-yt carousel-last">
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
					</div> <!-- 3rd carousel -->
				</div>

			</section><!-- section -->
			<section class="main__section white">
				<div class="main__section-inner">
						<div class="post">
							<h3 class="post__title">רשמים וחוויות מסע</h3>
							<h4 class="post__subtitle">אני כל – כך רוצה שזה ישתנה וזה השינוי!!</h4>
							<p class="post__paragraph">היום, במבט לאחור על המסע אני גאה להגיד שהוא שינה את חיי, או לפחות פתח פתח לשינוי. הפעם אני מבקשת שיהיה לי את הכוח לא לשכוח את המסע ואת מה שחוויתי בו!! אני מפחדת לשכוח את התחושות שחשתי, את התבונות שהבנתי.. המסע הזה גרם לי להבין ששנתיים חיית במערה, עם 12 מלאכים, מערה שחורה… שלא מצאתי את היציאה, כי כנראה לא חיפשתי אותה.. היום אני נלחמת למצוא אותה או לפחות להאיר אותה ולהכניס אליה את כל הקרובים אליי….<br> היום, בארץ, אני מתחרטת על שלא שתפתי כמה אנשים בחלקים מהסיפור שלי ובגלל זה היום, אני משתפת את כל מי שקרוב לי וכל מי שחשוב לי שידע, אני רוצה להרגיש רצויה, מוקפת, אני לא רוצה להרגיש בודדה יותר. אומנם היום, שבועיים אחרי בערך, אני עדיין מרגישה לבד, אני עדיין בוכה, אני עדיין כבויה, אבל אני ככ רוצה שזה ישתנה וזה השינוי!!<br> תודה – תודה על החשיבה על המסע, תודה על החשיבה עליי בהקמת המסע, תודה לכל מי שתמך בי במהלך המסע הזה, מצאתי חברים חדשים לחיים חדשים!!!<br> עם המון אהבה ותקווה לשינוי,<br> לינוי – זאת שלא רוצה להרגיש לבד יותר…</p>
							<a href="#" class="post__link">קראו עוד</a>
						</div>
					
					<div class="form__wrapper form__wrapper-alternate">
						<h2 class="form__title">מועמד למסע?</h2>
						<p class="form__description"><strong>מעוניינים להצטרף למסע? </strong></p>
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
			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
