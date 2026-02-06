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
	<title>دليل العمرة</title>
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
			<div class="container">
				<a class="navbar-brand" href="#">عون</a>
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
							<a class="nav-link" href="index.php?logout=1">الخروج</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<h1 style="text-align: center; background-color: #a1887f; padding: 10px; border-radius: 10px; color: #fff;  margin-top: 20px;">
			مناسك العمرة </h1>
		<div class="container-fluid px-4 py-5 mx-auto">
			<div class="row d-flex justify-content-center">
				<div class="card border-0">
					<div class="row set-p justify-content-center">
						<div class="col-sm-4 px-0">
							<img class="image" src="img/umrah_1.jfif">
						</div>
						<div class="col-sm-8">
							<div class="row px-3 mt-4 mb-3">
								<h1>1- الإحرام</h1>
							</div>
							<div class="line"></div>
							<div class="row px-3 mb-3">
								<p class="text-muted mb-0"> الإحرام حالةٌ مقدسةٌ من الطهارة التي يجب أن ينويها جميع المسلمين قبل أداء مناسك الحج والعمرة والتي يتحتم الحفاظ عليها خلال فترة أداء الشعائر. يتطلب الإحرام أفعالًا جسديةً وتغيرات سلوكية لكن لا يلتبس عليك الأمر. تعلن حالة الدخول في النسك روحانيًا بإعلان المرء نيته لأداء الحج والعمرة مخلصًا لله وبترديد التلبية، لذا لا يكون إحرام المرء كاملًا حين يكون في التغيير الخارجي فقط بدون عقد النية الصادقة في قلبه. يدخل الرجال والنساء في الإحرام بطرق مختلفة، انظر أدناه للتفاصيل:
									الرجال: احلق شعرك ومشطه وقص شعر وجهك أو احلقه وقلم أظافرك وأزل شعر الجسم الزائد. استحم (أو توضأ أو اغتسل) بنية الإحرام لكن لا تضع عطرًا أو أي روائح أخرى. تب عن خطاياك بصدق.
									ارتد ثياب الإحرام النظيفة البيضاء وقم بلف الإزار على خصرك وارتداء الرداء على الجزء العلوي من جسمك. ارتد صندلًا بسيطًا أو حذاءً منزليًا لا يغطي الجزء العلوي من قدمك. تجنب تغطية رأسك. تدل هذه الثياب البسيطة على أن الجميع سواسيةٌ أمام الله، أغنى الأغنياء وأفقر الناس يرتديان نفس الثياب في الحج.
									النساء: يجب أن تقصي شعرك وتنظفي نفسك كما يفعل الرجال وتستحمي وتتجنبي وضع العطور، إلخ. عليك أيضًا أن تتجنبي وضع المكياج أو أدوات التجميل الأخرى، لكن ليس على النساء ارتداء ثياب خاصة للإحرام وكذلك الصندل المطلوب. يجب أن يستخدمن ثيابهن العادية شرط أن تكون نظيفةً ولا يتبرجن بزينة.
									لاحظي أن تغطية الرأس بالحجاب أو الوشاح، إلخ تعد لباسًا "إلزاميًا" في الإسلام ويجب الالتزام به في الحج أيضًا.</p>
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
							<img class="image" src="img/umrah_2.jfif">
						</div>
						<div class="col-sm-8">
							<div class="row px-3 mt-4 mb-3">
								<h1>2- تلفظ بنيتك وردد التلبية</h1>
							</div>
							<div class="line"></div>
							<div class="row px-3 mb-3">
								<p class="text-muted mb-0">تحيط حدود خاصة بأماكن الحج المقدسة تسمى الميقات ولا يمكن للحجاج تجاوز هذا الحد دون الإحرام. ينطق الحاج النية عند بلوغه الميقات عند إحدى ستة نقاط تاريخية للدخول، وهي تلفظٌ سريعٌ بنيته إتمام العمرة، ثم يردد التلبية عند الميقات وهي دعاءٌ سيُرَدّد كثيرًا حلال رحلة الحج. كلمات التلبية هي:
									لبيك اللهم لبيك، لبيك لا شريك لك لبيك، إن الحمد والنعمة لك والملك، لا شريك لك.
									يجب أن يحرم الحاج أو الحاجة عند الميقات قبل تجاوزه إذا لم يكونوا قد فعلوا بعد.
									لاحظ أنه يستحب دخول هذه المداخل المقدسة ومعظم الأماكن المقدسة الأخرى بالقدم اليمنى أولًا. </p>
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
							<img class="image" src="img/umrah_3.jfif">
						</div>
						<div class="col-sm-8">
							<div class="row px-3 mt-4 mb-3">
								<h1>3-
									تقدم تجاه الكعبة</h1>
							</div>
							<div class="line"></div>
							<div class="row px-3 mb-3">
								<p class="text-muted mb-0">ركز عينيك عليها حين تراها لأول مرة وقف على جانب الحشد إذ تقول "الله أكبر" ثلاث مرات واتبعها بقول "لا إله إلا الله". ردد أذكارًا أخرى إذا شئت. صل على النبي (صلى الله عليه وسلم) وادع الله بخضوع تام. هذا وقتٌ سانحٌ ومباركٌ للدعاء بأمر ما. </p>
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
								<h1>4-
									قم بالطواف</h1>
							</div>
							<div class="line"></div>
							<div class="row px-3 mb-3">
								<p class="text-muted mb-0"> الطواف شعيرة يدور فيها المسلمون حول الكعبة. يجب أن يتأكد الرجال من أن ثياب الإحرام مرتبةٌ كما يجب حتى يبدؤوا؛ تأكد من أن الرداء العلوي تحت الذراع الأيمن وفوق الكتف الأيسر معريًا الكتف الأيمن ثم توجه إلى الكعبة بحيث يكون الحجر الأسود على يمينك. خذ نيةً أخرى للعمرة بقول اللهم إني أريد العمرة فيسرها لي وتقبلها مني.
									ثم ابدأ التحرك لليمين. اقترب من الحجر الأسود (في الركن الشرقي من الكعبة) وقبله إن أمكنك. يمكنك لمسه بيدك إذا لم تستطع الاقتراب بما يكفي لتقبيله. ارفع يديك إلى أذنيك ووجه راحتيك إلى الحجر الأسود واتل هذا الدعاء القصير بسم الله الله أكبر ولله الحمد إذا لم تستطع الاقتراب بما يكفي لتقبيله أو لمسه. لا تزاحم أو تقاتل للحصول على فرصة للمس الحجر الأسود.
									ابدأ الطواف حول الكعبة. امش بعكس اتجاه عقارب الساعة بحيث تبقى الكعبة على يسارك. طف حول الكعبة سبع مرات مع الدعاء أثناء ذلك. ما من أدعية مخصصة للطواف لذا يمكنك اللجوء لأحد أدعية حياتك اليومية أو الدعاء من قلبك فحسب، كما يمكن أن تشير للحجر الأسود في كل مرة تمر به.
									تنتهي من الطواف حين تتم سبع مرات. يمكن للرجال تغطية كتفهم الأيمن الآن.</p>
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
							<img class="image" src="img/umrah_5.jfif">
						</div>
						<div class="col-sm-8">
							<div class="row px-3 mt-4 mb-3">
								<h1>5-
									قم بالسعي</h1>
							</div>
							<div class="line"></div>
							<div class="row px-3 mb-3">
								<p class="text-muted mb-0"> عني السعي "المشي الشعائري". [٨] وهو يعني الذهاب والمجيء بين جبلي الصفا والمروة الواقعين شمال الكعبة وجنوبها بالترتيب. كان السعي يتم في الخارج فيما مضى لكن أصبح الممر بأكمله ضمن رواق طويل في الوقت الحاضر.
									ردد نيةً أخرى عند بلوغ قمة جبل الصفا قائلًا اللهم إني أريد السعي بين الصفا والمروة سبعة أشواط لله تعالى فيسره لي وتقبله مني، ثم زد: إن الصفا والمروة من شعائر الله وأخيرًا توجه للكعبة وردد "الله أكبر" ثلاث مرات. زد أي أدعية أخرى تريدها ثم تقدم إلى المروة.
									ردد سبحان الله والحمد لله ولا إله إلا الله والله أكبر ولا حول ولا قوة إلا بالله أثناء تحركك إلى المروة أو استخدم الصيغة المختصرة إذا لم تستطع التذكر بأن تقول سبحان الله والحمد لله والله أكبر. تستطيع إضافة أية أدعية تريدها. كرر تسبيح الله على قمة المروة إذ تواجه الكعبة ثم انزل مجددًا.
									تنتهي من السعي حين تتم سبعة أشواط جيئة وذهابًا.</p>
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
							<img class="image" src="img/umrah_6.jfif">
						</div>
						<div class="col-sm-8">
							<div class="row px-3 mt-4 mb-3">
								<h1>6-
									احلق شعرك أو قصه</h1>
							</div>
							<div class="line"></div>
							<div class="row px-3 mb-3">
								<p class="text-muted mb-0">يجب أن يحلق الرجال شعورهم بالكامل أو يقصروها بعد إتمام السعي وكلاهما جائز رغم أن الحلاقة أفضل، لكن قد لا يرغب رجلٌ ما بحلق شعره تمامًا أثناء العمرة إذا كان يخطط لإتمام مناسك الحج في الأيام القليلة التالية والتي تتضمن حلق الشعر أيضًا. يجب ألا تحلق النساء رؤوسهن وإنما يقصصن من الشعر عدة سنتيمترات.[٩]
									تتم العمرة وترفع موانع الإحرام بعد قص الشعر. يمكنك العودة لأنشطتك الطبيعية وارتداء ثيابك العادية، إلخ. اعلم أنك ستحتاج لإعادة الإحرام إذا قررت –كالعديد من الحجاج- أن تتم الحج في الأيام القليلة التالية. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="bg-light py-3 mt-5">
		<div class="container text-center">
			<p>جميع الحقوق محفوظة لدى موقع عون لمساعدة الحجاج والمعتمرين &copy; 2023</p>
		</div>
	</footer>
</body>

</html>