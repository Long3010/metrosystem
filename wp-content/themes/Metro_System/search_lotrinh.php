<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .center__homepage--content {
            margin-left: 160px;
            margin-right: 160px;
            position: relative;
        }

        .ontop__content--wrap {
            width: 1920px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 303px;
        }

        .show__centernewcontent--wrap {
            background-color: unset;
            border: unset;
            margin-top: 29px;
            margin-bottom: 29px;
            margin-left: 24px;
            position: relative;
            color: #337AB1;
        }

        .show__centernewcontent--wrap img {
            position: absolute;
            top: 2px;
            height: 24px;
            left: -24px;
        }

        .line__menucontent--wrap {
            background-color: #337AB1;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 2px;
            left: 0;
        }

        .menu__wrap {
            position: absolute;
            align-items: center;
            left: 600px;
            top: 29px;
        }

        .btn__custum--wrap {
            background-color: unset;
            border: unset;
            padding: 13px 49.5px;
            cursor: pointer;
        }

        .btn__custum--wrap:hover {
            color: #337AB1;
        }


        .form__css--wrap select {
            width: 330px;
            height: 40px;
            padding: 10px, 12px, 10px, 12px;
            border-radius: 8px;
            font-weight: 400;
            font-size: 16px;
            line-height: 22px;
            border: rgba(204, 222, 235, 1) 1px solid;
            color: rgba(204, 222, 235, 1);
            margin-bottom: 20px;
        }

        .form__css--wrap * {
            margin-top: 12px;
        }

        .form__css--wrap h2 {
            font-weight: 800;
            font-size: 24px;
            line-height: 33px;
            margin-bottom: 20px;


            color: #00599D;
        }

        .ptienkhac__wrap {
            display: flex;
            margin-bottom: 20px;
            justify-content: space-between;
            width: 554px;
            height: 22px;
            margin-left: -40px;

        }

        .ptienkhac__wrap input {
            margin-top: 2px;
            margin-right: 4px;
            margin-left: 40px;
            background: #FFFFFF;

            border: 1.5px solid #00599D;
        }

        input {
            background: #FFFFFF;
            border: 1.5px solid #00599D;
        }

        label {
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 27px;
            color: #3D3D3D;
        }

        .tien__wrap {
            width: 355px;
            display: flex;
            justify-content: space-between;
            height: 22px;
            margin-left: -50px;
        }

        .tien__wrap input {
            margin-left: 50px;
        }

        .diemdi {
            width: 360px;
            margin-right: 36px;
            display: flex;
            flex-direction: column;
        }

        .map__location--togo {
            display: flex;
        }

        .location__page--wrap {
            align-items: center;
            height: 48px;
            background: #FFFFFF;
            border: 1.5px solid #CCDEEB;
            border-radius: 4px;
            font-weight: 400;
            font-size: 16px;
            line-height: 22px;
            color: #9E9E9E;

        }

        .datepicker {
            width: 360px;
            padding: 10px 16px 10px 12px;
            width: 360px;
            height: 40px;


            background: #FFFFFF;

            border: 1.5px solid #CCDEEB;
            border-radius: 4px;
        }

        .timepicker {
            padding: 10px 16px 10px 12px;
            width: 142px;
            height: 40px;


            background: #FFFFFF;

            border: 1.5px solid #CCDEEB;
            border-radius: 4px;

        }

        .cssforthis {
            width: 500px;

        }

        .cssforthis * {
            margin-right: 5px;
        }

        .submit__btn--form {
            margin: 48px 247px;
            width: 246px;
            height: 56px;
            background: #00599D;
            box-shadow: 0px 0px 6px #E7E9F2;
            border-radius: 2px;
            padding: 10px 24px;
            color: white;
            font-weight: 700;
            font-size: 18px;
            line-height: 25px;
            cursor: pointer;
        }

        .center__line--wrap {
            position: absolute;
            height: 806px;
            width: 0;
            border: 3px solid #CCDEEB;
            top: 122px;
            left: 856px;
        }

        .ketqua__wrap {
            position: absolute;
            left: 956px;
            top: 96px;
            width: 518px;
        }

        .ketqua__wrap h2 {
            font-weight: 800;
            font-size: 24px;
            line-height: 33px;
            margin-bottom: 34px;
            color: #00599D;
        }

        .ketqua__wrap div {
            margin-bottom: 24px;
        }

        .ketqua__wrap div label {
            margin-bottom: 8px;
        }

        .show__ktqua {
            display: flex;
            width: 518px;
        }

        .ketqua__wrap input {
            width: 518px;
            height: 48px;
            background: #F0F0F0;
            border-radius: 4px;
        }

        .show__ktqua input {
            width: 247px;
        }

        .show__ktqua div {
            margin-right: 24px;
        }

        .save__form {
            width: 246px;
            height: 56px;

            background: #C2C2C2;
            font-weight: 700;
            font-size: 18px;
            line-height: 25px;
            margin-top: 80px;
            margin-left: 150px;
            color: #FFFFFF;
            box-shadow: 0px 0px 6px #E7E9F2;
            border-radius: 2px;
            cursor: pointer;
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
        <div class="chat__suport--">
            <button class="chat">
                CHAT VỚI<br>
                TƯ VẤN VIÊN
                <img class="__img" src="./image/Icon/messenger.png" alt="">
            </button>
        </div>
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
                <a class="active" href="./search.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/search.png" alt=""> TRA
                    CỨU</a>
                <a href="./action.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/work.png" alt=""> HOẠT
                    ĐỘNG</a>
                <a href="./support.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/contact.png" alt=""> HỖ
                    TRỢ</a>
            </div>
            <div class="right__nav--wrap">

                <div class="search_bar">
                    <img src="./image/Icon/search.png" class="search_icon" alt="search_icon">
                    <input type="text" placeholder="Say something">
                </div>
                <a href="./profile.php" class="account__png--wrap">
                    <img src="./image/Account_IMG/Account1.png" alt="user_02158">
                </a>
            </div>
        </div>
        <div class="index__blank--wrap"></div>

        <div style="background-image: url('./image/Background__img/index_page/landmark__Img.png');" class="ontop__content--wrap">
        </div>
        <div class="center__homepage--content">
            <button class="show__centernewcontent--wrap">
                <img src="./image/Icon/menu_Icon/red_score.png" alt="">
                <h1 class="menu__big--content">TRA CỨU</h1>
                <div class="line__menucontent--wrap"></div>
            </button>
            <div class="menu__wrap">
                <button class="btn__custum--wrap active">Lộ trình</button>
                <button class="btn__custum--wrap">Trải nghiệm</button>
                <button class="btn__custum--wrap">Bản đồ</button>
            </div>
            <div class="left__form--wrap">
                <form action="" method="post" class="form__css--wrap">
                    <h2>Tra cứu chuyến tàu</h2>
                    <label for="">Chọn tuyến</label><br>
                    <select name="tuyen" id="tuyen">
                        <option value="M1">M1</option>
                        <option value="M2">M2</option>
                        <option value="M3">M3</option>
                        <option value="M4">M4</option>
                        <option value="M5">M5</option>
                    </select>
                    <br>
                    <label for="">Phương tiện di chuyển</label> <br>
                    <input type="radio" name="ptdc" value="Chỉ Metro">Chỉ Metro
                    <div class="ptienkhac__wrap">
                        <input type="radio" name="ptdc" value="ptk">Có bao gồm phương tiện khác:
                        <input type="checkbox" name="tenpt" value="Xe buýt">Xe buýt
                        <input type="checkbox" name="tenpt" value="Xe ôm">Xe ôm
                        <input type="checkbox" name="tenpt" value="Taxi">Taxi
                    </div>
                    <label for="">Địa điểm</label>
                    <h3>Tra cứu theo</h3>
                    <div class="ptienkhac__wrap tien__wrap">
                        <input type="radio" name="theo" id="" value="tram">Trạm
                        <input type="radio" name="theo" id="" value="toaNha">Tòa nhà
                        <input type="radio" name="theo" id="" value="diachi">Địa Chỉ
                    </div>
                    <div class="map__location--togo">
                        <div class="diemdi">
                            <label for="">Điểm đi</label>
                            <input type="text" class="location__page--wrap" placeholder="Nhập địa chỉ hoặc chọn trên bản đồ">
                            <div>
                                <input type="radio" value="laydiachi"> Lấy địa chỉ liên hệ
                            </div>
                        </div>
                        <div class="diemdi">
                            <label for="">Điểm đến</label>
                            <input type="text" class="location__page--wrap" placeholder="Nhập địa chỉ hoặc chọn trên bản đồ">
                            <div>
                                <input type="radio" value="laydiachi"> Lấy địa chỉ liên hệ
                            </div>
                        </div>
                    </div>
                    <label for="">Loại vé</label>
                    <div class="cssforthis">
                        <input type="radio" name="loaive">Vé lẻ
                        <input type="radio" name="loaive">Vé tuần
                        <input type="radio" name="loaive">Vé tháng
                        <input type="radio" name="loaive">Vé năm
                    </div>
                    <label for="">Thời gian xuất phát</label><br>
                    <input type="text" class="datepicker">
                    <input type="text" class="timepicker">
                    <br>
                    <button type="submit" class="submit__btn--form">Tra Cứu</button>
                </form>
            </div>
            <div class="center__line--wrap">
            </div>
            <div class="ketqua__wrap">
                <h2>Kết quả</h2>
                <div class="show__ktqua">
                    <div>
                        <label for="">Tuyến tàu</label><br>
                        <input type="text" name="" id="">

                    </div>
                    <div>
                        <label for="">Phương tiện</label><br>
                        <input type="text" name="" id="">

                    </div>
                </div>
                <div>
                    <label for="">Điểm lên tàu</label><br>
                    <input type="text" name="" id="">

                </div>
                <div>
                    <label for="">Điểm xuống tàu</label><br>
                    <input type="text" name="" id="">

                </div>
                <div class="show__ktqua">
                    <div>
                        <label for="">Thời gian lên tàu (dự kiến)</label><br>
                        <input type="text" name="" id="">

                    </div>
                    <div>
                        <label for="">Thời gian xuống tàu (dự kiến)</label><br>
                        <input type="text" name="" id="">

                    </div>
                </div>
                <div class="show__ktqua">
                    <div>
                        <label for="">Chi phí</label><br>
                        <input type="text" name="" id="">

                    </div>
                    <div>
                        <label for="">Loại vé</label><br>
                        <input type="text" name="" id="">

                    </div>
                </div>
                <button class="save__form">Lưu lộ trình</button>
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