<div class="first-main-block">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="text-top-card">
					<?php if ($top_card): ?>
						<?php foreach ($top_card as $card): ?>
							<h4><?= $card->title; ?></h4>
							<p><?= $card->text; ?></p>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-center justify-content-center">
				<div class="right-top-card">
				   <!--  <button class="btn" data-toggle="modal" data-target="#newProgramModal">Узнать подробности</button> -->
					<a href="/main/schedule" class="btn">Узнать расписание</a>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="slogan">
	<div class="container">
		<h4>Обучение коучингу в Казани и Online по программам Erickson Coaching International и стандартам International
			Coach Federation (ICF)</h4>
	</div>
</section>

<?
$credit_url = 'https://loans.tinkoff.ru/api/partners/v1/lightweight/create';
$credit_shop_id = 'b9d9ac68-e9e9-4322-afb7-d0243db9c7e2';
$credit_showcase = '2381c8a5-8de7-4a84-b304-0bb993093392';
?>
<section class="s-programm-cards">
	<div class="container">
		<h1>Наши программы</h1>
		<div class="row">

			<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="/main/science-and-art">
						<img src="img/programms/1.jpg" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Наука и искусство трансформационного коучинга (ACSTH ICF)</h5>
						<p class="card-text">За четыре месяца вы освоите компетенции профессионального коуча (ICF) и подготовитесь к сертификации Professional Erickson coach.</p>
						<a href="/main/science-and-art" class="link">Подробнее</a>
						<div>
							<a href="https://card.tochka.com/pomdtaegr-onlain_trening_nauka_i_iskusstvo_transformatsionnogo_kouchinga" class="btn btn--pay" target="_blank">Купить</a>
							<button class="btn btn-info" data-toggle="modal" data-target="#credit-program-1">Рассрочка</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="credit-program-1" tabindex="-1" role="dialog" aria-labelledby="giftModalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="giftModalTitle">Наука и искусство трансформационного коучинга (ACSTH ICF)</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Для продолжения укажите свой e-mail и нажмите "Купить в кредит". Вы будете перенаправлены на страницу банка.</p>
							<form action="<?=$credit_url?>" method="post" class="needs-validation" novalidate>
								<input name="shopId" value="<?=$credit_shop_id?>" type="hidden">
								<input name="showcaseId" value="<?=$credit_showcase?>" type="hidden">
								<input name="orderNumber" value="<?=rand(10000,99999)?>" type="hidden">
								<input name="sum" value="140000.00" type="hidden">
								<input name="itemName_0" value="Наука и искусство трансформационного коучинга (ACSTH ICF)" type="hidden">
								<input name="itemQuantity_0" value="1" type="hidden">
								<input name="itemPrice_0" value="140000.00" type="hidden">
								<div class="form-group">
									<label>Ваш E-mail*</label>
									<input name="customerEmail" type="email" class="form-control" placeholder="Введите E-mail" required>
									<div class="valid-feedback"></div>
									<div class="invalid-feedback">Введите пожалуйста E-mail.</div>
								</div>
								<div class="container text-center">
									<div class="contact_block">
										<button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
											Купить в кредит
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


			<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="/main/enneagram">
						<img src="img/programms/2.jpg" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Свет Эннеаграммы: Приручи своих драконов (CCE ICF)</h5>
						<p class="card-text">Модель, которая описывает девять типов личности, присущие им паттерны мышления и поведения, а также бессознательные мотивы, которые стоят за этими паттернами.</p>
						<a href="/main/enneagram" class="link">Подробнее</a>
						<div>
							<a href="https://card.tochka.com/kfwxkrmwi-onlain_trening_eneagramma__v_dvukh_sessiiakh" class="btn btn--pay" target="_blank">Купить</a>
							<button class="btn btn-info" data-toggle="modal" data-target="#credit-program-2">Рассрочка</button>
						 </div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="credit-program-2" tabindex="-1" role="dialog" aria-labelledby="giftModalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="giftModalTitle">Свет Эннеаграммы: Приручи своих драконов (CCE ICF)</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Для продолжения укажите свой e-mail и нажмите "Купить в кредит". Вы будете перенаправлены на страницу банка.</p>
							<form action="<?=$credit_url?>" method="post" class="needs-validation" novalidate>
								<input name="shopId" value="<?=$credit_shop_id?>" type="hidden">
								<input name="showcaseId" value="<?=$credit_showcase?>" type="hidden">
								 <input name="orderNumber" value="<?=rand(10000,99999)?>" type="hidden">
								<input name="sum" value="32000.00" type="hidden">
								<input name="itemName_0" value="Свет Эннеаграммы: Приручи своих драконов" type="hidden">
								<input name="itemQuantity_0" value="1" type="hidden">
								<input name="itemPrice_0" value="32000.00" type="hidden">
								<div class="form-group">
									<label>Ваш E-mail*</label>
									<input name="customerEmail" type="email" class="form-control" placeholder="Введите E-mail" required>
									<div class="valid-feedback"></div>
									<div class="invalid-feedback">Введите пожалуйста E-mail.</div>
								</div>
								<div class="container text-center">
									<div class="contact_block">
										<button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
											Купить в кредит
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>



			<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="/main/basic-course">
						<img src="img/carousel/car3.png" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Базовый курс обучения</h5>
						<p class="card-text">Авторский коучинг-тренинг Мэрилин Аткинсон. Обучение профессиональным базовым навыкам и методам коучинга при поддержке и с использованием материалов Международного Эриксоновского Университета Коучинга.</p>
						<a href="/main/basic-course" class="link">Подробнее</a>
						<div>
							<a href="https://card.tochka.com/ktnoiknmf-bazovyi_kurs_obucheniia_kouchingu" class="btn btn--pay" target="_blank">Купить</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="/main/kvant-um">
						<img src="img/programms/kvantum.jpg" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Квантовый ум: мышление в 4-х квадрантах (CCE ICF)</h5>
						<p class="card-text">Уникальная авторская программа Мэрелин Аткинсон и Питера Стефани.</p>
					   <a href="/main/kvant-um" class="link">Подробнее</a>
					   <div>
						<a href="https://card.tochka.com/isuyyzusp-onlain_trening_kvantovyi_um_myshlenie_v_4kh_kvadrantakh" class="btn btn--pay" target="_blank">Купить</a>
						 <button class="btn btn-info" data-toggle="modal" data-target="#credit-program-3">Рассрочка</button>
					   </div>
					</div>
				</div>
			</div>
			 <div class="modal fade" id="credit-program-3" tabindex="-1" role="dialog" aria-labelledby="giftModalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="giftModalTitle">Квантовый ум: мышление в 4-х квадрантах (CCE ICF)</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Для продолжения укажите свой e-mail и нажмите "Купить в кредит". Вы будете перенаправлены на страницу банка.</p>
							<form action="<?=$credit_url?>" method="post" class="needs-validation" novalidate>
								<input name="shopId" value="<?=$credit_shop_id?>" type="hidden">
								<input name="showcaseId" value="<?=$credit_showcase?>" type="hidden">
								 <input name="orderNumber" value="<?=rand(10000,99999)?>" type="hidden">
								<input name="sum" value="32000.00" type="hidden">
								<input name="itemName_0" value="Квантовый ум: мышление в 4-х квадрантах (CCE ICF)" type="hidden">
								<input name="itemQuantity_0" value="1" type="hidden">
								<input name="itemPrice_0" value="32000.00" type="hidden">
								<div class="form-group">
									<label>Ваш E-mail*</label>
									<input name="customerEmail" type="email" class="form-control" placeholder="Введите E-mail" required>
									<div class="valid-feedback"></div>
									<div class="invalid-feedback">Введите пожалуйста E-mail.</div>
								</div>
								<div class="container text-center">
									<div class="contact_block">
										<button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
											Купить в кредит
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


			<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="/main/management-coaching">
						<img src="img/programms/5.jpg" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Управленческий коучинг</h5>
						<p class="card-text">Программа Международного Эриксоновского Университета коучинга для руководителей.</p>
						<a href="/main/management-coaching" class="link">Подробнее</a>
						<div>
							<a href="https://card.tochka.com/mqudkpsod-onlain_trening_upravlencheskii_kouching" class="btn btn--pay" target="_blank">Купить</a>
					   </div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="/main/parent-as-coach">
						<img src="img/programms/6.jpg" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Родитель как коуч</h5>
						<p class="card-text">Знания и навыки позволяющие построить крепкие, основанные на любви и уважении, отношения с ребенком.</p>
						<a href="/main/parent-as-coach" class="link">Подробнее</a>
					</div>
				</div>
			</div>
		</div>

		<div class="about-credit">
			<button class="btn btn-primary" data-toggle="modal" data-target="#about_credit">Информация о сервисе покупки в кредит</button>
			<div class="modal fade" id="about_credit" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="giftModalTitle">Информация о сервисе покупки в кредит</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="modal-credit-info">
								<img src="/img/credit_1.jpeg" alt="about_credit">
								<img src="/img/credit_2.jpeg" alt="about_credit">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


