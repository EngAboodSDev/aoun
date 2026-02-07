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

include("dbcon.php");
if (isset($_POST['send']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST['message']));
    if (!empty($name) && !empty($email) && !empty($message)) {
        $res = $con->query("INSERT INTO `contacts`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
        if ($res) {
            echo "<script type='text/javascript'>
                alert('تم إرسال رسالتك بنجاح!');
                window.location.href = 'home.php';
                </script>";
        } else {
            echo "<script type='text/javascript'>alert('حدث خطأ أثناء الإرسال حاول مرة أخرى.')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('يرجى إعادة ملء جميع الحقول بطريقة صحيحة')</script>";
    }
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
    <title>عون - الصفحة الرئيسية</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        /* Hero Section - Modern & Interactive */
        .hero-section {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-top: -1px;
            /* Pulls the hero back to the screen edges */
            margin-left: -10px !important;
            margin-right: -10px !important;
            width: calc(100% + 20px);
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background: url(img/kaaba.jpg) center/cover no-repeat;
            transition: transform 8s ease-out;
        }

        .hero-section:hover .hero-bg {
            transform: scale(1.05);
        }

        .hero-overlay {
            position: absolute;
            backdrop-filter: blur(2px);
            inset: 0;
            background: linear-gradient(88deg, #a1887f54 0%, #0000007a 50%, #a1887f87 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 2rem 1rem;
            max-width: 900px;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-size: 0.9rem;
            color: #fff;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: heroFadeIn 0.8s ease-out;
        }

        .hero-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
            line-height: 1.3;
            text-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
            animation: heroSlideUp 0.8s ease-out 0.2s both;
        }

        .hero-subtitle {
            font-size: clamp(1rem, 2.5vw, 1.25rem);
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 2rem;
            line-height: 1.7;
            animation: heroSlideUp 0.8s ease-out 0.4s both;
        }

        .hero-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.9rem 2rem;
            background: #fff;
            color: #795548;
            font-weight: 700;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            animation: heroSlideUp 0.8s ease-out 0.6s both;
        }

        .hero-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
            color: #5d4037;
        }

        .hero-quick-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin-top: 2.5rem;
            animation: heroSlideUp 0.8s ease-out 0.8s both;
        }

        .hero-quick-link {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 1.25rem;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            text-decoration: none;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.25);
            transition: all 0.3s ease;
            min-width: 110px;
        }

        .hero-quick-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .hero-quick-link i {
            font-size: 1.5rem;
            opacity: 0.95;
        }

        .hero-quick-link span {
            font-size: 0.85rem;
            font-weight: 600;
        }

        @keyframes heroFadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes heroSlideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: 75vh;
            }

            .hero-quick-links {
                gap: 0.75rem;
            }

            .hero-quick-link {
                min-width: 90px;
                padding: 0.85rem;
            }
        }

        #about,
        #services,
        #contact,
        #features,
        #news {
            background-color: #a1887f !important;
            border-radius: 10px;
            color: #fff;

        }

        #about p {

            color: #fff;
        }

        #services h3,
        #features h3 {
            color: #fff !important;
            font-weight: 500;
        }


        .card_ser {
            border: 1px solid #795548;

        }

        .more {
            background-color: #795548;
            color: black;
            font-weight: 900;
            box-shadow: 0 2px 25px #a1887f;
        }

        .more:hover {
            background-color: #a1887f;
        }
    </style>
</head>

