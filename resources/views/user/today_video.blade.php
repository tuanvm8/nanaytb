@extends('user.main')
@section('templateContent')
<main class="mb-5">
    <div class="head_page">
        <div class="container">

            <ol vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb">
                <li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
                    <a property="item" typeof="WebPage" href="index.html">
                        <span property="name">Trang chủ</span></a>
                    <meta property="position" content="1">
                </li>

                <li property="itemListElement" typeof="ListItem" class="breadcrumb-item active">
                    <a property="item" typeof="WebPage" href="video-hom-nay.html">
                        <span property="name">Video hôm nay</span></a>
                    <meta property="position" content="2">
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h1
                    style="text-align: center;text-transform: uppercase;font-size: 30px;color: #fe4a55;border-bottom: 2px solid;padding-bottom: 7px;margin-top: 30px;font-weight: 600;">
                    Video hôm nay</h1>
                <div class="my-4">
                    <p style="text-align:center">Nhận điểm thưởng hằng ng&agrave;y khi xem video v&agrave; nhận ngay
                        kho kiến thức khi đăng k&yacute; t&agrave;i khoản trị gi&aacute; rất cao từ Bậc thầy Phan
                        Anh. Đến với &nbsp;KIEMTIENYOUTUBE.COM bạn được Bật M&iacute; c&aacute;ch kiếm tiền bằng
                        k&ecirc;nh Youtube, Tik Tok, kiếm tiền tr&ecirc;n c&aacute;c nền tưởng thương mại điện tử
                        như Shopee, Lazada&hellip;</p>
                </div>
                <div class="video-home">
                    <div class="row g-4">

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="dai-noi-loan.html" class="box_video">
                                    <i
                                        class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/-iJ5RnnWMkc/maxresdefault.jpg"
                                        alt="Đại nỗi loạn" />
                                </a>
                                <h3>
                                    <a href="dai-noi-loan.html" title="Đại nỗi loạn">Đại nỗi loạn</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="may-bay-con-trung.html" class="box_video">
                                    <i
                                        class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/xMjq8KvYZ00/maxresdefault.jpg"
                                        alt="Máy bay côn trùng" />
                                </a>
                                <h3>
                                    <a href="may-bay-con-trung.html" title="Máy bay côn trùng">Máy bay côn trùng</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="hon-ma.html" class="box_video">
                                    <i
                                        class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/ra0Y2p1uRlA/maxresdefault.jpg" alt="Hon ma" />
                                </a>
                                <h3>
                                    <a href="hon-ma.html" title="Hon ma">Hon ma</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="tinh-nguoc-doi.html" class="box_video">
                                    <i
                                        class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/sZplZiDOU14/maxresdefault.jpg"
                                        alt="Tính ngược đời" />
                                </a>
                                <h3>
                                    <a href="tinh-nguoc-doi.html" title="Tính ngược đời">Tính ngược đời</a>
                                </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="dong-vat-hoang-da.html" class="box_video">
                                    <i
                                        class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/pzL_FW80zoY/maxresdefault.jpg"
                                        alt="Động vật hoang dã" />
                                </a>
                                <h3>
                                    <a href="dong-vat-hoang-da.html" title="Động vật hoang dã">Động vật hoang dã</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <aside class="sidebar">
                    <div class="widget recent-post">
                        <h5 class="widget-title">Bài viết nổi bật</h5>

                    </div>
                </aside>
                <div class="box-login" style="padding: 0;">
                    <h1 class="title" style="">Thành viên đăng nhập</h1>
                    <form method="POST" action="#" id="form-dangnhap">
                        <input type="hidden" value="799e879e227ea4deccaf031bf8148aadfe019455" name="_token" />
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" required="" name="email" class=" form-control"
                                placeholder="Nhập email">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Mật khẩu</label>
                            <input required="" type="password" class=" form-control" name="password"
                                placeholder="Nhập mật khẩu">
                        </div>
                        <div class="mb-4 d-flex justify-content-between">
                            <div class="chek-form ">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="save"
                                        id="exampleCheckbox1" value="1">
                                    <label class="form-check-label" for="exampleCheckbox1"><span>Ghi nhớ đăng
                                            nhập</span></label>
                                </div>
                            </div>
                            <a href="quen-mat-khau.html">Quên mật khẩu?</a>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-main" name="login">Đăng nhập</button>
                        </div>
                    </form>
                </div>
                <div style="position: relative;">
                    <span
                        style="position: absolute;width: 100%;height: 100%;background-color: #fff;left: 0;right: 0;"></span>
                    <iframe style="width: 100%;" width="560" height="315"
                        src="https://www.youtube.com/embed/ndCBhq5MVOU?autoplay=1&amp;mute=1&amp;loop=1"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript"
        src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
            $("#form-dangnhap").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: "Vui lòng nhập email",
                        email: "Vui lòng nhập đúng định dạng mail"
                    },
                    password: {
                        required: "Vui lòng nhập mật khẩu"
                    }
                }
            });
        });
    </script>
</main>

@endsection