<?php require_once WWW . '/contact-form.html'; ?>


<!--
<?php if ($carousels): ?>
	<section class="all-programs">
		<div class="container">
			<h1>Наши программы</h1>
			<?php foreach ($carousels

			as $carousel): ?>
			<div class="accordion" id="accordions-all-programs">
				<div class="card">
					<div class="card-header" id="heading<?= $carousel->href; ?>">
						<h2 class="mb-0">
							<button class="btn" type="button" data-toggle="collapse"
									data-target="#collapse<?= $carousel->href; ?>"
									aria-expanded="true" aria-controls="collapse<?= $carousel->href; ?>">
								<?= $carousel->title; ?>
							</button>
						</h2>
					</div>

					<div id="collapse<?= $carousel->href; ?>" class="collapse"
						 aria-labelledby="heading<?= $carousel->href; ?>"
						 data-parent="#accordionExample">
						<div class="card-body">
							<div class="row mt-4 programs-item">
								<div class="col-md-4 px-0">
									<img src="img/carousel/<?= $carousel->img; ?>" alt="<?= $carousel->title; ?>">
								</div>
								<div class="col-md-8 d-flex flex-column justify-content-around">
									<h3><?= $carousel->title; ?></h3>
									<p><?= $carousel->content; ?></p>
									<div class="programs-btn text-right my-3">
										<a href="main/<?= $carousel->href; ?>">подробнее</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<?php endforeach; ?>

			</div>
		</div>
	</section>
