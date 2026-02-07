<?php
/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/
if (!isset($_COOKIE['User_id'])) {
	header('location:index.php');
}
?>

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
	<title>الأسئلة الشائعة</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>  -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="css/style.css" />
	<style>
		.navbar-collapse{
			align-items: center !important;
			flex-grow: 0.849 !important;
			flex-basis:100%;
		}

		@media (min-width: 576px) {
			.navbar-collapse {
				width: auto !important;
				flex-basis:auto !important;
			}
		}

	</style>
</head>

<body>
		<!-- 
		* Copyright © 2026 Aoun - Hajj & Umrah Helper
		* All rights reserved.
		* Developed by Abdulrahman Fadhl Ameer Saif
		* @EngAboodSDev (abdulrahmanfadhl@gmail.com)
	-->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container" style="background: #a1887f !important;z-index: 50 !important; padding-top: 0px; padding-bottom: 0px;">
				<a class="navbar-brand" style="margin-right: 1rem !important;" href="#">عَـــــــــــــون</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse "id="navbarNav">
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
							<a class="nav-link" href="volunteers.php"> المتطوعين</a>
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
		<h1 style="font-size: 35px !important; text-align: center; background-color: #a1887f;color:#fff; padding: 10px; margin-bottom: 30px; border-radius: 10px;">
		الأسئلة الشائعة </h1>
			<div class="wrapper bg-white rounded shadow">
				<div class="h2 text-center mb-2" style="color:#a1887f !important">كيف يمكننا مساعدتك ؟</div>
				
				<div
					class="accordion accordion-flush border-top border-start border-end"
					id="myAccordion">
					<div class="accordion-item">
						<h2
							class="accordion-header"
							id="flush-headingOne">
							<button
								class="accordion-button collapsed border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#flush-collapseOne"
								aria-expanded="false"
								aria-controls="flush-collapseOne">
								ما هي الفرق بين الحج والعمرة؟
							</button>
						</h2>
						<div
							id="flush-collapseOne"
							class="accordion-collapse collapse border-0"
							aria-labelledby="flush-headingOne"
							data-bs-parent="#myAccordion">
							<div class="accordion-body p-0">
								<ul class="list-unstyled m-0">
									<li>الحج والعمرة هما ركنان من أركان الإسلام، ويتميز الحج بأنه يحدث في أوقات محددة من العام ويتضمن فريضة الإقامة بعرفة، بينما يمكن أداء العمرة في أي وقت من العام.</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2
							class="accordion-header"
							id="flush-headingOne">
							<button
								class="accordion-button collapsed border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#flush-collapseTwo"
								aria-expanded="false"
								aria-controls="flush-collapseTwo">
								ما هي المناسك الحج؟
							</button>
						</h2>
						<div
							id="flush-collapseTwo"
							class="accordion-collapse collapse border-0"
							aria-labelledby="flush-headingOne"
							data-bs-parent="#myAccordion">
							<div class="accordion-body p-0">
								<ul class="list-unstyled m-0">

									<li>تتضمن المناسك الحجية الإحرام والوقوف بعرفة والطواف والسعي بين الصفا والمروة ورمي الجمرات.

									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2
							class="accordion-header"
							id="flush-headingOne">
							<button
								class="accordion-button collapsed border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#flush-collapseThree"
								aria-expanded="false"
								aria-controls="flush-collapseThree">
								ما هي المناسك العمرة؟
							</button>
						</h2>
						<div
							id="flush-collapseThree"
							class="accordion-collapse collapse border-0"
							aria-labelledby="flush-headingOne"
							data-bs-parent="#myAccordion">
							<div class="accordion-body p-0">
								<ul class="list-unstyled m-0">

									<li>تتضمن المناسك العمرية الإحرام والطواف والسعي بين الصفا والمروة.

									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2
							class="accordion-header"
							id="flush-headingOne">
							<button
								class="accordion-button collapsed border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#flush-collapseFour"
								aria-expanded="false"
								aria-controls="flush-collapseFour">
								ما هي الأحكام الشرعية المتعلقة بالحج والعمرة؟

							</button>
						</h2>
						<div
							id="flush-collapseFour"
							class="accordion-collapse collapse border-0"
							aria-labelledby="flush-headingOne"
							data-bs-parent="#myAccordion">
							<div class="accordion-body p-0">
								<ul class="list-unstyled m-0">

									<li>تتضمن الأحكام الشرعية المتعلقة بالحج والعمرة الإحرام والتحلل والطواف والسعي بين الصفا والمروة ورمي الجمرات وذبح الهدي والتقبيل والاعتكاف والتشريق والإشراف وغيرها.

									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2
							class="accordion-header"
							id="flush-headingOne">
							<button
								class="accordion-button collapsed border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#flush-collapseFive"
								aria-expanded="false"
								aria-controls="flush-collapseFive">
								هل يمكن أداء الحج أو العمرة بالنيابة؟

							</button>
						</h2>
						<div
							id="flush-collapseFive"
							class="accordion-collapse collapse border-0"
							aria-labelledby="flush-headingOne"
							data-bs-parent="#myAccordion">
							<div class="accordion-body p-0">
								<ul class="list-unstyled m-0">

									<li>يمكن للمسلمين الذين لا يستطيعون السفر لأداء الحج أو العمرة بأن يرسلوا شخصًا آخر للقيام بهذه المناسك بالنيابة عنهم، ولكن يجب عليهم التأكد من أن هذا الشخص مؤهل ومناسب لأداء هذه المهمة.

									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2
							class="accordion-header"
							id="flush-headingOne">
							<button
								class="accordion-button collapsed border-0"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#flush-collapseSix"
								aria-expanded="false"
								aria-controls="flush-collapseSix">
								ما هي الإجراءات الصحية والوقائية التي يجب اتباعها خلال الحج والعمرة؟
							</button>
						</h2>
						<div
							id="flush-collapseSix"
							class="accordion-collapse collapse border-0"
							aria-labelledby="flush-headingOne"
							data-bs-parent="#myAccordion">
							<div class="accordion-body p-0">
								<ul class="list-unstyled m-0">

									<li>يجب على المسلمين الذين يؤدون الحج أو العمرة اتباع الإجراءات الصحية والوقائية الموصى بها، بما في ذلك التطعيمات وارتداء الكمامات والتباعد الاجتماعي وتجنب التجمعات الكبيرة والحرص على النظافة الشخصية.

									</li>
								</ul>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
		<!-- 
		* Copyright © 2026 Aoun - Hajj & Umrah Helper
		* All rights reserved.
		* Developed by Abdulrahman Fadhl Ameer Saif
		* @EngAboodSDev (abdulrahmanfadhl@gmail.com)
	-->
</body>

<?php
/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/
?>

</html>