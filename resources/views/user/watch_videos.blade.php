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
        <script src="https://www.youtube.com/iframe_api"></script>
        <div class="container">
            <div class="video-home">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="news-detail">
                            <div id="player"></div>
                            <div class="alert alert-warning text-center" role="alert">
                                <i class="fa-solid fa-video-slash"></i> Vui lòng đăng ký thành viên để xem video
                            </div>
                            <h1 class="title mt-4"
                                style="border: none;text-transform: initial;font-size: 20px;margin-bottom: 0;">Máy bay
                                côn trùng</h1>
                            <div class="head d-flex justify-content-between mt-3 mb-4">
                                <div>
                                    <span class="me-3"><i class="fa-regular fa-calendar-days me-2"></i>
                                        26/08/2024</span>
                                    <a href="video-hom-nay.html"><i class="fa-solid fa-tag me-2"></i> Video hôm nay</a>
                                </div>

                                <div class="chiase">
                                    Chia sẻ:
                                    <a href="http://www.facebook.com/sharer/sharer.php?u=https://nanaytb.com/may-bay-con-trung.html"
                                        title="" class="share" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?text=M%c3%a1y%20bay%20c%c3%b4n%20tr%c3%b9ng&amp;url=https://nanaytb.com/may-bay-con-trung.html"
                                        class="share" title="" target="_blank">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a class="share"
                                        href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://nanaytb.com/may-bay-con-trung.html&amp;title=M%c3%a1y%20bay%20c%c3%b4n%20tr%c3%b9ng&amp;source=https://nanaytb.com/may-bay-con-trung.html"
                                        title="" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-details">
                                <p>.</p>
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
                            <h1 class="title">Thành viên đăng nhập</h1>
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
                                src="https://www.youtube.com/embed/1x0UWc17hmo?autoplay=1&amp;mute=1&amp;loop=1"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <h2 class="title_home mt-5">
                    <span>Video khác</span>
                </h2>
                <div class="swiper swiper_video">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide item_video">
                            <a href="dai-noi-loan.html" class="box_video">
                                <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                <img src="../img.youtube.com/vi/-iJ5RnnWMkc/maxresdefault.jpg" alt="Đại nỗi loạn" />
                            </a>
                            <h3>
                                <a href="dai-noi-loan.html" title="Đại nỗi loạn">Đại nỗi loạn</a>
                            </h3>
                        </div>
                        <div class="swiper-slide item_video">
                            <a href="hon-ma.html" class="box_video">
                                <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                <img src="../img.youtube.com/vi/ra0Y2p1uRlA/maxresdefault.jpg" alt="Hon ma" />
                            </a>
                            <h3>
                                <a href="hon-ma.html" title="Hon ma">Hon ma</a>
                            </h3>
                        </div>
                        <div class="swiper-slide item_video">
                            <a href="tinh-nguoc-doi.html" class="box_video">
                                <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                <img src="../img.youtube.com/vi/sZplZiDOU14/maxresdefault.jpg" alt="Tính ngược đời" />
                            </a>
                            <h3>
                                <a href="tinh-nguoc-doi.html" title="Tính ngược đời">Tính ngược đời</a>
                            </h3>
                        </div>
                        <div class="swiper-slide item_video">
                            <a href="dong-vat-hoang-da.html" class="box_video">
                                <i class="fa-brands fa-youtube position-absolute top-50 start-50 translate-middle"></i>
                                <img src="../img.youtube.com/vi/pzL_FW80zoY/maxresdefault.jpg"
                                    alt="Động vật hoang dã" />
                            </a>
                            <h3>
                                <a href="dong-vat-hoang-da.html" title="Động vật hoang dã">Động vật hoang dã</a>
                            </h3>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
        <style>
            #player {
                pointer-events: none;
            }
        </style>

        <script>

            var player;
            var playButton = document.getElementById('playButton');
            var pauseButton = document.getElementById('pauseButton');
            var countdownElement = document.getElementById('countdown');
            var countdownInterval;
            var timer;
            var isRunning = false;
            var isPaused = false;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '450',
                    width: '640',
                    videoId: 'xMjq8KvYZ00', // Thay bằng ID của video YouTube
                });
            }
            var tag = document.createElement('script');
            tag.src = 'https://www.youtube.com/iframe_api';
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        </script>


        <script type="text/javascript"
            src="../ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <script>

            $(document).ready(function () {
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
        <script src="../cdn.jsdelivr.net/npm/%40fancyapps/ui%405.0/dist/fancybox/fancybox.umd.js"></script>
        <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/%40fancyapps/ui%405.0/dist/fancybox/fancybox.css" />
    </main>

@endsection