<?php endif; ?>
-->


<div class="index_about_ericson py-5">
	<div class="container">
		<div class="max-width_DEV mx-auto">
			<img src="img/erickson_logo_kazan.png" alt="er_online" width="50%">
			<h5 class="mt-4">Международный Эриксоновский Университет  является одной из крупнейших компаний, проводящих обучение коучингу.</h5>
			 <h4>Университет,  с 1980 года, проводит обучение, тренинги, сертификационные программы, школы управления в 102 городах, в 85 странах и на 5 континентах.</h4>
			<p>Выпускники Университета работают в Международной Федерации Коучей, руководят крупнейшими компаниями во всем мире.  Международный Эриксоновский Университет во всех странах присутствия ежегодно выпускает несколько тысяч сертифицированных коучей и тренеров.</p>
			<hr>
			<h3>ЦЕНТРАЛЬНЫЙ ОФИС МЕЖДУНАРОДНОГО ЭРИКСОНОВСКОГО УНИВЕРСИТЕТА НАХОДИТСЯ В ВАНКУВЕРЕ, КАНАДА.</h3>
			<div class="btn_orange py-2">
				<a target="_blank" href="https://erickson.edu/">на сайт erickson.edu</a>
			</div>
		</div>
	</div>
</div>
<div class="index_founder mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img width="100%" src="img/marilyn-atkinson-erickson-coach-training_0.jpg" alt="marilyn">
			</div>
			<div class="col-md-8">
				<h4>Основатель:</h4>
				<h1>Мэрилин Аткинсон</h1>
				<p>Президент Международного Эриксоновского Университета. Доктор психологии, Коуч, всемирно известный
					тренер Мэрилин Аткинсон является автором многих работ, с 1985 года ведет преподавательскую и
					консультативную деятельность в ведущих корпорациях мира, является основателем и президентом
					Международного Эриксоновского Университета (Канада).
					<br>
					<br>
					Президент Международного Эриксоновского
					Университета Мэрилин Аткинсон работает в России на протяжении 16 лет. Мэрилин Аткинсон вырастила
					несколько поколений Российских руководителей, оказала огромное влияние на развитие тренеров и
					бизнес - образования в СНГ, на формирование понятия коучинг.</p>
			</div>
		</div>
	</div>
