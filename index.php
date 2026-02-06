<?php
include("dbcon.php");

if (isset($_GET['logout'])) {
    setcookie('User_id', null, time()- 60 * 60 * 24);
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
</head>

<body>
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
                <form class="form-signin" action="#" method="post" name="form">


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
    
<!-- 
    <a id="refresh" value="Refresh" onClick="history.go()">
        <svg class="refreshicon" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px"
            viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;" xml:space="preserve">
            <path d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
                      c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
                      c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
                      c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
                      c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
                      l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" />
        </svg>
    </a> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/languages.js"></script>
</body>

</html>