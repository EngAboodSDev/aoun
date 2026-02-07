<?php
/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/
include("dbcon.php");

if (isset($_GET['logout'])) {
    setcookie('User_id', null, time() - (60 * 60 * 24));
    unset($_COOKIE['User_id']);
}

// submit login form 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM `users` WHERE `username`='$username'  and `password`='$password'");
    $row        = mysqli_fetch_assoc($query);
    $num_row     = mysqli_num_rows($query);

    if ($num_row > 0) {
        $userid = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $phone = $row['phone'];
        $password = $row['password'];
        setcookie("User_id", $userid, time() + (60 * 60 * 24));
        header('location:home.php');
    } else {
        echo '<script type="text/javascript">alert("اسم المستخدم و كلمة المرور غير صحيحين , اعد كتابتهما بشكل صحيح !");</script>';
    }
}

// submit sign up form  
if (isset($_POST['newlogin'])) {
    $n_username = $_POST['n_username'];
    $query = mysqli_query($con, "SELECT `username` FROM `users` WHERE `username`='$n_username'");
    $row = mysqli_fetch_assoc($query);
    $num_row = mysqli_num_rows($query);
    if ($num_row == 0) {
        $n_password = $_POST['n_password'];
        $confirmpassword = $_POST['confirmpassword'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $languages = $_POST['langs'];
        $isVol = $_POST['isVol'];
        if ($n_password == $confirmpassword) {
            $res = $con->query("INSERT INTO `users`(`username`, `email`, `phone`, `password`, `isVolunteer`) VALUES ('$n_username','$email','$phone','$n_password','$isVol')");
            if ($res) {
                $querys = mysqli_query($con, "SELECT `id` FROM `users` WHERE `username`='$n_username'");
                $rows = mysqli_fetch_assoc($querys);
                $userid = $rows['id'];
                foreach ($languages as $language)
                    $resl = $con->query("INSERT INTO `users_language` (`language`, `user_id`) VALUES ('$language','$userid')");
                if ($resl) {
                    echo "<script>alert('  تم إنشاء الحساب بنجاح  ')< /script>";
                    setcookie("User_id", $userid, time() + (60 * 60 * 24));
                    header('location:home.php');
                }
            } else {
                echo '<script type="text/javascript">alert("حدث خطأ في  إنشاءالحساب , حاول مره اخرى");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert(" كلمة المرور غير متطابقة , اعد كتابتها بشكل صحيح  ");</script>';
        }
    } else {
        echo '<script type="text/javascript">alert(" اسم المستخد مستخدم مسبقا , استخدم اسما آخر ... ");</script>';
    }
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
    <title>عون لمساعدة الحجاج والمعتمرين</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">

    <style>
        footer {
            position: relative;
            bottom: -337px;
            width: 100%;
            padding: 10px;
            border-top: 1px solid #ccc;
            z-index: 1000;
            text-align: center;
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
    <section class="container">
        <div class="container-sign">
            <h2 class="sign-header">عون لمساعدة الحجاج والمعتمرين </h2>
            <div class="frame">
                <nav class="nav">
                    <ul class="links">
                        <li class="signin-active"><a class="btn" href="javascript:void(0)">دخول </a></li>
                        <li class="signup-inactive"><a class="btn" href="javascript:void(0)">انشاء حساب </a></li>
                    </ul>
                </nav>
                <div ng-app ng-init="checked = false">
                    <form class="form-signin " action="#" method="post" name="form">


                        <label for="username">اسم المستخدم </label>
                        <input class="form-styling" type="text" name="username" placeholder="" required />
                        <label for="password">كلمة المرور</label>
                        <input class="form-styling" type="password" Pattern="[1-9]+" title="يرجى ادخال كلمة السر  بالارقام فقط  " name="password" placeholder="" required />


                        <input type="submit" value=" تسجيل الدخول " class="login log_btn_color" name="login">

                    </form>

                    <form class="form-signup" action="#" method="post" name="form">
                        <div class="row">
                            <select class="form-control" name="isVol">
                                <option value="0">مـعـتــــمر او حـــــاج او مــتـطـــوع </option>
                                <option value="0">مـعـتــــمر</option>
                                <option value="0">حـــــاج</option>
                                <option value="1">مــتـطـــوع</option>
                            </select>
                        </div>
                        <br>
                        <label for="fullname">اسم المستخدم </label>
                        <input class="form-styling" type="text" name="n_username" placeholder="" required />
                        <label for="email">البريد الالكتروني </label>
                        <input class="form-styling" type="text" name="email" pattern="[^ @]*@[^ @]*" placeholder="" required />
                        <label for="email">رقم الواتساب </label>
                        <input class="form-styling" type="text" name="phone" placeholder="" required />
                        <div class="row d-flex justify-content-center mt-100">

                            <label for="fullname">اللغات المجاده</label>
                            <div class="row form_lang_select">

                                <select class="form-styling  languages" id="choices-multiple-remove-button" style="background-color: #5f6584 !important;" name="langs[]" multiple>
                                </select>
                            </div>
                        </div>
                        <label for="password">كلمة المرور</label>
                        <input class="form-styling" type="password" name="n_password" placeholder="" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" title="يرجى ادخال كلمة السر  بالارقام فقط  " required />
                        <label for="confirmpassword">تأكيد كلمة المرور</label>
                        <input class="form-styling" type="password" name="confirmpassword" placeholder="" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required />
                        <input type="submit" value="  إنشاء حساب" name="newlogin" class="login log_btn_color">
                    </form>



                </div>
            </div>

            <div class="forgot">
            </div>
        </div>
    </section>
    <footer class="bg-light py-3 mt-5">
        <div class="container text-center">
            <p>جميع الحقوق محفوظة لدى موقع عون لمساعدة الحجاج والمعتمرين &copy; 2023</p>
            <p>تصميم وتطوير: <a href="mailto:abdulrahmanfadhl@gmail.com">عبدالرحمن فضل أمير سيف</a> | EngAboodSDev@</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/languages.js"></script>

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