</div>

<div class="index_ourGoal lg_dis_none mt-5 py-5">
	<div class="container index_ourGoal_IN">
		<h1>Наша цель:</h1>
		<p>трансформировать работу в компаниях, бизнес и способствовать улучшению качества жизни, а также
			поддерживать процесс человеческого развития, что реализуется через коучинговое партнерство.</p>
	</div>
</div>

<!--
<div class="index_students mt-5 py-3">
	<div class="container">
		<h1 class="text-center">Наши студенты:</h1>
		<div class="row mt-4">
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Предприниматели</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Политики</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Менеджеры</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Юристы</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Кадровики</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Тренеры</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Консультанты</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Психологи</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Врачи</p>
				</div>
			</div>
			<div class="col-sm-4 col-6 col-md-3 col-lg-2">
				<div class="index_students_IN px-1">
					<p><img src="img/pers.png" alt="p" width="25px"><br>Педагоги</p>
				</div>
			</div>
		</div>
		<p>Мы обучаем коучинговым компетенциям для работы с изменениями, коучинговым навыкам в области лидерства,
			специалистов для увеличения командных результатов, коучингу в управлении предприятиями, коучинговым
			методам в управлении человеческими ресурсами, коучингу семейных отношений, а также готовим коучей к
			международной сертификации в Международной Федерации Коучинга (ICF).</p>
	</div>
</div>
<div class="index_our_clients container mt-5">
	<h1>Наши клиенты</h1>
	<img src="img/Erickson Coaching Corporate Clients.png" alt="clents" width="100%">
</div>
<div class="pt-5"></div>

<div class="index_ourGoal sm_dis_none mt-5 py-5">
	<div class="container index_ourGoal_IN">
		<h1>Наша цель:</h1>
		<p>трансформировать работу в компаниях, бизнес и способствовать улучшению качества жизни, а также
			поддерживать процесс человеческого развития, что реализуется через коучинговое партнерство.</p>
	</div>
</div>
<div class="pt-5"></div>

<div class="index_programms mt-5">
	<div class="container">
		<h1>Программы</h1>
		<p>Мы обучаем коучинговым компетенциям для работы с изменениями, коучинговым навыкам в области лидерства,
			специалистов для увеличения командных результатов, коучингу в управлении предприятиями, коучинговым
			методам в управлении человеческими ресурсами, коучингу семейных отношений, а также готовим коучей к
			международной сертификации в Международной Федерации Коучинга (ICF).</p>
		<hr>

		<h4>
			ERICKSON COACHING INTERNATIONAL<br/>
			предлагает около 20-ти авторских программ и тренингов.
		</h4>

	</div>
</div>
<div class="py-3"></div>
<div class="index_mostPopular py-5">
	<div class="container">
		<img class="my-4" src="img/erickson_logo_kazan1.png" alt="logo" width="50%">
		<h3>
			Самая популярная программа
		</h3>
		<h3>
			«НАУКА И ИСКУССТВО ТРАНСФОРМАЦИОННОГО КОУЧИНГА»
		</h3>
		<div class="btn_blue py-2">
			<a href="main/science-and-art">Описание программы</a>
		</div>
	</div>
</div>
<div class="py-3"></div>
<div class="container gifts mt-5">
	<table class="table">
		<thead>
		<tr>
			<th colspan="3">Система скидок</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>При оплате 2 модулей</td>
			<td class="text-center">5%</td>
		</tr>
		<tr>
			<td>При оплате 3 модулей</td>
			<td class="text-center">10%</td>
		</tr>
		<tr>
			<td>При оплате 4 модулей</td>
			<td class="text-center">15%</td>
		</tr>
		<tr>
			<td>При предоплате больше чем за 30 дней до начала курса</td>
			<td class="text-center">10%</td>
		</tr>
		<tr>
			<td>2 человека от одной организации</td>
			<td class="text-center">10%</td>
		</tr>
		<tr>
			<td>3 человека от одной организации</td>
			<td class="text-center">15%</td>
		</tr>
		<tr>
			<td>Федеральным клиентам во всех регионах</td>
			<td class="text-center">15%</td>
		</tr>
		<tr>
			<td>Оплата 2 спецкурсов, которые идут подряд</td>
			<td class="text-center">10%</td>
		</tr>
		<tr>
			<td>Многодетные и люди с инвалидностью</td>
			<td class="text-center">30%</td>
		</tr>
		<tr>
			<td>Золотой студент Erickson на все спец курсы после третьего</td>
			<td class="text-center">15%</td>
		</tr>
		</tbody>
	</table>
