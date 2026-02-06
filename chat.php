<?php
if (!isset($_COOKIE['User_id'])){
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
    <title>التواصل مع المتطوعين</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <style>
        .card-text:first-child{
            width:100%;
            min-height:100px ;
            max-height:auto;
        }
    .card-text span {
        background-color: #a1887f;
        padding: 2px 5px;
        border-radius: 8px;
        color: #fff;
        
        
    }

    .card {
        box-shadow: 0px 1px 4px 0px #c8b9cf !important;
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

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container" style="background: #a1887f !important;z-index: 50 !important; padding-top: 0px; padding-bottom: 0px;">
            <a class="navbar-brand" href="#">عَـــــــــــــون</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="container">
        <div class="row">
          <form action="#" id="langform" method="post" style="display:none"></form>
            <div class="col-md-12">
                <div class="text-center mb-4">
                    <select id="dd" form="langform" name="selectedLang" onchange="submitForm(this)" class="form-select language-select languages" aria-label="Default select example">
                          <?php if (isset($_POST['selectedLang'])  && $_POST['selectedLang']!='0' ) 
                                  echo "<option  value='".$_POST['selectedLang']."'> ". $_POST['selectedLang']. " </option>";
                                ?> 
                                <option  value="0"> إخــتـر الـلـــغـة  | Choose Language ... </option>

                        </select>
                </div>
            </div>
        </div>
        <div class="row user-cards">
            <?php	
            
          include("dbcon.php");
          if (!isset($_POST['selectedLang']) || $_POST['selectedLang']=='0'){
            $res = mysqli_query($con,"SELECT *  FROM `users`  WHERE `isVolunteer`='1' ");  
          }
          else if (isset($_POST['selectedLang']) && $_POST['selectedLang']!='0') {
          $selectedLang=$_POST['selectedLang'];
          $res = mysqli_query($con,"SELECT users.* , l.language lang FROM `users` LEFT JOIN `users_language` l ON (users.id=l.user_id) WHERE `isVolunteer`='1' AND l.language='$selectedLang' GROUP BY `user_id`");  
          }
          else {
            $res = mysqli_query($con,"SELECT * FROM `users` where `isVolunteer`='1'  ");  
          }
          while($row = mysqli_fetch_array($res)){
                $user_id=$row['id'];
                $user_name=$row['username'];
                $email=$row['email'];
                $phone=$row['phone'];
          ?>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <span>
                        <h5 class="card-title"><img src="img/user.png" alt="..." width="70" height="70">
                            <?php echo $user_name;?> </h5>
                    </span>

                    <div class="card-body">
                        <p class="card-text"> اللغة:
                            <?php	
                          include("dbcon.php");
                          $resl = mysqli_query($con,"SELECT `language` FROM `users_language` WHERE `user_id`='$user_id'");  
                          while($rowl = mysqli_fetch_array($resl)){
                            $lang=$rowl['language'];
                            echo "</br>
                          <span class='lang'>$lang</span> </br>";
                          }?>
                        </p>
                        <p class="card-text"> الايــمــــيـل: <?php echo $email;?></p>
                        <a href="https://wa.me/+966<?php echo $phone;?>" class="btn more log_btn_color"
                            style="letter-spacing:2px;display:block;" target="_blank"> الــتـواصــل عـبر الواتــسـاب <i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>


        <footer class="bg-light py-3 mt-5">
            <div class="container text-center">
                <p>جميع الحقوق محفوظة لدى موقع عون لمساعدة الحجاج والمعتمرين &copy; 2023</p>
            </div>
        </footer>

       
        <script src="js/script.js"></script>
        <script src="js/languages.js"></script>
        <script >
function submitForm(sel) {
    let sub=document.getElementById("langform");
    sub.submit();
  }
        </script>
</body>

</html>