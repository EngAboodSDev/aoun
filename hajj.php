<?php
if (!isset($_COOKIE['User_id'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#795548">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="HandheldFriendly" content="true">
	<meta name="msapplication-TileColor" content="#795548">
	<meta name="msapplication-config" content="none">
	<meta name="screen-orientation" content="portrait-primary">
	<title>دليل الحج</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css" />
	<style>
		.card {
			width: 1000px;
			border-radius: 10px;
			box-shadow: 0px 2px 8px 0px #3f3942;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		h1 {
			color: #795548;
			font-style: normal;
			font-weight: bold;
		}

		.set-p {
			padding-left: 15px;
			padding-right: 15px;
			text-align: right;
		}

		.image {
			object-fit: cover;
			width: 100%;
			height: 100%;
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px;
		}

		.line {
			height: 1px;
			background-color: #E0E0E0;
		}

		@media screen and (max-width: 575px) {
			.image {
				height: auto;
				border-top-left-radius: 10px;
				border-bottom-left-radius: 0px;
				border-top-right-radius: 10px;
			}
		}
	</style>

</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container" style="background: #a1887f !important;z-index: 50 !important; padding-top: 0px; padding-bottom: 0px;">
				<a class="navbar-brand" href="#">عَـــــــــــــون</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="home.php">الرئيسية</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="hajj.php">الحج</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="umrah.php">العمرة</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="chat.php">التواصل مع المتطوعين </a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="news.php">الاخبار</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="translate.php">الترجمة</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="FAQ.php">مساعدة</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?logout=1">تسجيل الخروج</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<section class="container">
			<h1 style="text-align: center; background-color: #a1887f; padding: 10px; border-radius: 10px; color: #fff; margin-top: 20px;">
				مناسك الحج </h1>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_1.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>1-
										أحرم وأعلن نيتك أداء الحج</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">تشتمل معظم برامج الحج بالتمتع على فاصل من عدة أيام بين مناسك العمرة والحج حسب جدول الرحلة لذا فإنهم يتركون الإحرام بعد العمرة بغية التسهيل، لكن الحج يتطلب مناسك طهارة وتواضعًا أمام الله كالعمرة، لذا يحرم الحجاج من جديد عند بدء الحج. استحم وقص شعرك وارتد ثياب الإحرام المناسبة كما من قبل. ردد نيةً أخرى حين تستعد بقول اللهم إني أريد الحج فيسره لي وتقبله مني، ثم ردد التلبية ثلاثًا.
										تستمر مناسك الحج خمسة أيام من الثامن إلى الثاني عشر من ذي الحجة وعليك الحفاظ على إحرامك لثلاثة أيام تقريبًا ممتنعًا عن الأنشطة المحظورة حتى انتهاء هذه المدة.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_2.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>2-
										توجه إلى منى</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">يتجه الحجاج إلى منى في أول يوم من الحج وهي بلدةٌ بالقرب من مكة حيث يمضون بقية اليوم، وهنا توفر الحكومة السعودية وسائل الراحة، وهي آلافٌ وآلاف من الخيام البيضاء المكيفة التي توفر إقامةً مؤقتةً للحجاج سنويًا. لا توجد مناسك كبيرة في الليلة الأولى لذا قد تمضي وقتك في الصلاة والذكر مع الحجاج الآخرين إن أردت. يختار العديد من الحجاج صلاة الصلوات الخمس وهي الظهر والعصر والمغرب والعشاء والفجر.[١٠]
										لاحظ أن النساء والرجال يبقون في خيام منفصلة مجاورة لبعضها البعض بمنى. لا يستطيع الرجال دخول خيام النساء رغم أنه يمكن للأزواج التفاعل مع بعضهم البعض.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_3.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>3-
										توجه إلى عرفات للوقوف به</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">ينتقل الحجاج إلى عرفات في اليوم الثاني وهو جبلٌ قريب. لا بد أن يبلغ الحجاج عرفات بعد الظهيرة لأن الوقوف به يبدأ عند هذا الوقت. يقف الحجاج بسفح عرفات حيث يصلون ويذكرون الله من وقت بدء هبوط الشمس وحتى غيابها تمامًا.
										لا توجد أدعية مخصصة للوقوف بعرفات لذا تضرع إلى الله من قلبك بإخلاص. يحب العديد من الحجاج قضاء الوقت في الدعاء التأمل في حياتهم ومستقبلهم ومكانهم من العالم.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_4.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>4-
										قم بالصَلاة في مزدلفة</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">توجه الحجاج إلى مكان يسمى مزدلفة بين منى وعرفات بعد غروب الشمس، وهنا يصلون المغرب ويمضون الليلة نائمين على الأرض تحت السماء المفتوحة.
										يجمعون الحصى في الصباح الذي سيستخدمونه لرمي الجمرات في وقت لاحق من النهار.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_5.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>5-
										ارم الجمرات في منى</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">تجه الحجاج عائدين إلى منى قبل شروق الشمس، وهنا يشاركون في طقس يرمز لرجم الشيطان. يرمي الحجاج سبع جمرات متتاليات في معلم حجري خاص يسمى جمرة العقبة.
										يمكن أن يكون هذا الطقس شديد الازدحام والتوتر والعاطفية. لقد حدثت وفيات نتيجة الدوس رغم ندرتها، لذا لا يجب على كبار السن والمرضى والمصابين أن يشاركوا. يمكنهم القيام بهذا لاحقًا في المساء أو جعل أحد الأصدقاء يقوم بهذا النسك نيابة عنهم</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_6.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>6-
										انحر</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">من الضروري أن تنحر حيوانًا (كقربان) لله بعد رمي الجمرات. كان كل حاج يقوم بهذا الأمر بشكل فردي فيما مضى لكن اليوم يشيع شراء سند القربان كثيرًا بين الحجاج. تدل هذه السندات على أن الحيوان قد نُحِر على اسمك. سيقوم شخص مؤهل بذبح خروف لكل حاج (أو جمل لكل سبعة حجاج) وتعبئة اللحم وإرساله إلى المجتمعات الإسلامية في أنحاء العالم لإطعام الفقراء.
										يمكن النحر في أي وقت من الأيام العاشر أو الحادي عشر أو الثاني عشر من ذي الحجة. انتظر حتى ما بعد الرمي للقيام بالنحر إذا كنت ستؤجل الرمي لأي سبب.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_7.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>7-
										احلق شعرك أو قصه</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">يجب أن يقص الحجاج شعرهم كما في العمرة. يستطيع الرجال حلق رؤوسهم بالكامل أو تقصير الشعر قليلًا (قد يرغب الرجل حلق رأسه بالكامل إذا كان قد اختار تقصير الشعر في العمرة رغم أن هذا ليس واجبًا). لا تحلق النساء شعورهن وإنما يأخذن منها قليلًا بالقص.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/umrah_4.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>8-
										قم بأداء الطواف والسعي</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">يتوجب على الحجاج أداء مناسك الطواف حول الكعبة والسعي بين جبلين الصفا والمروة كما في العمرة. تؤدى المناسك بشكل مطابق لكيفية أدائها أثناء العمرة لكن يستحب كثيرًا أن تُؤدَّى بعد شعائر رمي الجمرات والنحر وقص الشعر.
										تتحلل من الإحرام بعد إتمام الطواف والسعي، ويمكنك استئناف أنشطتك التي امتنعت عنها سابقًا.
										عد إلى منى في نهاية اليوم الثالث واقض الليل في الصلاة.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_9.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>9-
										كرر الرمي بعد غروب الشمس في اليومين الرابع والخامس</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">لابد أن تقوم برمي الجمرات مجددًا في منى. لن ترمي الحصى في جمرات العقبة فقط هذه المرة وإنما في معلمين آخرين هما الجمرة الأولى والجمرة الوسطى.
										ارم الجمرات عند الجمرة الأولى أولًا ثم اذكر الله وتضرع إليه مع رفع يديك (ما من أدعية محددة لذا يمكنك الدعاء كما تشاء). كرر هذا في الجمرة الوسطى، وأخيرًا ارم الجمرات عند جمرة العقبة لكن بعدها لن يكون عليك الدعاء ويمكنك العودة للبيت.
										كرر هذا النسك بعد غروب الشمس في اليوم الخامس.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-4 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="card border-0">
						<div class="row set-p justify-content-center">
							<div class="col-sm-4 px-0">
								<img class="image" src="img/haj_10.jfif">
							</div>
							<div class="col-sm-8">
								<div class="row px-3 mt-4 mb-3">
									<h1>10 -
										قم بأداء طواف الوداع</h1>
								</div>
								<div class="line"></div>
								<div class="row px-3 mb-3">
									<p class="text-muted mb-0">وصل حجك لنهايته أخيرًا؛ أتمم أي أشياء لم تكملها في مكة أو حولها أولًا مثل التسوق أو لقاء الأصدقاء أو العائلة بعد إتمام الحج. لابد أن تنتظر حتى آخر إقامتك في مكة لأداء طواف الوداع قبل مغادرتها إذا كنت ستبقى فيها لبضعة أيام بعد الحج. طواف الوداع هو الطواف الأخير وهو المشي حول الكعبة سبعًا كما سبق.[١٢] فكر مليًا أثناء طواف الوداع فيما شعرت به وفكرت فيه خلال رحلة الحج وكم أنت محظوظٌ حتى يختارك الله لزيارة بيته واذكر الله كثيرًا. عليك أن تذهب لجمع أغراضك وأمتعتك على الفور بعد أن تنتهي حتى تغادر إلى الوطن. يجوز لك شراء الطعام إذا احتجته لسفرك إن شاء الله إذ أن هذا أمرٌ مختلفٌ عن التسوق ويرتبط برحلة العودة.
										يفضل العديد من الحجاج زيارة المدينة المنورة – ثاني أقدس مدينة في الإسلام – بعد إتمام الحج، وهناك يمكنك زيارة أماكن مقدسة مثل المسجد النبوي. لا يعد الإحرام ضروريًا لزيارة المدينة المنورة.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</main>

	<footer class="bg-light py-3 mt-5">
		<div class="container text-center">
			<p>جميع الحقوق محفوظة لدى موقع عون لمساعدة الحجاج والمعتمرين &copy; 2023</p>
		</div>
	</footer>
</body>

</html>