<body class="body_home">
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
        <!-- Hero Section - Modern & Interactive -->
        <section class="hero-section">
            <div class="hero-bg"></div>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <span class="hero-badge">دليلك الشامل للحج والعمرة</span>
                <h1 class="hero-title">مرحبًا بكم في <i>عَـــــــــــــون</i></h1>
                <p class="hero-subtitle">نساعد الحجاج والمعتمرين والمتطوعين على فهم المناسك والإرشادات، مع ربطكم بمتطوعين يتحدثون لغتكم</p>
                <a href="https://www.haj.gov.sa/Home" class="hero-cta" target="_blank">
                    <i class="fas fa-external-link-alt"></i>
                    تعرف على المزيد
                </a>
                <!-- <div class="hero-quick-links">
                    <a href="hajj.php" class="hero-quick-link">
                        <i class="fas fa-kaaba"></i>
                        <span>الحج</span>
                    </a>
                    <a href="umrah.php" class="hero-quick-link">
                        <i class="fas fa-mosque"></i>
                        <span>العمرة</span>
                    </a>
                    <a href="chat.php" class="hero-quick-link">
                        <i class="fas fa-hands-helping"></i>
                        <span>المتطوعون</span>
                    </a>
                    <a href="translate.php" class="hero-quick-link">
                        <i class="fas fa-language"></i>
                        <span>الترجمة</span>
                    </a>
                </div> -->
            </div>
        </section>

        <section class="container mt-5" id="about">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>من نحن</h2>
                    <p>نحن مجموعة من المتطوعين والخبراء في مجال الحج والعمرة، نسعى لتوفير المعلومات والدعم للحجاج والمعتمرين والمتطوعين لضمان تجربة سلسة ومريحة.</p>
                </div>
            </div>
        </section>

        <section class="container mt-5" id="services">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>خدماتنا</h2>
                </div>
                <div class="col-md-4 card_ser text-center">
                    <h3>الحج</h3>
                    <p>نقدم معلومات مفصلة حول مراسم الحج والإجراءات المتعلقة بها.</p>
                </div>
                <div class="col-md-4 card_ser  text-center">
                    <h3>العمرة</h3>
                    <p>نوفر إرشادات وتوجيهات للمعتمرين لضمان تجربة عمرة مميزة.</p>
                </div>
                <div class="col-md-4 card_ser  text-center">
                    <h3>التطوع</h3>
                    <p>نربط المتطوعين بالحجاج والمعتمرين لتوفير الدعم والمساعدة المطلوبة.</p>
                </div>
            </div>
        </section>


        <section class="container mt-5" id="features">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>الميزات</h2>
                </div>
                <div class="col-md-4 card_ser  text-center">
                    <i class="fas fa-info-circle fa-3x" style="color: #007bff;"></i>
                    <h3>معلومات مفصلة</h3>
                    <p>نقدم معلومات مفصلة حول الحج والعمرة والتطوع لضمان تجربة سلسة ومريحة.</p>
                </div>
                <div class="col-md-4 card_ser  text-center">
                    <i class="fas fa-hands-helping fa-3x" style="color: #28a745;"></i>
                    <h3>دعم متواصل</h3>
                    <p>نوفر دعمًا متواصلًا للحجاج والمعتمرين والمتطوعين على مدار الساعة.</p>
                </div>
                <div class="col-md-4 card_ser  text-center">
                    <i class="fas fa-users fa-3x" style="color: #ffc107;"></i>
                    <h3>تواصل اجتماعي</h3>
                    <p>نربط المتطوعين والحجاج والمعتمرين لتبادل المعرفة والخبرات والتعاون.</p>
                </div>
            </div>
        </section>

        <section class="container mt-5" id="news">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>آخر الاخبار</h2>
                    <p>اطلع على آخر الاخبار والمقالات المتعلقة بالحج والعمرة..</p>
                </div>
                <div class="ct-blog col-sm-6 col-md-4">
                    <div class="inner">
                        <div class="fauxcrop">
                            <a href="https://akhbarelyom.com/news/newdetails/4003550/1/%D9%88%D8%B2%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC-%D9%88%D8%A7%D9%84%D8%B9%D9%85%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%AA%D8%A8%D8%AF%D8%A3-%D9%81%D9%8A-%D8%A7%D8%B3%D8%AA%D9%82"><img alt="News Entry" src="img/kaaba.jpg"></a>
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
                            <a href="https://akhbarelyom.com/news/newdetails/3999848/1/%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D9%85%D8%B3%D8%AA%D8%B9%D8%AF%D9%88%D9%86-%D9%84%D8%AE%D8%AF%D9%85%D8%A9-%D9%85%D9%84%D9%8A%D9%88%D9%86%D9%8A-%D8%AD%D8%A7%D8%AC-%D8%AE%D9%84%D8%A7%D9%84-%D9%87"><img alt="News Entry" src="img/hajj_news_2.jpg"></a>
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
                            <a href="https://akhbarelyom.com/news/newdetails/4003550/1/%D9%88%D8%B2%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%AD%D8%AC-%D9%88%D8%A7%D9%84%D8%B9%D9%85%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%AA%D8%A8%D8%AF%D8%A3-%D9%81%D9%8A-%D8%A7%D8%B3%D8%AA%D9%82"><img alt="News Entry" src="img/kaaba.jpg"></a>
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
                <div class="btn-news btn-contests">
                    <a href="#">عرض المزيد...</a>
                </div>
            </div>
        </section>

        <section class="container mt-5" id="contact">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>تواصل معنا</h2>
                    <p>إذا كنت بحاجة إلى مزيد من المعلومات أو المساعدة، يرجى التواصل معنا عبر النموذج التالي:</p>
                </div>
                <div class="col-md-12 offset-md-2">
                    <form method="POST" action="#">
                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control" required id="name" name="name" placeholder="أدخل اسمك">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" required id="email" name="email" placeholder="أدخل بريدك الإلكتروني">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">الرسالة</label>
                            <textarea class="form-control" id="message" required rows="3" name="message" placeholder="أدخل رسالتك"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn more send_btn log_btn_color">إرسال</button>
                    </form>
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