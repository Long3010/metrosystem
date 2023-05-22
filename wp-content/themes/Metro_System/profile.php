<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .top__img--wrap {
            width: 1920px;
            height: 564px;
            background-image: url('./image/Background__img/profile_page/Picture1.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .middle__page--wrap {
            position: relative;
            height: 967px;
        }

        .profile__edit--wrap {
            position: absolute;
            background-color: #00599D;

            border: 1px solid #337AB1;
            border-radius: 20px;
            width: 1600px;
            height: 414px;
            left: 160px;
            top: 334px;
        }

        .h1 {
            font-size: 36px;
            color: white;
            text-align: center;
            margin-top: 32px;
        }

        .edit__profile {
            position: relative;
            width: 100%;
        }

        .circle__picture--profile {
            border: 2px solid #fff;
            border-radius: 242px;
            width: 247px;
            height: 247px;
            background-image: url('./image/Account_IMG/Picture4.png');
            background-position: center;
            background-size: cover;
            position: relative;
            cursor: pointer;
            margin-left: 100px;
        }

        .circle__picture--profile img {
            position: absolute;
            bottom: 14px;
            right: 14px;
            width: 48px;
            height: 48px;
        }

        .left__form--wrap {
            width: 518px;
            display: flex;
            flex-direction: column;
            margin-right: 40px;
        }

        .right__form--warp {
            width: 518px;
            display: flex;
            flex-direction: column;

        }

        .form__editprofile--wrap {
            display: flex;
            position: absolute;
            top: 0px;
            left: 423px;
        }

        .form__editprofile--wrap input {
            height: 48px;
            background: #F5FBFF;
            border-radius: 4px;
            margin-top: 4px;
            padding-left: 12px;
            color: #3D3D3D;
        }

        .form__editprofile--wrap label {
            margin-top: 24px;
            color: #FFFFFF;
        }

        .profile__texteara {
            height: 147px;
            background: #F5FBFF;
            padding-left: 12px;
            font-size: 16px;
            line-height: 22px;
            margin-top: 4px;

        }

        .profile__texteara p {
            margin-top: 12px;
            color: #3D3D3D;
        }

        .logout {
            border: 1.5px solid #ED6152;
            border-radius: 8px;
            font-size: 16px;
            line-height: 22px;

            width: 153px;
            height: 48px;
            align-items: center;
            text-transform: uppercase;
            cursor: pointer;

            color: #ED6152;
        }

        .right__nav--wrap button{
            position: relative;
        }

        .right__nav--wrap img {
            position: absolute;
            width: 16.98px;
            height: 18.5px;
            right: 5px;
            top: 14px;
            
        }
    </style>
    <link rel="stylesheet" href="./css/footer__wrap.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/header__wrap.css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCMC Metro</title>
</head>

<body>
    <div class="metro_home--page">

        <div class="header__page--wrap">
            <div class="metro_Logo">
                <a href="./index.php"><img src="./image/Logo/Logo.png" alt="HCHC"></a>
            </div>
            <div class="train__info--wrap" onmouseleave="hide__train()">
                <a href="./train_experience1.php">M1</a>
                <a href="./train_experience2.php">M2</a>
                <a href="./train_experience1.php">M3</a>
                <a href="./train_experience2.php">M4</a>
            </div>
            <div class="menu">
                <a href="./home.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/house.png" alt=""> TRANG
                    CHỦ</a>
                <a href="./new.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/new.png" alt=""> TIN
                    METRO</a>
                <a style="cursor: pointer;" onmouseenter="show__train()"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/train.png" alt=""> TUYẾN
                    TÀU <img class="score__btn--wrap" src="./image/Icon/menu_Icon/score.png" alt=""></a>
                <a href="./search.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/search.png" alt=""> TRA
                    CỨU</a>
                <a href="./action.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/work.png" alt=""> HOẠT
                    ĐỘNG</a>
                <a href="./support.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/contact.png" alt=""> HỖ
                    TRỢ</a>
            </div>
            <div class="right__nav--wrap">
                <button class="logout">Đăng xuất<img src="./image/Icon/menu_Icon/logout.png" alt=""></button>
            </div>
        </div>
        <div class="index__blank--wrap"></div>

        <div class="middle__page--wrap">
            <div class="top__img--wrap">
            </div>
            <div class="profile__edit--wrap">
                <h1 class="h1">Thông tin cá nhân</h1>
                <div class="edit__profile">
                    <button class="circle__picture--profile">
                        <img src="./image/Icon/camera.png" alt="">
                    </button>
                    <form action="" class="form__editprofile--wrap">
                        <div class="left__form--wrap">
                            <label for="hoten">Họ và tên</label>
                            <input type="text" name="hoten" value="Le Quynh Ai Van">
                            <label for="sdt">Họ và tên</label>
                            <input type="tel" name="sdt" value="0777895008">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="Aivan209@gmail.com">

                        </div>
                        <div class="right__form--warp">
                            <label for="diachi">Địa chỉ liên hệ</label>
                            <input type="text" name="diachi" value="86/33 Âu Cơ, Phường 9, Quận Tân Bình, Phường 9,Tp. Hồ Chí Minh">
                            <label for="lotrinh">Danh sách lộ trình</label>
                            <div class="profile__texteara">
                                <p>M1 An Đông - Ba Son</p>
                                <p>M1 An Đông - Ba Son</p>
                                <p>M1 An Đông - Ba Son</p>
                                <p>M1 An Đông - Ba Son</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div style="background-image: url('./image/Picture/left_footer.png');" class="footer__left--wrap">
            <div style="background-image:url('./image/Picture/Lhouse.png');" class="img__decription--wrap"></div>
            <div class="footer__contact--wrap">

                <tr>
                    <td>
                        <h2>THÔNG TIN LIÊN HỆ</h2>
                    </td>
                    <td>
                        <h3>Ban quản lý đường sắt đô thị</h3>
                    </td>
                    <td>
                        <p style="font-weight: 400; line-height: 19px;">Số điện thoại: <a style="font-weight: 600;">090
                                098 8223</a> </p>
                    </td>
                    <td>
                        <p style="font-size: 16px;font-weight: 400;">Email: <a style="font-weight: 600;">duongmetro@faq.com.vn</a></p>
                    </td>
                    <td>
                        <a href=""><img src="./image/Icon/facebook_icon.png" alt="facebook_icon"></a>
                        <a href=""><img src="./image/Icon/youtube_icon.png" alt="youtube_icon"></a>
                        <a href=""><img src="./image/Icon/phone_icon.png" alt="phone_icon"></a>
                    </td>
                </tr>
            </div>
        </div>
        <div class="footer__middle--wrap">
            <div class="btn__wrap--footer">
                <button><img src="./image/Icon/footer_icon/question_icon.png" alt="">FAQ</button>
                <button><img style="left:40px" src="./image/Icon/footer_icon/than_icon.png" alt="">Hỗ trợ khẩn
                    cấp</button>
            </div>
            <a class="logo__footer--img">
                <img src="./image/Logo/Logo.png" alt="">
            </a>
            <div class="train__footer--contact">
                <a href="./train_experience1.php">Tuyến M1</a>
                <a href="./train_experience2.php">Tuyến M2</a>
                <a href="./train_experience1.php">Tuyến M3</a>
            </div>
        </div>
        <div style="background-image: url('./image/Picture/right_footer.png');" class="footer__right--wrap">
            <div style="background-image: url('./image/Picture/Rhouse.png');" class="img__right--wrap"></div>
            <div class="right__contact--wrap">
                <a href="">Chính sách khuyến mãi</a>
                <a href="">Điều khoản đi tàu</a>
                <a href="">Cam kết của chúng tôi</a>
            </div>
        </div>
    </div>
    </div>
    <script src="./js/header.js"></script>
</body>

</html>