</div>
<div class="py-3"></div>
-->



<?php require_once WWW . '/contact-form.html'; ?>

<div class="py-3"></div>
<div class="index_team mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="img/group-of-people-watching-on-laptop-1595385.jpg" width="100%" alt="team">
			</div>
			<div class="col-md-8 d-flex flex-column">
				<h4>Наша команда</h4>
				<h1>Erickson Kazan</h1>
				<p class="index_team__text">В команде Эриксоновского Университета работают профессиональные
					сертифицированные коучи. Люди,
					вдохновленные принципами Милтона Эриксона и коучингом, ориентированным на поиск решения. Наши
					сотрудники имеют различное образование, прошли обучение коучингу и регулярно повышают
					квалификацию.</p>
			</div>
		</div>
	</div>
</div>
<div class="py-3"></div>
<div class="index_directions mt-5">
	<div class="container">
		<h3>Направления работы</h3>
		<h2 class="font-cr">ERICKSON KAZAN</h2>
		<h5 class="pt-4">У нас вы можете выбрать:</h5>
		<div class="row">
			<div class="col-sm-6 col-md-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="" data-toggle="modal" data-target="#exampleModalCenter">
						<img src="img/co_1.png" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Индивидуальный коучинг</h5>
						<a href="" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="" data-toggle="modal" data-target="#training_programs">
						<img src="img/co_2.png" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Обучающие программы</h5>
						<a href="main/all-programs" class="btn">Подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 mt-3">
				<div class="card" style="width: 100%;">
					<a href="main/for-business">
						<img src="img/c03.jpg" class="card-img-top" alt="c1">
					</a>
					<div class="card-body">
						<h5 class="card-title">Корпоративным клиентам</h5>
						<a href="main/for-business" class="btn">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php if ($feedbacks): ?>
	<section class="feedback-index">
		<div class="container">
			<h1>Отзывы о нашей работе</h1>
			<div class="row mt-5">
				<div class="col-lg-1 d-flex align-items-center">
					<button class="feedback-prev">&larr;</button>
				</div>
				<div class="col-lg-10 d-flex flex-column justify-content-center align-items-center">
					<?php foreach ($feedbacks as $feedback): ?>
						<div class="feedback-slider fade-slide">
							<img class="" src="img/graduate/<?=$feedback->img;?>" alt="feedback">
							<h5><?=$feedback->autor;?></h5>
							<div class="text-feedback">
								<?=$feedback->text;?>
							</div>
						</div>
					<?php endforeach; ?>

					<div class="slider-dots">
						<?php foreach ($feedbacks as $feedback): ?>
							<div class="dot"></div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-lg-1 d-flex align-items-center">
					<button class="feedback-next">&rarr;</button>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Заявка на индивидуальный коучинг</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="contact_block">
					<form action="main/send" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="name">Ваше имя</label>
							<input name="name" type="text" class="form-control" id="name" placeholder="Введите имя"
								   required>
							<div class="valid-feedback">

							</div>
							<div class="invalid-feedback">
								Введите пожалуйста имя!
							</div>
						</div>
						<div class="form-group">
							<label for="tel">Ваш телефон</label>
							<input name="tel" type="tel" class="form-control" id="tel" placeholder="Введите телефон"
								   required>
							<div class="valid-feedback">

							</div>
							<div class="invalid-feedback">
								Введите пожалуйста телефон!
							</div>
						</div>
						<div class="form-group">
							<label for="email">Ваша электронная почта</label>
							<input name="email" type="email" class="form-control" id="email" placeholder="Введите email"
								   required>
							<div class="valid-feedback">

							</div>
							<div class="invalid-feedback">
								Введите пожалуйста email!
							</div>
						</div>
						<div class="form-group">
							<label for="message">Комментарий (необязательно)</label>
							<textarea name="message" class="form-control" id="message" rows="3"
									  placeholder="Вводите сообщение в это поле"></textarea>
						</div>
						<div class="gifts123">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-check">
										<input name="bonus1" type="checkbox" class="form-check-input" id="gift1">
										<label class="form-check-label" for="gift1">БОНУС 1 – Скачать книгу<br><span>Достижение целей. Аткинсон М.</span></label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-check">
										<input name="bonus2" type="checkbox" class="form-check-input" id="gift2">
										<label class="form-check-label" for="gift2">БОНУС 2 – 10 областей применения
											коучинга<br><span>10 областей применения коучинга</span></label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-check">
										<input name="bonus3" type="checkbox" class="form-check-input" id="gift3">
										<label class="form-check-label" for="gift3">БОНУС 3 – Коучинг на вкус.<br><span>Встреча с практикующим коучем. Вы нам вопросы, Мы вам ответы! Зарегистрируйтесь на сайте или приходите сразу к Нам.</span></label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group mt-4">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
								<label class="form-check-label" for="invalidCheck">
									Согласие на обработку персональных данных
								</label>
								<div class="invalid-feedback">
									Примите пожалуйста условия перед отправкой заявки
								</div>
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="container text-center">
					<div class="contact_block">
						<button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
							Оставить заявку
						</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="training_programs" tabindex="-1" role="dialog" aria-labelledby="training_programsTitle"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="training_programsTitle">Обучающие программы</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<div class="row">
					<div class="col-6">
						<div class="but_l">
							<a href="main/science-and-art">
								<h5>4-х модульная программа</h5>
							</a>
						</div>
					</div>
					<div class="col-6">
						<div class="but_l">
							<a href="main/management-coaching">
								<h5>Управленческий коучинг</h5>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-open-start" tabindex="-1" role="dialog" aria-labelledby="modal-open-start-title"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal-open-start-title">Успей зарегистрироваться!</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<?php if ($top_card): ?>
					<?php foreach ($top_card as $card): ?>
						<h4><?= $card->title; ?></h4>
						<p><?= $card->text; ?></p>
					<?php endforeach; ?>
				<?php endif; ?>
				<form action="main/send-program" method="post" class="needs-validation" novalidate>
					<div class="form-group">
						<label for="name">Ваше имя</label>
						<input name="name" type="text" class="form-control" id="name" placeholder="Введите имя"
							   required>
						<div class="valid-feedback">

						</div>
						<div class="invalid-feedback">
							Введите пожалуйста имя!
						</div>
					</div>
					<div class="form-group">
						<label for="tel">Ваш телефон</label>
						<input name="tel" type="tel" class="form-control" id="tel" placeholder="Введите телефон"
							   required>
						<div class="valid-feedback">

						</div>
						<div class="invalid-feedback">
							Введите пожалуйста телефон!
						</div>
					</div>
					<div class="container text-center">
						<div class="contact_block">
							<button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
								Оставить заявку
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="newProgramModal" tabindex="-1" role="dialog" aria-labelledby="newProgramModalTitle"
	 aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newProgramModalTitle">Узнать подробности о программе</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="main/send-program" method="post" class="needs-validation" novalidate>
					<div class="form-group">
						<label for="name">Ваше имя</label>
						<input name="name" type="text" class="form-control" id="name" placeholder="Введите имя"
							   required>
						<div class="valid-feedback">

						</div>
						<div class="invalid-feedback">
							Введите пожалуйста имя!
						</div>
					</div>
					<div class="form-group">
						<label for="tel">Ваш телефон</label>
						<input name="tel" type="tel" class="form-control" id="tel" placeholder="Введите телефон"
							   required>
						<div class="valid-feedback">

						</div>
						<div class="invalid-feedback">
							Введите пожалуйста телефон!
						</div>
					</div>
					<div class="container text-center">
						<div class="contact_block">
							<button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
								Узнать подробнее
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
