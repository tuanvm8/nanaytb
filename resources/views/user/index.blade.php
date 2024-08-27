@extends('user.main')
@section('templateContent')
<main class="mb-5">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="title_home"> <span>Video hôm nay</span></h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="dong-vat-hoang-da.html" class="box_video">
                                    <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/pzL_FW80zoY/maxresdefault.jpg" alt="Động vật hoang dã" />
                                </a>
                                <h3>
                                    <a href="dong-vat-hoang-da.html" title="Động vật hoang dã">Động vật hoang dã</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="tinh-nguoc-doi.html" class="box_video">
                                    <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/sZplZiDOU14/maxresdefault.jpg" alt="Tính ngược đời" />
                                </a>
                                <h3>
                                    <a href="tinh-nguoc-doi.html" title="Tính ngược đời">Tính ngược đời</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="hon-ma.html" class="box_video">
                                    <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/ra0Y2p1uRlA/maxresdefault.jpg" alt="Hon ma" />
                                </a>
                                <h3>
                                    <a href="hon-ma.html" title="Hon ma">Hon ma</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="may-bay-con-trung.html" class="box_video">
                                    <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/xMjq8KvYZ00/maxresdefault.jpg" alt="Máy bay côn trùng" />
                                </a>
                                <h3>
                                    <a href="may-bay-con-trung.html" title="Máy bay côn trùng">Máy bay côn trùng</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="item_video">
                                <a href="dai-noi-loan.html" class="box_video">
                                    <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                    <img src="../img.youtube.com/vi/-iJ5RnnWMkc/maxresdefault.jpg" alt="Đại nỗi loạn" />
                                </a>
                                <h3>
                                    <a href="dai-noi-loan.html" title="Đại nỗi loạn">Đại nỗi loạn</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-login" style="padding: 0;">
                        <h1 class="title" style="margin-top: 50px;">Thành viên đăng nhập</h1>
                        <form method="POST" action="#" id="form-dangnhap">
                            <input type="hidden" value="799e879e227ea4deccaf031bf8148aadfe019455" name="_token" />
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" required="" name="email" class=" form-control" placeholder="Nhập email">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <input required="" type="password" class=" form-control" name="password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="mb-4 d-flex justify-content-between">
                                <div class="chek-form ">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="save" id="exampleCheckbox1" value="1">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Ghi nhớ đăng nhập</span></label>
                                    </div>
                                </div>
                                <a href="quen-mat-khau.html">Quên mật khẩu?</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-main" name="login">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <img class="img_gioithieu" src="img_data/images/avata/DFCC1B02-2C31-4864-AB9C-C1256E9ABA02.jpg" alt="Kiếm tiền khi tham gia cùng  kiemtienyoutube.com " />
                        </div>
                        <div class="col-md-12">
                            <!--h1 class="gioithieu_title">Kiếm tiền khi tham gia cùng  kiemtienyoutube.com </h1-->
                            <div class="gioithieu_des">
                                <p>Nhận điểm thưởng hằng ng&agrave;y khi xem video v&agrave; nhận ngay kho kiến thức khi đăng k&yacute; t&agrave;i khoản trị gi&aacute; rất cao từ Bậc thầy Phan Anh.</p>

                                <p>Đến với KIEMTIENYOUTUBE.COM&nbsp; bạn được Bật M&iacute; c&aacute;ch kiếm tiền bằng k&ecirc;nh Youtube, Tik Tok, kiếm tiền tr&ecirc;n c&aacute;c nền tưởng thương mại điện tử như Shopee, Lazada&hellip;</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script type="text/javascript" src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
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
