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
<html dir="rtl" lang="ar">

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
	<title>اخر الاخبار</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
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
		<section class="recentNews">
			<div class="container">

				<h1 style="font-size: 35px !important; text-align: center; background-color: #a1887f;color:#fff; padding: 10px; margin-bottom: 30px; border-radius: 10px;">
					اخر الاخبار </h1>
				<div class="row">
					<div class="ct-blog col-sm-6 col-md-4">
						<div class="inner">
							<div class="fauxcrop">
								<a href="https://akhbarelyom.com/news/newdetails/4003550/1/%D9%88%D8%B2%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC-%D9%88%D8%A7%D9%84%D8%B9%D9%85%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%AA%D8%A8%D8%AF%D8%A3-%D9%81%D9%8A-%D8%A7%D8%B3%D8%AA%D9%82"><img alt="News Entry" src="images/kaaba.jpg"></a>
							</div>
							<div class="ct-blog-content">
								<div class="ct-blog-date">
									<span>يناير</span><strong>24</strong>
								</div>
								<h3 class="ct-blog-header">
									وزارة الحج والعمرة السعودية تبدأ في استقبال طلبات تصريح المساكن المعدة للحجاج
								</h3>
							</div>
						</div>
					</div>
					<div class="ct-blog col-sm-6 col-md-4">
						<div class="inner">
							<div class="fauxcrop">
								<a href="https://akhbarelyom.com/news/newdetails/3999848/1/%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D9%85%D8%B3%D8%AA%D8%B9%D8%AF%D9%88%D9%86-%D9%84%D8%AE%D8%AF%D9%85%D8%A9-%D9%85%D9%84%D9%8A%D9%88%D9%86%D9%8A-%D8%AD%D8%A7%D8%AC-%D8%AE%D9%84%D8%A7%D9%84-%D9%87"><img alt="News Entry" src="images/hajj_news_2.jpg"></a>
							</div>
							<div class="ct-blog-content">
								<div class="ct-blog-date">
									<span>يناير</span><strong>24</strong>
								</div>
								<h3 class="ct-blog-header">
									السعودية: مستعدون لخدمة مليوني حاج خلال هذا العام
								</h3>
							</div>
						</div>
					</div>
					<div class="ct-blog col-sm-6 col-md-4">
						<div class="inner">
							<div class="fauxcrop">
								<a href="https://akhbarelyom.com/news/newdetails/4003550/1/%D9%88%D8%B2%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC-%D9%88%D8%A7%D9%84%D8%B9%D9%85%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%AA%D8%A8%D8%AF%D8%A3-%D9%81%D9%8A-%D8%A7%D8%B3%D8%AA%D9%82"><img alt="News Entry" src="images/kaaba.jpg"></a>
							</div>
							<div class="ct-blog-content">
								<div class="ct-blog-date">
									<span>يناير</span><strong>24</strong>
								</div>
								<h3 class="ct-blog-header">
									وزارة الحج والعمرة السعودية تبدأ في استقبال طلبات تصريح المساكن المعدة للحجاج
								</h3>
							</div>
						</div>
					</div>
					<div class="ct-blog col-sm-6 col-md-4">
						<div class="inner">
							<div class="fauxcrop">
								<a href="https://akhbarelyom.com/news/newdetails/3999848/1/%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D9%85%D8%B3%D8%AA%D8%B9%D8%AF%D9%88%D9%86-%D9%84%D8%AE%D8%AF%D9%85%D8%A9-%D9%85%D9%84%D9%8A%D9%88%D9%86%D9%8A-%D8%AD%D8%A7%D8%AC-%D8%AE%D9%84%D8%A7%D9%84-%D9%87"><img alt="News Entry" src="images/hajj_news_2.jpg"></a>
							</div>
							<div class="ct-blog-content">
								<div class="ct-blog-date">
									<span>يناير</span><strong>24</strong>
								</div>
								<h3 class="ct-blog-header">
									السعودية: مستعدون لخدمة مليوني حاج خلال هذا العام
								</h3>
							</div>
						</div>
					</div>
					<div class="ct-blog col-sm-6 col-md-4">
						<div class="inner">
							<div class="fauxcrop">
								<a href="https://akhbarelyom.com/news/newdetails/4003550/1/%D9%88%D8%B2%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC-%D9%88%D8%A7%D9%84%D8%B9%D9%85%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%AA%D8%A8%D8%AF%D8%A3-%D9%81%D9%8A-%D8%A7%D8%B3%D8%AA%D9%82"><img alt="News Entry" src="images/kaaba.jpg"></a>
							</div>
							<div class="ct-blog-content">
								<div class="ct-blog-date">
									<span>يناير</span><strong>24</strong>
								</div>
								<h3 class="ct-blog-header">
									وزارة الحج والعمرة السعودية تبدأ في استقبال طلبات تصريح المساكن المعدة للحجاج
								</h3>
							</div>
						</div>
					</div>
					<div class="ct-blog col-sm-6 col-md-4">
						<div class="inner">
							<div class="fauxcrop">
								<a href="https://akhbarelyom.com/news/newdetails/3999848/1/%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D9%85%D8%B3%D8%AA%D8%B9%D8%AF%D9%88%D9%86-%D9%84%D8%AE%D8%AF%D9%85%D8%A9-%D9%85%D9%84%D9%8A%D9%88%D9%86%D9%8A-%D8%AD%D8%A7%D8%AC-%D8%AE%D9%84%D8%A7%D9%84-%D9%87"><img alt="News Entry" src="images/hajj_news_2.jpg"></a>
							</div>
							<div class="ct-blog-content">
								<div class="ct-blog-date">
									<span>يناير</span><strong>24</strong>
								</div>
								<h3 class="ct-blog-header">
									السعودية: مستعدون لخدمة مليوني حاج خلال هذا العام
								</h3>
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
			<p>تصميم وتطوير: <a href="mailto:abdulrahmanfadhl@gmail.com">عبدالرحمن فضل أمير سيف</a> | EngAboodSDev@</p>
		</div>
	</footer>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/script.js"></script>

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