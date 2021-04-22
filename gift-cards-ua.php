<?php
/**
 * Template Name: Подарочные сертификаты UA
 *
 * @package PDP
 */

get_header(); ?>
	<section id="gift-cards-header">
		<div class="container">
			<?php
			if( function_exists('yoast_breadcrumb') ){
				yoast_breadcrumb( '<div class="breadcrumbs" id="breadcrumbs">','</div>' );
			} ?>

			<div class="row row_1-2 gap_col_80px flex_alignCenter">
				<div class="col"></div>

				<div class="col">
					<div class="title mb_10px mb_20px_m">
						<h1 class="title__heading txt_fs-64px txt_lh-64px txt_fs-36px_m txt_lh-36px_m">подарункові сертифікати</h1>
					</div>

					<div class="textBlock mb_35px txt_fs-24px txt_lh-24px txt_fs-18px_m txt_lh-18px_m">
						<p>Особливі умови для корпоративних клієнтів: діє дисконтна система при замовленні <strong>від 10 сертифікатів</strong></p>
					</div>

					<a href="#gift-cards-form" class="btn-default">замовити</a>
				</div>
			</div>
		</div>
	</section>

	<section id="gift-cards">
		<div class="container">
			<div class="row row_1-2 gap_col_80px">
				<div class="col">
					<div class="textBlock txt_fs-24px txt_lh-24px mb_40px_m txt_fs-18px_m txt_lh-18px_m">
						<p>подарунковий сертифікат буде <strong>по-справжньому</strong> цінним і не припадатиме пилом на полиці</p>
					</div>
				</div>

				<div class="col">
					<div class="row row_1-1 gap_col_70px gap_row_54px" id="gift-cards-icons-large">
						<div class="iconBox">
							<svg width="56" height="56" fill="none"><path d="M29.75 36.75h7v10.5l10.5-10.5h3.48a3.51 3.51 0 003.52-3.51V5.25a3.5 3.5 0 00-3.5-3.5h-28a3.5 3.5 0 00-3.5 3.5v10.5" stroke="#392BDF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><path d="M46.88 16.11a2.62 2.62 0 100 5.25 2.62 2.62 0 000-5.25h0zM27.17 16.11a2.62 2.62 0 100 5.25 2.62 2.62 0 000-5.25h0zM37.03 16.11a2.62 2.62 0 100 5.25 2.62 2.62 0 000-5.25z" stroke="#392BDF" stroke-width="3"/><path d="M15.75 38.5a7.87 7.87 0 100-15.75 7.87 7.87 0 000 15.75zM29.75 54.25a14.13 14.13 0 00-28 0" stroke="#392BDF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
							<div class="iconBox__title txt_fs-16px txt_lh-16px">Крім обслуговування, власник сертифікату отримує консультацію від ТОП-майстрів із досвідом 10+ років</div>
						</div>

						<div class="iconBox">
							<svg width="55" height="45" fill="none"><rect x="1.5" y="16.5" width="39" height="27" rx="3.5" stroke="#392BDF" stroke-width="3"/><circle cx="40" cy="15" r="13.5" fill="#F9F9F9" stroke="#392BDF" stroke-width="3"/><path d="M34.2 18.1c-1 0-2-.3-2.6-1l1-1.2c.5.5 1 .7 1.6.7l.5-.1c.2-.2.3-.3.3-.5s-.1-.4-.3-.5l-.8-.2h-.7l-.3-.9 1.5-1.3H32v-1.4h4.5V13L35 14.2c1.1.3 1.7.9 1.7 1.8 0 .7-.3 1.2-.7 1.6-.5.3-1 .5-1.8.5zm5.8 0c-.8 0-1.4-.2-1.9-.7-.5-.5-.8-1.3-.8-2.4 0-1 .3-1.8.8-2.5.5-.6 1.2-1 2.2-1 .8 0 1.5.3 2 .8l-.7 1.2c-.5-.3-.9-.5-1.3-.5a1 1 0 00-.8.4c-.2.2-.3.5-.4 1 .4-.4.9-.5 1.4-.5.6 0 1 .2 1.4.5.5.4.7.8.7 1.5a2 2 0 01-.8 1.6c-.4.4-1 .6-1.8.6zm-.7-1.6c.2.2.4.3.7.3.2 0 .5-.1.6-.3.2-.1.3-.3.3-.6 0-.2-.1-.4-.3-.5a.9.9 0 00-.6-.3c-.3 0-.5.1-.7.3l-.2.5c0 .3 0 .5.2.6zm6.4 1.6c-1 0-1.9-.3-2.6-1l1-1.1c.5.4 1 .6 1.5.6.3 0 .6 0 .7-.2.2 0 .3-.3.3-.5s-.1-.4-.3-.5a1 1 0 00-.7-.2 2 2 0 00-1 .3l-1-.6.2-3.2H48v1.4h-2.8l-.1 1c.3-.2.7-.2 1-.2.6 0 1.1.1 1.5.5.5.3.7.8.7 1.5a2 2 0 01-.8 1.6c-.4.4-1 .6-1.8.6z" fill="#392BDF"/><path stroke="#392BDF" stroke-width="3" d="M29 22.5H1M16 37.5H6"/></svg>
							<div class="iconBox__title txt_fs-16px txt_lh-16px">Подарунковий сертифікат <span style="display: inline-block;">PIED-DE-POULE</span> буде дійсний рівно 365 днів із дня покупки</div>
						</div>

						<div class="iconBox">
							<svg width="52" height="52" fill="none"><path d="M20.3 20a1 1 0 00-1 1 1 1 0 001 1 1 1 0 001-1 1 1 0 00-1-1zM47.9 27.4a3 3 0 003-3.8l-2.6-10a5.2 5.2 0 00-4.4-4c.6-.7 1-1.7 1-2.8v-1a4.8 4.8 0 00-9.6 0v1c0 1 .4 2 1 2.9-2.2.2-4 1.7-4.5 3.9l-2.5 10a3 3 0 003 3.8h.4L31 33.5a1.9 1.9 0 001.8 2.4h2v11.8a3.1 3.1 0 005.2 2.3 3.1 3.1 0 005.2-2.3V36h2a1.9 1.9 0 001.8-2.4l-1.6-6.3h.4zM37.3 5.8a2.8 2.8 0 015.6 0v1a2.8 2.8 0 01-5.6 0v-1zm.6 43.2c-.6 0-1.1-.5-1.1-1.2V36H39v11.8c0 .7-.5 1.2-1.2 1.2zm5.5-1.2a1.2 1.2 0 01-2.3 0V36h2.3v11.8zm3.4-23.2L44.4 15a1 1 0 00-1.9.5L47.2 34H33l4.6-18.4a1 1 0 10-1.9-.5l-2.4 9.5s0 0 0 0c0 .5-.5.8-1 .8h0a1.1 1.1 0 01-1.1-1.4l2.5-10a3.2 3.2 0 013.2-2.4h6.4c1.5 0 2.8 1 3.2 2.4L49 24a1.1 1.1 0 01-1.1 1.4s0 0 0 0c-.5 0-1-.3-1-.8z" fill="#392BDF" stroke="#392BDF" stroke-width=".5"/><path d="M15.7 9.6H15c.6-.8 1-1.8 1-2.8v-1a4.8 4.8 0 00-9.6 0v1c0 1 .3 2 .9 2.8h-.7c-3 0-5.6 2.5-5.6 5.5v12.5a3 3 0 004.5 2.8v17.2A3.3 3.3 0 0011 50a3.3 3.3 0 005.7-2.4V30.4c.4.2.9.3 1.4.3a3 3 0 003-3v-2.3a1 1 0 00-2 0v2.2a1.1 1.1 0 01-2.2 0v-11a1 1 0 00-2 0v10.6H7.3V16.6a1 1 0 00-2 0v11a1.1 1.1 0 01-2.2 0V15.1c0-2 1.6-3.5 3.6-3.5h9.1c2 0 3.6 1.6 3.6 3.5v1.5a1 1 0 002 0v-1.5c0-3-2.6-5.5-5.6-5.5zm-.9 38a1.4 1.4 0 01-2.7 0V29.1h2.7v18.5zM7.4 29.1h2.8v18.5a1.4 1.4 0 01-2.8 0V29.1zm.9-22.3v-1a2.8 2.8 0 015.7 0v1a2.8 2.8 0 01-5.7 0zM27.4 28h-2.8a1 1 0 000 2h2.8a1 1 0 000-2zM27.4 32.3h-2.8a1 1 0 000 2h2.8a1 1 0 000-2z" fill="#392BDF" stroke="#392BDF" stroke-width=".5"/></svg>
							<div class="iconBox__title txt_fs-16px txt_lh-16px">Наш сертифікат стане чудовим подарунком як жінкам, так і чоловікам</div>
						</div>

						<div class="iconBox">
							<svg width="42" height="42" fill="none"><path d="M37.6 5.5H35V3.4c0-.6-.5-1.1-1-1.1-.7 0-1.2.5-1.2 1v2.2H22.1V3.4c0-.6-.5-1.1-1-1.1-.7 0-1.2.5-1.2 1v2.2H9.1V3.4a1.1 1.1 0 00-2.2 0v2H4.4C2 5.5 0 7.5 0 10v25.4c0 2.5 2 4.4 4.4 4.4h33.2c2.5 0 4.4-2 4.4-4.4V10c0-2.4-2-4.4-4.4-4.4zm2.2 29.8c0 1.2-1 2.2-2.1 2.2h0H4.3c-1.2 0-2.2-1-2.2-2.2v0V10c0-1.2 1-2.2 2.2-2.2h2.5v1.5c0 .6.5 1.1 1 1.1.7 0 1.2-.5 1.2-1V7.6h10.8v1.5a1.1 1.1 0 002.2 0V7.7h10.7v1.5a1.1 1.1 0 002.2 0V7.7h2.6c1.3 0 2.2 1 2.2 2.2v25.4z" fill="#392BDF" stroke="#392BDF" stroke-width=".5"/><path d="M18.1 14.8h-1.9c-.6 0-1 .5-1 1 0 .7.4 1.2 1 1.2h2c.5 0 1-.5 1-1.1 0-.6-.5-1.1-1-1.1zM25.7 14.8h-1.9c-.6 0-1 .5-1 1 0 .7.4 1.2 1 1.2h2c.5 0 1-.5 1-1.1 0-.6-.4-1.1-1-1.1zM33.4 14.8h-1.9c-.6 0-1 .5-1 1 0 .7.4 1.2 1 1.2h2c.5 0 1-.5 1-1.1 0-.6-.5-1.1-1-1.1zM18.1 22.3h-1.9c-.6 0-1 .5-1 1.1 0 .6.4 1.1 1 1.1h2c.5 0 1-.5 1-1 0-.7-.5-1.2-1-1.2zM10.5 22.3h-2c-.6 0-1 .5-1 1.1 0 .6.4 1.1 1 1.1h2c.5 0 1-.5 1-1 0-.7-.4-1.2-1-1.2zM25.7 22.3h-1.9c-.6 0-1 .5-1 1.1 0 .6.4 1.1 1 1.1h2c.5 0 1-.5 1-1 0-.7-.4-1.2-1-1.2zM33.4 22.3h-1.9c-.6 0-1 .5-1 1.1 0 .6.4 1.1 1 1.1h2c.5 0 1-.5 1-1 0-.7-.5-1.2-1-1.2zM18.1 29.8h-1.9c-.6 0-1 .5-1 1 0 .7.4 1.1 1 1.1h2c.5 0 1-.4 1-1s-.5-1.1-1-1.1zM10.5 29.8h-2c-.6 0-1 .5-1 1 0 .7.4 1.1 1 1.1h2c.5 0 1-.4 1-1s-.4-1.1-1-1.1zM25.7 29.8h-1.9c-.6 0-1 .5-1 1 0 .7.4 1.1 1 1.1h2c.5 0 1-.4 1-1s-.4-1.1-1-1.1z" fill="#392BDF" stroke="#392BDF" stroke-width=".5"/></svg>
							<div class="iconBox__title txt_fs-16px txt_lh-16px">Сертифікатом можна скористатися в будь-який день, будь-який час, у будь-якому салоні</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gift-cards-form">
		<div class="container">
			<div class="row">
				<div class="title txt_center mb_40px">
					<h2 class="title__heading txt_fs-36px txt_lh-36px txt_fs-24px_m txt_lh-24px_m">Замовити подарунковий сертифікат</h2>
				</div>

				<div class="title txt_center mb_20px d_none_m">
					<h3 class="title__heading txt_lh-28px">номінали сертифіката можуть бути</h3>
				</div>

				<div class="row row_1-1 gap_col_40px gap_row_24px mb_50px">
					<div class="iconBox">
						<svg width="26" height="26" fill="none"><path d="M13 25A12 12 0 011 13 12 12 0 0113 1a12 12 0 0112 12 12 12 0 01-12 12zm0-22.5a10.5 10.5 0 100 21 10.5 10.5 0 000-21z" fill="#392BDF" stroke="#392BDF" stroke-width=".5"/><path d="M13 12.3a1.9 1.9 0 111.9-2 .8.8 0 001.5 0c0-1.5-1.1-2.9-2.6-3.2v-.8a.8.8 0 00-1.6 0V7a3.4 3.4 0 00.8 6.7 1.9 1.9 0 11-1.9 1.8.8.8 0 00-1.5 0c0 1.6 1.1 3 2.7 3.3v.9a.8.8 0 001.4 0v-.9a3.4 3.4 0 00-.7-6.6z" fill="#392BDF" stroke="#392BDF" stroke-width=".5"/></svg>
						<div class="iconBox__title txt_fs-16px txt_lh-16px">Будь-яка грошова сума</div>
					</div>

					<div class="iconBox">
						<svg width="28" height="28" fill="none"><path d="M22 8c-3.1 0-6.5 3-8 4.5C12.5 11 9.1 8 6 8c-3.8 0-6 2.2-6 6s2.2 6 6 6c3.1 0 6.5-3 8-4.5 1.5 1.5 4.9 4.5 8 4.5 3.8 0 6-2.2 6-6s-2.2-6-6-6zM6 18c-2.7 0-4-1.3-4-4s1.3-4 4-4c2.2 0 5.1 2.5 6.6 4-1.5 1.5-4.4 4-6.6 4zm16 0c-2.2 0-5.1-2.5-6.6-4 1.5-1.5 4.4-4 6.6-4 2.7 0 4 1.3 4 4s-1.3 4-4 4z" fill="#392BDF"/></svg>
						<div class="iconBox__title txt_fs-16px txt_lh-16px">Безліміт на день</div>
					</div>

					<div class="iconBox">
						<svg width="24" height="24" fill="none"><path d="M23 11H6.9a1 1 0 100 2H23a1 1 0 100-2zM23 4H6.9a1 1 0 100 2H23a1 1 0 100-2zM23 18H6.9a1 1 0 100 2H23a1 1 0 000-2zM1.3 6.2a1.3 1.3 0 100-2.5 1.3 1.3 0 000 2.5zM1.3 13.3a1.3 1.3 0 100-2.6 1.3 1.3 0 000 2.6zM1.3 20.3a1.3 1.3 0 100-2.5 1.3 1.3 0 000 2.5z" fill="#392BDF"/></svg>
						<div class="iconBox__title txt_fs-16px txt_lh-16px">Будь-яка послуга</div>
					</div>

					<div class="iconBox">
						<svg width="24" height="24" fill="none"><path d="M21.51 3.13h-1.5v-1.2a.63.63 0 00-.63-.62.63.63 0 00-.63.62v1.2h-6.12v-1.2a.63.63 0 00-.63-.62.63.63 0 00-.62.62v1.2h-6.2v-1.2a.63.63 0 00-.62-.62.63.63 0 00-.62.62v1.2H2.49A2.53 2.53 0 000 5.66v14.53a2.5 2.5 0 002.5 2.5h19a2.5 2.5 0 002.5-2.5V5.67a2.52 2.52 0 00-2.49-2.53zm1.25 17.06c0 .69-.55 1.25-1.24 1.25h0H2.48c-.68 0-1.24-.55-1.24-1.24v0V5.65c0-.7.56-1.28 1.24-1.28h1.45v.9c0 .35.28.63.62.63.35 0 .63-.28.63-.63v-.9h6.19v.9c0 .35.28.63.62.63.35 0 .63-.28.63-.63v-.9h6.12v.9a.63.63 0 101.25 0v-.9h1.51c.7 0 1.25.59 1.25 1.28v14.53z" fill="#392BDF" stroke="#392BDF" stroke-width=".7"/><path d="M16.57 9.57c-1.78 0-3.71 1.73-4.57 2.6-.86-.87-2.79-2.6-4.57-2.6C5.28 9.57 4 10.85 4 13c0 2.15 1.28 3.43 3.43 3.43 1.78 0 3.71-1.73 4.57-2.6.86.87 2.79 2.6 4.57 2.6 2.15 0 3.43-1.28 3.43-3.43 0-2.15-1.28-3.43-3.43-3.43zM7.43 15.3c-1.52 0-2.29-.77-2.29-2.29s.77-2.29 2.29-2.29c1.26 0 2.92 1.42 3.79 2.29-.86.87-2.53 2.29-3.8 2.29zm9.14 0c-1.26 0-2.92-1.42-3.79-2.29.86-.87 2.53-2.29 3.8-2.29 1.5 0 2.28.77 2.28 2.29s-.77 2.29-2.29 2.29z" fill="#392BDF" stroke="#392BDF" stroke-width=".7"/></svg>
						<div class="iconBox__title txt_fs-16px txt_lh-16px">Безліміт на рік</div>
					</div>
				</div>

				<?php get_template_part( 'templates/forms/gift-card-order' ); ?>
			</div>
		</div>
	</section>
<?php
get_footer();