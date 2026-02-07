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
<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <title>الترجمة</title>
  <link rel="stylesheet" href="css/trans_style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css">

</head>


  
  <body>
    	<!-- 
          * Copyright © 2026 Aoun - Hajj & Umrah Helper
          * All rights reserved.
          * Developed by Abdulrahman Fadhl Ameer Saif
          * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
        -->
    <header dir="rtl">
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
    <section class="container">
			<h1 style="text-align: center; background-color: #a1887f;color:#fff; padding: 10px; margin-bottom: 30px; border-radius: 10px;">
			ترجــمة الـنص</h1>

      <div class="container_t">
        <div class="wrapper_t">
          <div class="text-input">
            <textarea spellcheck="false" class="from-text" placeholder="Enter text"></textarea>
            <textarea spellcheck="false" readonly disabled class="to-text" placeholder="Translation"></textarea>
          </div>
          <ul class="controls">
            <li class="row from">
              <div class="icons">
                <i id="from" class="fas fa-volume-up"></i>
                <i id="from" class="fas fa-copy"></i>
              </div>
              <select></select>
            </li>
            <li class="exchange"><i class="fas fa-exchange-alt"></i></li>
            <li class="row to">
              <select></select>
              <div class="icons">
                <i id="to" class="fas fa-volume-up"></i>
                <i id="to" class="fas fa-copy"></i>
              </div>
            </li>
          </ul>
        </div>
        <button class="t_btn">Translate Text</button>
      </div>

      </section>

      
    </main>
      <footer class="bg-light py-3 mt-5">
      <div class="container text-center">
        <p>جميع الحقوق محفوظة لدى موقع عون لمساعدة الحجاج والمعتمرين &copy; 2023</p>
        <p>تصميم وتطوير: <a href="mailto:abdulrahmanfadhl@gmail.com">عبدالرحمن فضل أمير سيف</a> | EngAboodSDev@</p>
      </div>
    </footer>
    <script src="js/countries.js"></script>
    <script src="js/trans_script.js"></script>
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