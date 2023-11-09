<?php
get_header();
?>

<div class="front-main">
	<article class="front-box-item box-about">
		<div id="round-top-left"></div>
		<div class="content-box about-content">
			<div class="about-title">
				<h2>
					АО “Институт навигации” является основным разработчиком в области
				</h2>
			</div>
			<div class="about-text-box">
				<div class="about-text_left">
					<div class="run-line">
						<div class="run-point"></div>
					</div>
					<div class="about-text_left__text">
						В настоящее время АО «Институт навигации» является одной из ведущих научно-технических организаций отрасли в области разработки технологий изготовления узкоспектральных фотоприемных устройств
					</div>
					
				</div>
				<div class="about-text_right">
					<div class="about-text_right__text">
						Изделия, изготовленные по технологиям, разработанным Обществом, по своим техническим характеристикам находятся на уровне лучших зарубежных аналогов и работают как в составе космических систем, так и на платформах КА
					</div>
					<a class="btn-detailed" href="#">подробнее</a>
				</div>
			</div>
		</div>
	</article>
    <article class="front-box-item box-sputniks">
		<div class="sputnik-box">
            <div class="content-box sputnik-content">
                <div class="sputnik-content-item sputnik-content-text_part1">
                    <div>количество штатный ка - 24</div>
                    <div>высота орбиты - 19 100 км</div>
                    <div>количество плоскостей - 3</div>
                </div>
                <div class="sputnik-content-img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sputniks/glonass_og_big.png" alt="glonass">
                </div>
                <div class="sputnik-content-item sputnik-content-text_part2">
                    <div>большая полуось - 25 420 км</div>
                    <div>период обращения - 40 544 с</div>
                    <div>накллонение - 64,8 </div>
                </div>
            </div>
            <div class="sputnik-box_img">
                <div class="sputnik-img_item sputnik-img_item__1">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sputniks/SC_Glonass-M.png" alt="sputnik-1">
                    <div class="sputnik-title">КА “глонасс-м”</div>
                </div>
                <div class="sputnik-img_item sputnik-img_item__2">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sputniks/SC_Glonass-K.png" alt="sputnik-1">
                    <div class="sputnik-title">КА “глонасс-К”</div>
                </div>
                <div class="sputnik-img_item sputnik-img_item__3">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sputniks/SC_Glonass-K-line.png" alt="sputnik-1">
                    <div class="sputnik-title">КА “глонасс-К2”</div>
                </div>
                <div class="sputnik-img_item sputnik-img_item__4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/sputniks/SC_Glonass-K2.png" alt="sputnik-1">
                    <div class="sputnik-title">КА “глонасс-К2”</div>
                </div>
            </div>
        </div>

		
    </article>
    <article class="front-box-item box-products">
        <div id="round-top-right"></div>
    </article>
</div>

<?php
get_footer();