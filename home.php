<?php
if (!isset($_COOKIE['User_id'])){
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
    <title>عون - الصفحة الرئيسية</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"href="css/style.css" />
            <style>
                .row-home{
                    height: 600px;
                    background-image: url(img/hajj_news_1.jpg);
                    text-align: center;
                    padding: 50px 10px;
                    margin-top: -70px;
                    
                }

                .row-home h1, .row-home p{
                    color:#000;
                    margin-top: 50px;
                    font-size: 30px;
                   background-color: #a1887f !important;
                    padding: 10px 0;
                    color:#fff;
                   
                }
                #about ,#services ,#contact ,#features {
                    background-color:#a1887f !important ;
                    border-radius: 10px;
                    color: #fff;
                
                }
                #about p {
                    
                    color: #fff;
                }
                #services h3 ,#features h3{
                color: #fff !important;
                font-weight:500;
                }
                footer p{
                    color:#1c3369 ;
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
                .more:hover{
                    background-color: #a1887f;
                }
            </style>
</head>

<body class="body_home">
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
        <section class="container mt-5">
            <div class="row row-home">
                <div class="col-md-12 text-center">
                    <h1>مرحبًا بكم في موقع الحج والعمرة</h1>
                    <p>يساعد الموقع المتطوعين والمعتمرين والحجاج على فهم اللغة والإرشادات</p>
                    <a href="https://www.haj.gov.sa/Home" class="btn  more log_btn_color" target="_blank">تعرف على المزيد</a>
                </div>
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

        <section class="container mt-5" id="contact">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>تواصل معنا</h2>
                    <p>إذا كنت بحاجة إلى مزيد من المعلومات أو المساعدة، يرجى التواصل معنا عبر النموذج التالي:</p>
                </div>
                <div class="col-md-8 offset-md-2">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control" id="name" placeholder="أدخل اسمك">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" placeholder="أدخل بريدك الإلكتروني">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">الرسالة</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="أدخل رسالتك"></textarea>
                        </div>
                        <button type="submit" class="btn more log_btn_color">إرسال</button>
                    </form>
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
    </main>

    <footer class="bg-light py-3 mt-5">
        <div class="container text-center">
        <p>جميع الحقوق محفوظة لدى موقع عون لمساعدة الحجاج والمعتمرين &copy; 2023</p>
        </div>
    </footer>
</body>

</html>